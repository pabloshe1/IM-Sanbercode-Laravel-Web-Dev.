<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    // Menampilkan daftar semua transaksi (Poin 15)
    public function index()
    {
        // Mengambil data transaksi beserta relasi user dan produknya
        $transactions = Transaction::with(['user', 'product'])->get();
        return response()->json($transactions);
    }

    // Mencatat transaksi baru dan memperbarui stok produk otomatis (Poin 15)
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:in,out', // 'in' untuk stok masuk, 'out' untuk stok keluar
            'amount' => 'required|integer|min:1',
            'notes' => 'nullable|string',
        ]);

        $product = Product::findOrFail($request->product_id);

        // Menggunakan Database Transaction untuk memastikan integritas data
        return DB::transaction(function () use ($request, $product) {
            
            // Validasi: Jika stok keluar, pastikan stok yang ada mencukupi
            if ($request->type == 'out' && $product->stock < $request->amount) {
                return response()->json([
                    'message' => 'Gagal: Stok tidak mencukupi. Stok saat ini hanya: ' . $product->stock
                ], 400);
            }

            // 1. Simpan data ke tabel transactions
            $transaction = Transaction::create([
                'user_id' => Auth::id(), // ID dari user (admin/staff) yang sedang login
                'product_id' => $request->product_id,
                'type' => $request->type,
                'amount' => $request->amount,
                'notes' => $request->notes ?? '-',
            ]);

            // 2. Update kolom stok di tabel products secara otomatis
            if ($request->type == 'in') {
                $product->increment('stock', $request->amount);
            } else {
                $product->decrement('stock', $request->amount);
            }

            return response()->json([
                'message' => 'Berhasil: Transaksi dicatat dan stok produk diperbarui.',
                'data' => $transaction->load('product')
            ], 201);
        });
    }
}
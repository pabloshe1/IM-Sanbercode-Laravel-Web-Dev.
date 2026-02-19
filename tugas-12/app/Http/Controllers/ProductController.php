<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    // Menampilkan semua produk ke halaman Blade (Poin 40)
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // Menambah produk baru + Upload Gambar (Poin 40)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Logic Upload Gambar ke folder public/images
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'image' => 'images/' . $imageName,
        ]);

        // Redirect kembali ke daftar produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil dibuat');
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('products.show', compact('product'));
    }
    
    // ... fungsi update dan destroy menyesuaikan dengan redirect()
}
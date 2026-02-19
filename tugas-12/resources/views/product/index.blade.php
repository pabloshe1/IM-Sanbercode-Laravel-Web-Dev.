@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Daftar Produk</h1>
    <div class="card mb-4">
        <div class="card-header">
            <a href="/products/create" class="btn btn-primary btn-sm">Tambah Produk Baru</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->image) }}" width="80px" alt="Product Image">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>Rp {{ number_format($item->price) }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>
                                <a href="/products/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
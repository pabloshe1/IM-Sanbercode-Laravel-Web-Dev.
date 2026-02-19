@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Produk</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="price" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label>Foto Produk</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan Produk</button>
                <a href="/product" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tambah Kategori</h1>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/category" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nama Kategori</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama kategori" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Masukkan deskripsi" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/category" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
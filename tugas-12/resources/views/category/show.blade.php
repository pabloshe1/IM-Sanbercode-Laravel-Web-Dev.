@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Kategori</h1>
    <div class="card mb-4">
        <div class="card-body">
            <h3>Nama: {{ $category->name }}</h3>
            <p><strong>Deskripsi:</strong> {{ $category->description }}</p>
            <hr>
            <a href="/category" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection
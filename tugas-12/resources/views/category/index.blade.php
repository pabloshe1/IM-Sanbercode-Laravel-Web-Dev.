@extends('layouts.master')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Daftar Kategori</h1>
    <div class="card mb-4">
        <div class="card-header">
            <a href="/category/create" class="btn btn-primary btn-sm">Tambah Kategori</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nama Kategori</th>
                        <th style="width: 280px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <form action="/category/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="/category/{{ $item->id }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="/category/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Data kategori masih kosong.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card" style="width: 400px;">
        <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
            <p class="text-center mt-3">Belum punya akun? <a href="/register">Daftar sekarang</a></p>
        </div>
    </div>
</div>
@endsection
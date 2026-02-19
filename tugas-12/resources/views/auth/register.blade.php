@extends('layouts.master')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card" style="width: 400px;">
        <div class="card-body">
            <h3 class="text-center mb-4">Daftar Akun</h3>
            <form action="/register" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Minimal 6 karakter" required>
                </div>
                <div class="form-group mb-3">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="/login">Login di sini</a></p>
        </div>
    </div>
</div>
@endsection
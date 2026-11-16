@extends('layouts.guest')
@section('title', 'Masuk')

@section('content')
<h4 class="fw-bold text-center mb-1">Selamat datang</h4>
<p class="text-secondary text-center mb-4">Masuk untuk mengelola data kos.</p>

<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror" autofocus>
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password"
               class="form-control @error('password') is-invalid @enderror">
        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember">
        <label class="form-check-label" for="remember">Ingat saya</label>
    </div>

    <button class="btn btn-brand w-100">Masuk</button>
</form>

<p class="text-center text-secondary mt-4 mb-0">
    Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
</p>
@endsection
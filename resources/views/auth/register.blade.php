@extends('layouts.guest')
@section('title', 'Daftar')

@section('content')
<h4 class="fw-bold text-center mb-1">Buat akun</h4>
<p class="text-secondary text-center mb-4">Daftar sebagai staf untuk mulai memakai sistem.</p>

<form action="{{ route('register') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nama lengkap</label>
        <input type="text" name="name" value="{{ old('name') }}"
               class="form-control @error('name') is-invalid @enderror" autofocus>
        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror">
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password"
               class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter">
        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Ulangi password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <button class="btn btn-brand w-100">Daftar</button>
</form>

<p class="text-center text-secondary mt-4 mb-0">
    Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
</p>
@endsection
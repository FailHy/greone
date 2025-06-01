@extends('layouts.app')

@section('content')
<div style="max-width: 400px; margin: 40px auto; padding: 30px; border: 1px solid #ccc; border-radius: 10px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 20px;">Buat Akun Baru</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px; text-align: center;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf
        <div style="margin-bottom: 15px;">
            <label>Nama</label><br>
            <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #aaa;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #aaa;">
        </div>
        <div style="margin-bottom: 15px;">
            <label>Password</label><br>
            <input type="password" name="password" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #aaa;">
        </div>
        <div style="margin-bottom: 20px;">
            <label>Konfirmasi Password</label><br>
            <input type="password" name="password_confirmation" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #aaa;">
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 5px;">
            Register
        </button>
    </form>

    <p style="margin-top: 20px; text-align: center;">Sudah punya akun? <a href="/login" style="color: #28a745" ><b>Login di sini</b></a></p>
</div>
@endsection

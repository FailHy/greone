@extends('layouts.app')

@section('content')
<div style="max-width: 400px; margin: 40px auto; padding: 30px; border: 1px solid #ccc; border-radius: 10px; background: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 20px;">Login Akun</h2>

    @if (session('success'))
        <div style="color: green; margin-bottom: 15px; text-align: center;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px; text-align: center;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div style="margin-bottom: 15px;">
            <label>Email</label><br>
            <input type="email" name="email" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #aaa;">
        </div>
        <div style="margin-bottom: 20px;">
            <label>Password</label><br>
            <input type="password" name="password" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #aaa;">
        </div>
        <button type="submit" style="width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 5px;">
            Login
        </button>
    </form>

    <p style="margin-top: 20px; text-align: center;">Belum punya akun? <a href="/register" style="color: #007bff" ><b>Daftar</b></a></p>
</div>
@endsection

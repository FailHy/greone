@extends('layouts.app')

@section('content')
<div style="max-width: 500px; margin: 60px auto; background: white; border-radius: 12px; padding: 30px 40px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); text-align: center; font-family: sans-serif;">
    
    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=0D8ABC&color=fff&size=100" alt="Avatar" style="border-radius: 50%; margin-bottom: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">

    <h2 style="margin-bottom: 10px; font-size: 24px; font-weight: bold; color: #333;">
        Halo, {{ $user->name }}!
    </h2>
    <p style="font-size: 16px; color: #666;">
        <strong>Email:</strong> {{ $user->email }}
    </p>

    <form method="POST" action="/logout" style="margin-top: 30px;">
        @csrf
        <button type="submit" style="padding: 10px 20px; background: #e3342f; color: white; border: none; border-radius: 6px; cursor: pointer; font-weight: bold;">
            Logout
        </button>
    </form>
</div>
@endsection

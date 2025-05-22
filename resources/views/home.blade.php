@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white shadow rounded p-4 transition transform hover:scale-105 hover:shadow-lg">
        <img src="https://via.placeholder.com/300x200" alt="Sayuran" class="rounded mb-2">
        <h3 class="text-xl font-semibold">Sayuran Hidroponik</h3>
        <p class="text-gray-600">15 Produk</p>
    </div>
    <div class="bg-white shadow rounded p-4 transition transform hover:scale-105 hover:shadow-lg">
        <img src="https://via.placeholder.com/300x200" alt="Pupuk" class="rounded mb-2">
        <h3 class="text-xl font-semibold">Pupuk</h3>
        <p class="text-gray-600">8 Produk</p>
    </div>
    <div class="bg-white shadow rounded p-4 transition transform hover:scale-105 hover:shadow-lg">
        <img src="https://via.placeholder.com/300x200" alt="Kebun" class="rounded mb-2">
        <h3 class="text-xl font-semibold">Kebun Hidroponik</h3>
        <p class="text-gray-600">3 Produk</p>
    </div>
</div>
@endsection

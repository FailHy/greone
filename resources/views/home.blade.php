@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white shadow rounded p-6 transition transform hover:scale-105 hover:shadow-lg h-full flex flex-col items-center">
        <img src="{{asset('img/sayuran.jpg')}}" alt="Sayuran"
            class="w-full aspect-square object-cover rounded mb-4">
        <h3 class="text-xl font-semibold text-center">Sayuran Hidroponik</h3>
        <p class="text-gray-600 text-center">15 Produk</p>
    </div>

    <div class="bg-white shadow rounded p-6 transition transform hover:scale-105 hover:shadow-lg h-full flex flex-col items-center">
        <img src="{{asset('img/pupuk.jpg')}}" alt="Pupuk"
            class="w-full aspect-square object-cover rounded mb-4">
        <h3 class="text-xl font-semibold text-center">Pupuk</h3>
        <p class="text-gray-600 text-center">8 Produk</p>
    </div>

    <div class="bg-white shadow rounded p-6 transition transform hover:scale-105 hover:shadow-lg h-full flex flex-col items-center">
        <img src="{{asset('img/kebun.png')}}" alt="Kebun"
            class="w-full aspect-square object-cover rounded mb-4">
        <h3 class="text-xl font-semibold text-center">Kebun Hidroponik</h3>
        <p class="text-gray-600 text-center">3 Produk</p>
    </div>
</div>

@endsection

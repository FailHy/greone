@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">

    {{-- Kategori: Sayur --}}
    <section class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Sayuran Hidroponik</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($sayur as $item)
            <div class="bg-white shadow rounded p-4 text-center">
                <img src="{{ asset('storage/' . $item->gambar_url) }}" alt="{{ $item->nama_produk }}" class="h-32 w-full object-cover mb-3 rounded">
                <div class="font-semibold">{{ $item->nama_produk }}</div>
                <div class="text-orange-500 font-bold">Rp{{ number_format($item->harga, 0, ',', '.') }}</div>
                <button class="mt-2 bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                    Tambah Keranjang
                </button>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Kategori: Pupuk --}}
    <section class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Pupuk</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($pupuk as $item)
            <div class="bg-white shadow rounded p-4 text-center">
                <img src="{{ asset('storage/' . $item->gambar_url) }}" alt="{{ $item->nama_produk }}" class="h-32 w-full object-cover mb-3 rounded">
                <div class="font-semibold">{{ $item->nama_produk }}</div>
                <div class="text-orange-500 font-bold">Rp{{ number_format($item->harga, 0, ',', '.') }}</div>
                <button class="mt-2 bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                    Tambah Keranjang
                </button>
            </div>
            @endforeach
        </div>
    </section>

    {{-- Kategori: Kebun --}}
    <section class="mb-12">
        <h2 class="text-2xl font-semibold mb-4">Instalasi Kebun Hidroponik</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($kebun as $item)
            <div class="bg-white shadow rounded p-4 text-center">
                <img src="{{ asset('storage/' . $item->gambar_url) }}" alt="{{ $item->nama_produk }}" class="h-32 w-full object-cover mb-3 rounded">
                <div class="font-semibold">{{ $item->nama_produk }}</div>
                <div class="text-orange-500 font-bold">Rp{{ number_format($item->harga, 0, ',', '.') }}</div>
                <button class="mt-2 bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">
                    Tambah Keranjang
                </button>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection

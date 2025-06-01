{{-- resources/views/alamat/index.blade.php --}}
@extends('layouts.alamat')

@section('alamat-content')
<div class="mb-6 flex flex-col sm:flex-row justify-between items-center gap-4">
    <form action="{{ route('alamat.index') }}" method="GET" class="w-full sm:w-auto">
        <input type="text" name="search" 
               class="w-full sm:w-64 border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400" 
               placeholder="🔍 Cari nama penerima..." 
               value="{{ request('search') }}">
    </form>

    <a href="{{ route('alamat.create') }}" 
       class="bg-green-600 hover:bg-green-700 transition text-white px-5 py-2 rounded-lg shadow-md font-semibold">
        + Tambah Alamat
    </a>
</div>

@forelse($alamats as $alamat)
    <div class="bg-white border border-green-100 rounded-xl shadow-sm p-5 mb-5 transition hover:shadow-md">
        <div class="text-green-700 font-semibold text-sm uppercase tracking-wide mb-1">{{ $alamat->label }}</div>
        <h2 class="text-lg font-bold text-gray-800">{{ $alamat->nama_penerima }}</h2>
        <p class="text-sm text-gray-600">{{ $alamat->nomor_hp }}</p>
        <p class="text-sm text-gray-600">{{ $alamat->provinsi }}, {{ $alamat->kota }}</p>
        <p class="text-sm text-gray-600 mb-3">{{ $alamat->detail_alamat }}</p>

        <div class="flex gap-3">
            <a href="{{ route('alamat.edit', $alamat->id) }}" 
               class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm transition">
                ✏️ Perbarui
            </a>
            <form action="{{ route('alamat.destroy', $alamat->id) }}" method="POST" 
                  onsubmit="return confirm('Hapus alamat ini?')" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="text-red-500 border border-red-400 hover:bg-red-50 px-4 py-2 rounded-lg text-sm transition">
                    🗑️ Hapus
                </button>
            </form>
        </div>
    </div>
@empty
    <div class="text-center text-gray-500 py-10">
        <p class="text-lg">📭 Belum ada alamat disimpan.</p>
    </div>
@endforelse
@endsection

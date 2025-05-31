@extends('layouts.profileuser')

@section('content')
<div class="bg-white p-6 rounded shadow-md w-full">
    <h2 class="text-xl font-semibold mb-4 text-green-700">Informasi Biodata Diri</h2>

    @if(session('success'))
        <div class="text-green-600 mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="flex items-center space-x-4">
            <img src="{{ $user->foto ? asset('storage/photos/' . $user->foto) : 'https://via.placeholder.com/100' }}" class="w-24 h-24 rounded-full object-cover">
            <div>
                <label class="block font-medium">Upload Foto</label>
                <input type="file" name="foto" class="mt-1">
            </div>
        </div>

        <div>
            <label class="block font-medium">Nama</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <label class="block font-medium">Email</label>
            <input type="email" value="{{ $user->email }}" disabled class="w-full border rounded px-3 py-2 bg-gray-100">
        </div>

        <div>
            <label class="block font-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full border rounded px-3 py-2">
                <option value="">Pilih</option>
                <option value="Laki-laki" {{ $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div>
            <label class="block font-medium">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" class="w-full border rounded px-3 py-2">
        </div>

        <div class="text-right">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Edit Profile</button>
        </div>
    </form>
</div>
@endsection

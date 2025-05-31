<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    <!-- Nama -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <label class="block font-medium text-gray-700">Nama Lengkap</label>
        <div class="md:col-span-2">
            <input type="text" name="name" value="{{ old('name', $user->name) }}" 
                   class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Email (readonly) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <label class="block font-medium text-gray-700">Email</label>
        <div class="md:col-span-2">
            <input type="email" value="{{ $user->email }}" readonly
                   class="w-full p-3 bg-gray-100 border border-gray-300 rounded-lg cursor-not-allowed">
        </div>
    </div>

    <!-- Jenis Kelamin -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <label class="block font-medium text-gray-700">Jenis Kelamin</label>
        <div class="md:col-span-2">
            <select name="jenis_kelamin" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Tanggal Lahir -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
        <label class="block font-medium text-gray-700">Tanggal Lahir</label>
        <div class="md:col-span-2">
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" 
                   class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            @error('tanggal_lahir')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Upload Foto -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
        <label class="block font-medium text-gray-700">Foto Profil</label>
        <div class="md:col-span-2 space-y-4">
            <div class="flex items-center gap-4">
                @if($user->foto)
                    <img src="{{ asset('storage/photos/'.$user->foto) }}" 
                         class="w-20 h-20 rounded-full object-cover border-2 border-gray-200">
                @else
                    <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center">
                        <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                @endif
                <div class="flex-1">
                    <input type="file" name="foto" accept="image/*" 
                           class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-xs text-gray-500">Format: JPEG, PNG (Max 2MB)</p>
                    @error('foto')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="pt-4">
        <button type="submit" 
                class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
            Simpan Perubahan
        </button>
    </div>
</form>
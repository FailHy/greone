@section('profile-content')
<div class="bg-white rounded-xl shadow-sm p-8">
    <!-- Header Section -->
    <div class="pb-6 mb-8 border-b border-gray-100">
        <h2 class="text-2xl font-bold text-gray-900">Profile Settings</h2>
        <p class="text-gray-500">Manage your personal information and account settings</p>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Profile Sidebar -->
        <div class="lg:w-1/3">
            <div class="flex flex-col items-center">
                <div class="relative mb-4">
                    @if(auth()->user()->foto)
                        <img src="{{ asset('storage/'.auth()->user()->foto) }}"
                             alt="Profile Photo"
                             class="w-32 h-32 rounded-full object-cover border-4 border-white shadow-lg">
                    @else
                        <div class="w-32 h-32 rounded-full bg-gradient-to-br from-blue-100 to-purple-100 flex items-center justify-center shadow-lg border-4 border-white">
                            <span class="text-5xl font-bold text-gray-600">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                        </div>
                    @endif

                    <label for="foto" class="absolute bottom-0 right-0 bg-white p-2 rounded-full shadow-md cursor-pointer hover:bg-gray-50 transition">
                        <i class="fas fa-camera text-blue-600"></i>
                        <input type="file" id="foto" name="foto" class="hidden">
                    </label>
                </div>

                <h3 class="text-xl font-semibold text-gray-800">{{ auth()->user()->name }}</h3>
                <p class="text-gray-500">{{ auth()->user()->email }}</p>
            </div>

            <!-- Info Box -->
            <div class="mt-8 bg-gray-50 p-5 rounded-xl">
                <h4 class="font-medium text-gray-700 mb-3">Detail Akun</h4>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Anggota Sejak</span>
                        <span class="font-medium">{{ auth()->user()->created_at->format('M Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Perubahan Terakhir</span>
                        <span class="font-medium">{{ auth()->user()->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="lg:w-2/3">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="space-y-6">
                    <!-- Grid Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}"
                                       class="pl-10 w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            @error('name')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" id="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                                       class="pl-10 w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            @error('email')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-1.5">Gender</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-venus-mars text-gray-400"></i>
                                </div>
                                <select id="jenis_kelamin" name="jenis_kelamin"
                                        class="pl-10 w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none transition">
                                    <option value="">Select Gender</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin', auth()->user()->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin', auth()->user()->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            @error('jenis_kelamin')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Birth Date -->
                        <div>
                            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1.5">Tanggal Lahir</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar-day text-gray-400"></i>
                                </div>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                       value="{{ old('tanggal_lahir', auth()->user()->tanggal_lahir) }}"
                                       class="pl-10 w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            @error('tanggal_lahir')
                                <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Address -->
                    <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1.5">Alamat</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-map-marker-alt text-gray-400"></i>
                            </div>
                            <select id="alamat" name="alamat"
                                    class="pl-10 w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none transition">
                                <option value="">Pilih alamat</option>
                                @foreach($alamats as $alamat)
                                    <option value="{{ $alamat->kota }}" {{ old('alamat', auth()->user()->alamat) == $alamat->nama ? 'selected' : '' }}>
                                        {{ $alamat->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div id="alamat-custom-container" class="mt-4 hidden">
                            <input type="text" name="alamat_custom" id="alamat_custom"
                                   class="w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                   placeholder="Masukkan alamat lengkap">
                        </div>
                        @error('alamat')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1.5">Password Terakhir (untuk verifikasi)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="current_password" name="current_password"
                                   class="pl-10 w-full py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                   placeholder="Enter current password to save changes">
                        </div>
                        @error('current_password')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end pt-4 space-x-3">
                        <button type="reset"
                                class="px-6 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                            Batal
                        </button>
                        <button type="submit"
                                class="px-6 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

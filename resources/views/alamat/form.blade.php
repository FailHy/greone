{{-- resources/views/alamat/form.blade.php --}}
@php
    $alamat = $alamat ?? new \App\Models\Alamat;
@endphp

<div class="space-y-4">
    <!-- Label Alamat Dropdown -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1.5">Label Alamat</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-tag text-gray-400"></i>
            </div>
            <select name="label" 
                    class="pl-10 w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition">
                <option value="">-- Pilih Label Alamat --</option>
                <option value="rumah" {{ old('label', $alamat->label) == 'rumah' ? 'selected' : '' }}>Rumah</option>
                <option value="kantor" {{ old('label', $alamat->label) == 'kantor' ? 'selected' : '' }}>Kantor</option>
                <option value="other" {{ old('label', $alamat->label) == 'other' ? 'selected' : '' }}>Lainnya</option>
            </select>
        </div>
    </div>

    <!-- Nama Penerima -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Penerima</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-user text-gray-400"></i>
            </div>
            <input name="nama_penerima" placeholder="Nama lengkap penerima" 
                   class="pl-10 w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                   value="{{ old('nama_penerima', $alamat->nama_penerima) }}">
        </div>
    </div>

    <!-- Nomor HP -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1.5">Nomor HP</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-phone-alt text-gray-400"></i>
            </div>
            <input name="nomor_hp" placeholder="Nomor handphone aktif" 
                   class="pl-10 w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                   value="{{ old('nomor_hp', $alamat->nomor_hp) }}">
        </div>
    </div>

    <!-- Provinsi -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1.5">Provinsi</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-map-marked-alt text-gray-400"></i>
            </div>
            <input name="provinsi" placeholder="Provinsi" 
                   class="pl-10 w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                   value="{{ old('provinsi', $alamat->provinsi) }}">
        </div>
    </div>

    <!-- Kota -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1.5">Kota/Kabupaten</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <i class="fas fa-city text-gray-400"></i>
            </div>
            <input name="kota" placeholder="Kota atau Kabupaten" 
                   class="pl-10 w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
                   value="{{ old('kota', $alamat->kota) }}">
        </div>
    </div>

    <!-- Detail Alamat -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1.5">Detail Alamat</label>
        <div class="relative">
            <div class="absolute top-3 left-3">
                <i class="fas fa-home text-gray-400"></i>
            </div>
            <textarea name="detail_alamat" placeholder="Nama jalan, nomor rumah, gedung, RT/RW, dll"
                      class="pl-10 w-full px-4 py-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition min-h-[100px]">{{ old('detail_alamat', $alamat->detail_alamat) }}</textarea>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="pt-2">
        <button type="submit" 
                class="w-full px-6 py-2.5 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition">
            Simpan Alamat
        </button>
    </div>
</div>
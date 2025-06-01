<div class="p-6 bg-white rounded-xl shadow-lg">
    <!-- Profile Header -->
    <div class="flex flex-col items-center text-center mb-8">
        @if(auth()->user()->foto)
            <img src="{{ asset('storage/' . auth()->user()->foto) }}"
                 alt="Foto Profil"
                 class="w-24 h-24 rounded-full object-cover mb-4 ring-2 ring-green-500">
        @else
            <div class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center mb-4 ring-2 ring-gray-300">
                <span class="text-3xl font-bold text-gray-600">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
            </div>
        @endif

        <h3 class="text-lg font-semibold text-gray-800">{{ auth()->user()->name }}</h3>
        <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
    </div>

    <!-- Navigasi -->
    <nav>
        <ul class="space-y-2 text-sm">
            <li>
                <a href="{{ route('profile.edit') }}"
                   class="flex items-center px-4 py-3 rounded-lg transition-all 
                          {{ request()->routeIs('profile.edit') ? 'bg-green-100 text-green-700 font-medium' : 'text-gray-700 hover:bg-gray-50' }}">
                    <i class="fas fa-user-circle mr-3 text-base"></i>
                    <span>My Account</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-50 transition-all">
                    <i class="fas fa-id-card mr-3 text-base"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('alamat.index') }}"
                   class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-50 transition-all">
                    <i class="fas fa-map-marker-alt mr-3 text-base"></i>
                    <span>Address</span>
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-50 transition-all">
                    <i class="fas fa-shopping-bag mr-3 text-base"></i>
                    <span>Orders</span>
                </a>
            </li>

            <!-- Logout -->
            <li>
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                            class="flex items-center w-full px-4 py-3 rounded-lg text-red-600 hover:bg-red-50 transition-all focus:outline-none">
                        <i class="fas fa-sign-out-alt mr-3 text-base"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>

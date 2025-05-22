<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Bgd Hydrofarm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css" />

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
    .splide__slide img {
        height: auto;
        max-height: 500px; /* kamu bisa sesuaikan */
    }
</style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-green-700 text-white" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Bgd <span class="font-light">hydrofarm.</span></h1>

            <!-- Toggle Button -->
            <button class="md:hidden focus:outline-none" @click="open = !open">
                <svg class="w-6 h-6" fill="none" stroke="white" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6 text-white font-medium">
                <a href="/">Beranda</a>
                <a href="/produk">Produk</a>
                <a href="/artikel">Artikel</a>
                <a href="/kontak">Kontak</a>
                <a href="/tentang">Tentang Kami</a>
                <a href="/chart">🛒</a>
                <a href="/profil">👤</a>
            </nav>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden px-6 pb-4" x-show="open" x-transition x-cloak>
            <a href="/" class="block py-1">Beranda</a>
            <a href="/produk" class="block py-1">Produk</a>
            <a href="/artikel" class="block py-1">Artikel</a>
            <a href="/kontak" class="block py-1">Kontak</a>
            <a href="/tentang" class="block py-1">Tentang Kami</a>
            <a href="/chart" class="block py-1">🛒</a>
            <a href="/profil" class="block py-1">👤</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow text-center py-20 px-6">
        @php
        $path = request()->path();
        $showCarousel = !in_array($path, ['chart', 'profil', 'kontak']);
        @endphp

@if ($showCarousel)
    <div class="w-full">
        <div id="main-carousel" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('img/pict1.jpg') }}" alt="Slide 1" class="w-full object-cover">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/pict2.jpg') }}" alt="Slide 2" class="w-full object-cover">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/pict3.jpg') }}" alt="Slide 3" class="w-full object-cover">
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endif


        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-gray-700 text-center py-4">
        <p>© 2025 Bgd Hydrofarm. All rights reserved.</p>
    </footer>

    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const carousel = document.querySelector('#main-carousel');
            if (carousel) {
                new Splide(carousel, {
                    type      : 'loop',
                    autoplay  : true,
                    interval  : 4000,
                    pauseOnHover: true,
                    arrows    : false,
                    pagination: false,
                    perPage   : 1,
                    gap       : '1rem',
                }).mount();
            }
        });
    </script>

</body>
</html>

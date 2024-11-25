<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech - Kreasi</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
<!-- Header -->
<nav class="bg-white border-b-4 border-purple-300 shadow-md fixed top-0 w-full h-18 z-50">
    <div class="container mx-auto flex items-center justify-between px-6 py-3">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="https://picsum.photos/40" alt="Logo" class="w-10 h-10 rounded-full">
            <h1 class="text-xl font-semibold text-green-700">Cycle Tech</h1>
        </div>

        <!-- Navigation Links -->
        <ul class="hidden md:flex items-center space-x-6 font-medium text-gray-700">
            <li><a href="{{ route('dashboard.nasabah') }}" class="hover:text-green-700">Beranda</a></li>
            <li><a href="{{ route('kelola.sampah') }}" class="hover:text-green-700">Kelola Sampah</a></li>
            <li><a href="{{ route('kreasi') }}" class="text-white bg-green-700 px-5 py-2 rounded-lg hover:bg-green-800">Kreasi</a></li>
            <li><a href="{{ route('tentang.kami') }}" class="hover:text-green-700">Tentang Kami</a></li>
        </ul>

        <!-- Notification & Profile Icons -->
        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-600 hover:text-green-700">
                <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/bell.svg" alt="Notification" class="w-6 h-6">
            </a>
            <a href="#">
                <img src="https://picsum.photos/40" alt="Profile" class="w-10 h-10 rounded-full border border-gray-300">
            </a>
        </div>
    </div>
</nav>

<!-- Kumpulan Kreasi -->
<section class="bg-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800 mt-4">Kumpulan Kreasi</h2>
        <p class="text-gray-600 mt-4">Dapatkan inspirasi dan pengetahuan tentang cara mendaur ulang sampah menjadi produk yang bermanfaat.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg">
                <img src="https://picsum.photos/300/200" alt="Kreasi 1" class="rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                <p class="text-gray-600 mt-2">Oleh Amanda Mumpao</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg">
                <img src="https://picsum.photos/300/200" alt="Kreasi 2" class="rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Lampu Hias dari Sendok Plastik Bekas</h3>
                <p class="text-gray-600 mt-2">Oleh Galih Wicaksana</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg">
                <img src="https://picsum.photos/300/200" alt="Kreasi 3" class="rounded-t-lg">
                <h3 class="text-xl font-semibold text-gray-800 mt-4">Kerajinan Boneka dari Sarung Tangan Bekas</h3>
                <p class="text-gray-600 mt-2">Oleh Aisyah Putri Wardani</p>
            </div>
        </div>
        <button class="bg-green-600 text-white px-6 py-2 mt-8 rounded hover:bg-green-700">Selengkapnya</button>
    </div>
</section>

<!-- Unggah Kreasimu -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800">Unggah Kreasimu</h2>
        <p class="text-gray-600 mt-4">Tunjukkan kreativitasmu! Unggah karya daur ulangmu dan bergabunglah dengan para pecinta lingkungan lainnya.</p>
        <button class="bg-green-600 text-white px-6 py-2 mt-8 rounded hover:bg-green-700">Selengkapnya</button>
    </div>
</section>

<!-- Deteksi Jenis Sampah -->
<section class="bg-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-gray-800">Deteksi Jenis Sampahmu</h2>
        <p class="text-gray-600 mt-4">Penasaran ingin tahu jenis sampahmu? Coba fitur deteksi kami sekarang!</p>
        <button class="bg-green-600 text-white px-6 py-2 mt-8 rounded hover:bg-green-700">Selengkapnya</button>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-10">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
        <div class="mb-6 md:mb-0">
            <img src="https://picsum.photos/50" alt="Logo" class="h-12">
            <p class="mt-4">Cycle Tech adalah platform inovatif untuk pengelolaan sampah.</p>
        </div>
        <div>
            <h3 class="font-bold">Hubungi</h3>
            <p>+62 812 3456 7890</p>
            <p>cycletech@example.com</p>
        </div>
        <div class="flex space-x-4">
            <i class="bi bi-facebook text-2xl"></i>
            <i class="bi bi-twitter text-2xl"></i>
            <i class="bi bi-instagram text-2xl"></i>
            <i class="bi bi-envelope text-2xl"></i>
        </div>
    </div>
    <div class="text-center mt-8">&copy; 2024 CycleTech. All Rights Reserved.</div>
</footer>

</body>
</html>

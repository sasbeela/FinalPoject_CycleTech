<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-50">
    <!-- Header -->
    <nav class="bg-white border-b-4 border-purple-300 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-6 py-3">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="https://picsum.photos/40" alt="Logo" class="w-10 h-10 rounded-full">
                <h1 class="text-xl font-semibold text-green-700">Cycle Tech</h1>
            </div>

            <!-- Navigation Links -->
            <ul class="hidden md:flex items-center space-x-6 font-medium text-gray-700">
                <li>
                    <a href="/Dashboard" class="text-white bg-green-700 px-5 py-2 rounded-lg hover:bg-green-800">Beranda</a>
                </li>
                <li><a href="/Kelola-Sampah" class="hover:text-green-700">Kelola Sampah</a></li>
                <li><a href="/Kreasi" class="hover:text-green-700">Kreasi</a></li>
                <li><a href="/Tentang-Kami" class="hover:text-green-700">Tentang Kami</a></li>
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

    <!-- Hero Section -->
    <section class="bg-white py-10">
        <div class="container mx-auto text-center px-4">
            <img src="https://picsum.photos/1200/400" alt="Recycle Bins" class="w-full max-w-5xl mx-auto rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-gray-800 mt-8">Cycle Tech</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Solusi untuk manajemen sampah yang lebih baik. Kami menyediakan berbagai layanan untuk menjaga lingkungan tetap bersih dan sehat.</p>
        </div>
    </section>

    <!-- Pencapaian Kami Section -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-2xl font-bold text-gray-800">Pencapaian Kami</h2>
            <p class="text-gray-600 mt-2 mb-8">Kami telah bekerja sama dengan beberapa mitra untuk memberikan dampak lebih baik bagi masyarakat.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-green-200 h-32 rounded-lg"></div>
                <div class="bg-green-200 h-32 rounded-lg"></div>
                <div class="bg-green-200 h-32 rounded-lg"></div>
            </div>
            <button class="mt-8 bg-green-600 text-white py-2 px-6 rounded-full hover:bg-green-700">Selengkapnya</button>
        </div>
    </section>

    <!-- Artikel & Informasi Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800">Artikel & Informasi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://picsum.photos/500/300" alt="" class="w-full">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://picsum.photos/500/300" alt="" class="w-full">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pentingnya Daur Ulang</h3>
                        <p class="text-gray-600 mt-2">Mengurangi sampah plastik dengan daur ulang.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://picsum.photos/500/300" alt="" class="w-full">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Zero Waste Movement</h3>
                        <p class="text-gray-600 mt-2">Hidup tanpa sampah untuk keberlanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mitra Kami Section -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center text-gray-800">Mitra Kami</h2>
            <div class="flex items-center justify-center space-x-4 mt-8 overflow-x-auto">
                <img src="https://picsum.photos/150" alt="Partner 1" class="h-20">
                <img src="https://picsum.photos/150" alt="Partner 2" class="h-20">
                <img src="https://picsum.photos/150" alt="Partner 3" class="h-20">
                <img src="https://picsum.photos/150" alt="Partner 4" class="h-20">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-4">
            <div class="text-center md:text-left">
                <h3 class="font-bold text-green-700">Cycle Tech</h3>
                <p class="text-gray-600">Solusi daur ulang untuk masa depan yang lebih baik.</p>
            </div>
            <div class="text-center mt-6 md:mt-0 space-y-2">
                <p class="text-gray-700">Kontak: +62 123 456 7890</p>
                <p class="text-gray-700">Email: info@cycletech.com</p>
            </div>
            <div class="flex space-x-4 mt-6 md:mt-0">
                <i class="bi bi-facebook text-2xl text-blue-600"></i>
                <i class="bi bi-instagram text-2xl text-pink-600"></i>
                <i class="bi bi-twitter text-2xl text-blue-400"></i>
            </div>
        </div>
    </footer>
</body>

</html>

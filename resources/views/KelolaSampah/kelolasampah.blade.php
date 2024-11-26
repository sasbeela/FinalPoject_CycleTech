<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
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
                <li><a href="{{ route('dashboard.nasabah') }}" class="hover:text-green-700">Beranda</a></li>
                <li><a href="{{ route('kelola.sampah') }}" class="text-white bg-green-700 px-5 py-2 rounded-lg hover:bg-green-800">Kelola Sampah</a></li>
                <li>
                    <div class="relative inline-block text-left">
                        <button id="dropdownButton" type="button" class="inline-flex justify-center w-full px-4 py-2 hover:text-green-700">
                            Kreasi
                        </button>
                        <div id="dropdownMenu" class="absolute right-0 z-10 hidden mt-2 w-20 rounded-md bg-green-200 shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                            <div class="py-1" role="none">
                            <a href="{{ route('kreasi') }}" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300" role="menuitem" tabindex="-1" id="menu-item-0">Kreasi</a>
                            <a href="{{ route('kreasiku') }}" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300" role="menuitem" tabindex="-1" id="menu-item-2">Kreasiku</a>
                            </div>
                        </div>
                    </div>
                </li>
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

    <!-- Hero Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-32">
            <div class="md:w-1/2 space-y-4 text-center md:text-left">
                <h1 class="text-4xl font-bold text-gray-800">Kelola Sampahmu!</h1>
                <p class="text-gray-700">Menjadi lebih hijau bukan hanya tren, tetapi juga kebutuhan. Daur ulang lebih mudah dengan layanan kami.</p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://picsum.photos/500/300" alt="Hero Image" class="rounded-lg">
            </div>
        </div>
    </section>

    <!-- Keuntungan -->
    <section class="bg-white py-16 px-24">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Keuntungan</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-green-600">Sampah Terkelola</h3>
                    <p class="text-gray-700 mt-2">Mengelola sampah lebih efisien dengan platform kami.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-green-600">Dukungan Pelanggan</h3>
                    <p class="text-gray-700 mt-2">Layanan pelanggan siap membantu Anda.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-green-600">Metode Terpercaya</h3>
                    <p class="text-gray-700 mt-2">Proses pengelolaan sampah yang terbukti.</p>
                </div>
                <div class="bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-green-600">Solusi Ramah Lingkungan</h3>
                    <p class="text-gray-700 mt-2">Berpartisipasi dalam menjaga lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Mengirim -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Cara Mengirim</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <i class="bi bi-box-seam text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Pilih Jenis</h3>
                    <p>Sesuaikan jenis sampah yang akan dikirim.</p>
                </div>
                <div class="space-y-4">
                    <i class="bi bi-calendar-check text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Buat Pesanan</h3>
                    <p>Pesan jadwal pengambilan.</p>
                </div>
                <div class="space-y-4">
                    <i class="bi bi-truck text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Kirim Sampah</h3>
                    <p>Serahkan sampah ke petugas.</p>
                </div>
                <div class="space-y-4">
                    <i class="bi bi-recycle text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Sampah Terdaur</h3>
                    <p>Proses daur ulang dimulai.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Menyiapkan Sampah -->
    <section class="bg-yellow-50 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-32">
            <div class="md:w-1/2 flex justify-center">
                <img src="https://picsum.photos/400" alt="Ilustrasi" class="w-full md:w-1/2 rounded-lg mb-8 md:mb-0">
            </div>
            <div class="md:w-1/2 space-y-4 px-6">
                <h2 class="text-3xl font-bold text-gray-800">Cara Menyiapkan Sampah</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Bersihkan sampah sebelum dikirim.</li>
                    <li>Pastikan sampah kering dan terpisah.</li>
                    <li>Gunakan kantong ramah lingkungan.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Lokasi -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Lokasi</h2>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="#" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white">Jakarta</a>
                <a href="#" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white">Surabaya</a>
                <a href="#" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white">Bandung</a>
                <a href="#" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white">Samarinda</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="custom-footer-bg py-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-32">
            <div class="md:w-1/3 mb-6 md:mb-0">
                <div class="flex items-center">
                    <img src="logo.png" alt="Cycle Tech Logo" class="w-10 h-10 mr-3">
                    <h2 class="text-lg font-bold">Cycle Tech</h2>
                </div>
                <p class="mt-4 text-sm">
                    Cycle Tech adalah platform inovatif untuk pengelolaan sampah. Dengan fitur-fitur canggih, kami memudahkan Anda untuk memilah, mengelola, dan mendaur ulang sampah secara efektif.
                </p>
            </div>
            <div class="md:w-1/3 mb-6 md:mb-0 text-center">
                <h3 class="text-lg font-semibold mb-2">Hubungi</h3>
                <p class="text-sm">+62 812 3456 7890</p>
                <p class="text-sm">cycletech@gmail.com</p>
            </div>
            <div class="md:w-1/3 text-center md:text-right">
                <h3 class="text-lg font-semibold mb-2">Media Sosial</h3>
                <div class="flex justify-center md:justify-end space-x-4">
                    <a href="#" class="text-white hover:text-gray-400">
                        <i class="bi bi-facebook w-6 h-6"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <i class="bi bi-twitter w-6 h-6"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400">
                        <i class="bi bi-instagram w-6 h-6"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <p class="text-sm">© 2024 CycleTech. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JS -->
    <script>
        const dropdownButton = document.getElementById('dropdownButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!e.target.closest('#dropdownButton') && !e.target.closest('#dropdownMenu')) {
            dropdownMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
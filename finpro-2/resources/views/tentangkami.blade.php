<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .custom-navbar-bg {
            background: linear-gradient(90deg, rgba(255, 247, 255, 1) 25%,  rgba(238, 247, 234, 1) 75%);
        }
        .custom-hero-gradient {
            background: linear-gradient(180deg, rgba(238, 247, 255, 1) 25%, rgba(255, 247, 234, 1) 75%);
        }
        .custom-feature-gradient {
            background: linear-gradient(180deg, rgba(255, 247, 234, 1) 50%, white 50%);
        }
        .custom-footer-bg {
            background: linear-gradient(180deg, rgba(255, 247, 234, 1) 25%, rgba(238, 247, 255, 1) 75%);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="custom-navbar-bg shadow-lg">
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
                <li><a href="{{ route('kreasi') }}" class="hover:text-green-700">Kreasi</a></li>
                <li><a href="{{ route('tentang.kami') }}" class="text-white bg-green-700 px-5 py-2 rounded-lg hover:bg-green-800">Tentang Kami</a></li>
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
    <section class="custom-hero-gradient py-16">
        <div class="container mx-auto px-4 py-12 flex flex-col items-center">
            <img src="https://picsum.photos/1200/400" alt="Hero Image" class="rounded-lg mb-8">
            <div class="bg-white p-6 shadow-lg rounded-lg -mt-20 w-full max-w-3xl text-center">
                <h2 class="text-2xl font-semibold text-green-600">Cycle Tech</h2>
                <p class="text-gray-700 mt-4">Cycle Tech adalah solusi untuk pengelolaan sampah Anda, menghubungkan Anda dengan cara yang lebih hijau.</p>
            </div>
        </div>
    </section>

    <!-- Visi dan Misi -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Visi dan Misi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-2xl font-semibold text-green-600 mb-4">Visi Kami</h3>
                    <p class="text-gray-700">Menjadi solusi pengelolaan sampah terdepan yang berfokus pada lingkungan yang bersih dan sehat.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-green-600 mb-4">Misi Kami</h3>
                    <ul class="text-gray-700 space-y-2 list-disc list-inside">
                        <li>Mengurangi limbah yang mencemari lingkungan.</li>
                        <li>Memberikan edukasi kepada masyarakat tentang pentingnya daur ulang.</li>
                        <li>Membantu pemerintah dalam pengelolaan sampah.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Tim Kami -->
    <section class="custom-hero-gradient py-10">
        <div class="container mx-auto text-center px-32">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Tim Kami</h2>
            <p class="text-gray-600 mt-4">Berikut adalah tim hebat yang bekerja di balik layar Cycle Tech.</p>

            <!-- Baris Pertama: 2 Anggota -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/150" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Salma Salsabila</h3>
                    <p class="text-gray-600">Product Manager</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/151" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Mutia Azzahra</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                </div>
            </div>

            <!-- Baris Kedua: 4 Anggota -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/152" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Harry Bonardo</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/153" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ivan Herdianto</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/154" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Aprinia Salsabila</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/155" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ilham Saputra</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
            </div>

            <!-- Baris Ketiga: 4 Anggota -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/156" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Anggita Adilianza</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/157" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Rizma Agustin</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/158" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Velizha Sandy</h3>
                    <p class="text-gray-600">Data Analyst</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/159" alt="Member" class="w-36 h-36 rounded-full object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Muhammad Danu</h3>
                    <p class="text-gray-600">Data Analyst</p>
                </div>
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

</body>
</html>

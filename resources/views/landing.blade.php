<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CycleTech</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
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

<body >
    <!-- Header -->
    <nav class="custom-navbar-bg shadow-lg fixed top-0 w-full h-18 z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-10">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="https://picsum.photos/40" alt="Logo" class="w-10 h-10 rounded-full">
                <h1 class="text-xl font-semibold text-green-700">Cycle Tech</h1>
            </div>

            <!-- Navigation Links -->
            <ul class="hidden md:flex items-center space-x-8 font-medium text-gray-700">
                <li><a href="{{ route('landing.page') }}" class="hover:text-green-700">Beranda</a></li>                
                <li><a href="#tentang-kami" class="hover:text-green-700 scroll-smooth">Tentang Kami</a></li>
                <li><a href="#kontak" class="hover:text-green-700">Kontak</a></li>
            </ul>

            <!-- Buttons -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('login.nasabah') }}" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white">Masuk</a>
                <a href="{{ route('signin.nasabah') }}" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white">Daftar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Custom Background Color -->
    <section class="custom-hero-gradient py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-32">
            <div class="md:w-1/2 text-left mx-auto space-y-6 md:pr-12">
                <h1 class="text-4xl font-bold text-gray-800">Bosan dengan Tumpukan Sampah?</h1>
                <p class="text-lg text-gray-600">Cycle Tech hadir untuk membantu mengelola dan daur ulang sampah agar bisa digunakan kembali. Yuk bergabung menjadi penyelamat bumi!</p>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img src="https://picsum.photos/500/350" alt="Hero Image" class="rounded-xl shadow-lg">
            </div>
        </div>
    </section>

    <!-- Features Section with Vertical Gradient -->
    <section class="custom-feature-gradient py-16">
        <div class="container max-w-screen-sm mx-auto text-center px-4">
            <h2 class="text-center text-2xl font-bold mb-8">Apa aja sih yang bisa kamu lakukan di sini?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-500 text-white p-4 rounded-full">
                            <i class="bi bi-file-earmark-text w-10 h-10 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Artikel</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-500 text-white p-4 rounded-full">
                            <i class="bi bi-brush w-10 h-10 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kreasi</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-500 text-white p-4 rounded-full">
                            <i class="bi bi-camera w-10 h-10 text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kamera Deteksi</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center px-[100px]">
            <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
                <img src="https://picsum.photos/400/400" alt="Benefits Image" class="rounded-lg shadow-lg">
            </div>
            <div class="md:w-1/2 text-left mx-auto space-y-6">
                <h2 class="text-2xl font-bold text-gray-800">Mengapa Harus Bergabung?</h2>
                <ul class="list-disc ml-6 text-gray-600 space-y-2">
                    <li>Mudah dan Fleksibel</li>
                    <li>Membantu lingkungan dengan daur ulang</li>
                    <li>Berbagi kreasi daur ulang dengan komunitas</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-32">
            <div class="md:w-1/2 text-center md:text-left mb-6 md:mb-0">
                <h2 class="text-3xl font-bold mb-4 text-green-700">Yuk, Jadi Penyelamat Bumi Bersama Cycle Tech!</h2>
                <p class="text-lg text-green-600 mb-6">Jangan ragu lagi, bergabunglah sekarang dan menjadi bagian dari solusi.</p>
                <a href="#" class="bg-green-500 text-white px-6 py-3 rounded-full hover:bg-green-600 transition duration-300">Bergabung</a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="w-64 h-64 bg-white p-6 rounded-full shadow-lg flex items-center justify-center">
                    <i class="bi bi-search w-32 h-32 text-green-500"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: Tim Kami -->
    <section id="tentang-kami" class="custom-hero-gradient py-10">
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
    <section id="kontak">
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
    </section>

</body>
</html>

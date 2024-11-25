<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
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
                <li><a href="{{ route('kelola.sampah') }}" class="hover:text-green-700">Kelola Sampah</a></li>
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
    <div class="relative bg-gray-50 py-10 px-10">
        <div class="relative bg-cover bg-center h-[400px] rounded-lg overflow-show" style="background-image: url('https://picsum.photos/1200/600');">
            <div class="absolute top-44 left-6 bg-white bg-opacity-100 rounded-lg p-6 w-[412px] h-[309]">
            <div class="bg-white-200 flex items-center">
                <img src="https://picsum.photos/50" alt="Logo" class="w-12 h-12 rounded-full mr-4">
                <h2 class="text-2xl font-bold text-green-600">Cycle Tech</h2>
            </div>
            <p class="mt-4 text-gray-600">
                Cycle Tech adalah platform inovatif untuk pengelolaan sampah yang cerdas dan berkelanjutan. Dengan fitur-fitur canggih, kami membantu Anda memilah, mengelola, dan mendaur ulang sampah dengan lebih mudah dan efektif, sambil berkontribusi pada lingkungan yang lebih bersih.
            </p>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto mt-10 text-justify text-gray-700 px-4 mb-10">
        <p class="text-lg leading-relaxed">
            Cycle Tech adalah solusi cerdas untuk pengelolaan sampah Anda. Kami menyediakan platform lengkap yang tidak hanya mengedukasi, tetapi juga menginspirasi pengelolaan sampah secara kreatif. Dengan fitur deteksi jenis sampah otomatis, Anda dapat mengunggah gambar sampah dan mendapatkan rekomendasi kreasi menarik yang dapat dibuat dari limbah tersebut.
        </p>
        <p class="mt-4 text-lg leading-relaxed">
            Selain itu, kami juga menghadirkan galeri inspirasi daur ulang untuk membantu Anda mengubah sampah menjadi barang bernilai guna, serta artikel terkini yang membahas isu-isu penting seputar pengelolaan dan teknologi daur ulang. Cycle Tech hadir untuk mempermudah pengelolaan sampah Anda sekaligus berkontribusi pada lingkungan yang lebih bersih dan berkelanjutan.
        </p>
  </div>


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
    <section class="bg-white py-10">
        <div class="container mx-auto text-center px-32">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Tim Kami</h2>
            <p class="text-gray-600 mt-4">Berikut adalah tim hebat yang bekerja di balik layar Cycle Tech.</p>
            
            <!-- Baris Pertama -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/150" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Salma Salsabila</h3>
                    <p class="text-gray-600">Product Manager</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/151" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Mutia Azzahra</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/152" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Harry Bonardo</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/153" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ivan Herdianto</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/154" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Aprinia Salsabila</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                </div>
            </div>
            
            <!-- Baris Kedua -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/155" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ilham Saputra</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/156" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Anggita Adilianza</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/157" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Rizma Agustin</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/158" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Velizha Sandy</h3>
                    <p class="text-gray-600">Data Analyst</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://picsum.photos/159" alt="Member" class="w-36 h-36 rounded-lg object-cover">
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
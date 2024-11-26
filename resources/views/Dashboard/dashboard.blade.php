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
    <nav class="bg-gradient-to-r from-birumuda to-krem shadow-lg fixed top-0 w-full h-18 z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6 md:px-10">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="{{ asset('images/logo 2.png') }}" alt="Logo" class="w-10 h-10 rounded-full">
                <h1 class="text-xl font-semibold text-hulk">Cycle Tech</h1>
            </div>
            
            <!-- Centered Navigation Links for Desktop -->
            <ul class="hidden lg:flex items-center space-x-6 font-medium text-gray-700">
                <li><a href="{{ route('dashboard.nasabah') }}" class="text-white bg-green-700 rounded-lg hover:bg-old-hulk inline-flex justify-center w-full px-4 py-2">Beranda</a></li>
                <li><a href="{{ route('kelola.sampah') }}" class=" hover:text-old-hulk">Kelola Sampah</a></li>
                <li>
                    <div class="relative inline-block text-left">
                        <button id="dropdownButtonDesktop" type="button" class="text-black px-4 py-2 hover:text-old-hulk">
                            Kreasi
                        </button>
                        <div id="dropdownMenuDesktop" class="absolute right-0 z-10 hidden mt-2 w-20 rounded-md bg-green-200 shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
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
            <ul class="flex items-center space-x-6 font-medium text-gray-700">
                <!-- Notification Icon -->
                <li class="flex items-center">
                    <button href="#" class="text-gray-600 hover:text-green-700 mt-2">
                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/bell.svg" alt="Notification" class="w-6 h-6">
                    </button>
                </li>
                
                <!-- Hamburger Icon (only visible on smaller screens) -->
                <li class="lg:hidden flex items-center">
                    <button id="menu-toggle" class="text-black active:text-hulk focus:outline-none mt-2">
                        <i class="bi bi-list text-3xl"></i>
                    </button>
                </li>
            
                <!-- Profile Icon (only visible on larger screens) -->
                <li class="hidden lg:flex items-center">
                    <a href="#">
                        <img src="https://picsum.photos/40" alt="Profile" class="w-10 h-10 rounded-full border border-gray-300">
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Dropdown Menu for Mobile (initially hidden) -->
        <ul id="dropdown-menu" class="lg:hidden hidden flex-col px-4 items-center space-y-4 bg-white border-t border-gray-200 py-4 font-medium text-gray-700">
            <li><a href="{{ route('dashboard.nasabah') }}" class="hover:text-hulk">Beranda</a></li>
            <li><a href="{{ route('kelola.sampah') }}" class="hover:text-hulk scroll-smooth">Kelola Sampah</a></li>
            <button id="dropdownButton" type="button" class="inline-flex w-full py-2 hover:text-green-700">
                Kreasi
            </button>
            <div id="dropdownMenu" class="relative left-0 hidden z-10 mt-2 w-20 rounded-md bg-green-200 shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
                <div class="py-1" role="none">
                <a href="{{ route('kreasi') }}" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300" role="menuitem" tabindex="-1" id="menu-item-0">Kreasi</a>
                <a href="{{ route('kreasiku') }}" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300" role="menuitem" tabindex="-1" id="menu-item-2">Kreasiku</a>
                </div>
            </div>
            <li><a href="#tentang-kami" class="hover:text-hulk scroll-smooth">Kelola Sampah</a></li>
            <li><a href="#tentang-kami" class="hover:text-hulk scroll-smooth">Profile</a></li>
        </ul>
    </nav>
    
    <!-- JavaScript for Toggle Menu -->
    <script>
        const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');
    
            dropdownButton.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevents the event from closing the whole menu
                dropdownMenu.classList.toggle('hidden');
            });
    
            // Close submenu when clicking outside
            document.addEventListener('click', (event) => {
                if (!event.target.closest('#dropdownButton') && !event.target.closest('#dropdownMenu')) {
                    dropdownMenu.classList.add('hidden');
                }
            });
    
            const dropdownButtonDesktop = document.getElementById('dropdownButtonDesktop');
            const dropdownMenuDesktop = document.getElementById('dropdownMenuDesktop');
    
            dropdownButtonDesktop.addEventListener('click', () => {
                dropdownMenuDesktop.classList.toggle('hidden');
            });
    
            document.addEventListener('click', (e) => {
                if (!e.target.closest('#dropdownButton') && !e.target.closest('#dropdownMenu')) {
                dropdownMenu.classList.add('hidden');
                }
            });
            
        document.getElementById("menu-toggle").addEventListener("click", function () {
            var menu = document.getElementById("dropdown-menu");
            if (menu.classList.contains("hidden")) {
                menu.classList.remove("hidden");
            } else {
                menu.classList.add("hidden");
            }
        });
    </script>

    <!-- Hero Section -->
    <section class="bg-white py-10 mt-16">
        <div class="container mx-auto text-center px-4">
            <img src="{{ asset('images/beranda 1.png') }}" alt="Recycle Bins" class="w-full max-w-5xl mx-auto rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-gray-800 mt-8">Cycle Tech</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Solusi untuk manajemen sampah yang lebih baik. Kami menyediakan berbagai layanan untuk menjaga lingkungan tetap bersih dan sehat.</p>
        </div>
    </section>

    <!-- Artikel & Informasi Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center px-32">
            <h2 class="text-2xl font-bold text-center text-gray-800">Artikel & Informasi</h2>
            <!-- Card Artikel -->
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
            <div class="mx-auto items-center space-x-4 mt-8">
                <a href="{{ route('artikel.nasabah') }}" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white mt-8">Lebih Banyak</a>
            </div>
        </div>
    </section>

    <!-- Mitra Kami Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-center text-gray-800">Rekomendasi Pengelola Sampah</h2>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-2 gap-6 mt-8 px-24 lg:px-8 md:px-32 ">
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden ">
                    <img src="{{ asset('images/mitra 1.png') }}" alt="" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="{{ asset('images/mitra 2.png') }}" alt="" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="{{ asset('images/mitra 3.png') }}" alt="" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="{{ asset('images/mitra 4.png') }}" alt="" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section>
        <footer class="bg-gradient-to-t from-birumuda to-krem py-10">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center md:px-32 px-24">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <div class="flex items-center">
                        <img src="{{ asset('images/logo 2.png') }}" alt="Cycle Tech Logo" class="w-10 h-10 mr-3">
                        <h2 class="text-lg font-bold text-hulk">Cycle Tech</h2>
                    </div>
                    <p class="mt-4 text-sm hidden md:block">
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
                        <a href="#" class="text-black hover:text-gray-400">
                            <i class="bi bi-facebook w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-black hover:text-gray-400">
                            <i class="bi bi-twitter w-6 h-6"></i>
                        </a>
                        <a href="#" class="text-black hover:text-gray-400">
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

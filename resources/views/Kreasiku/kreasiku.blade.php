<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Header -->
<nav class="bg-gradient-to-r from-birumuda to-krem shadow-lg fixed top-0 w-full h-18 z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6 md:px-10">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('images/logo 2.png') }}" alt="Logo" class="w-10 h-10 rounded-full">
            <h1 class="text-xl font-semibold text-hulk">Cycle Tech</h1>
        </div>
        
        <!-- Centered Navigation Links for Desktop -->
        <ul class="hidden lg:flex items-center space-x-6 font-medium text-gray-700">
            <li><a href="{{ route('dashboard.nasabah') }}" class="text-black hover:text-hulk">Beranda</a></li>
            <li><a href="{{ route('kelola.sampah') }}" class="hover:text-old-hulk">Kelola Sampah</a></li>
            <li>
                <div class="relative inline-block text-left">
                    <button id="dropdownButtonDesktop" type="button" class="text-white bg-green-700 rounded-lg hover:bg-old-hulk inline-flex justify-center w-full px-4 py-2">
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

    <!-- Kreasiku -->
    <section class="bg-white mt-20 py-10 px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Kreasiku</h1>
            <p class="text-gray-600">Ini adalah galeri pribadi yang berisi semua karya yang telah kamu unggah.</p>
        </header>
        <div class="container mx-auto text-center">
            <!-- Grid Container for Items -->
            <div id="itemsContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <!-- Card Item -->
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
                <div class="item bg-white p-4 md:p-6 rounded-lg shadow-lg hover:shadow-2xl overflow-hidden border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-4">Gantungan Kunci dari Botol Plastik Bekas</h3>
                    <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-full h-[200px] md:h-[231px] object-cover rounded-t-lg">
                    <p class="text-gray-600 text-base md:text-lg text-left mt-4">Oleh Amanda Manopo</p>
                </div>
            </div>
            
            <!-- More Button -->
            <button id="moreButton" class="border-2 border-hulk text-hulk py-2 px-4 rounded-lg hover:bg-hulk hover:text-white mt-8">Lebih Banyak</button>
            
            <!-- Upload Button -->
            <button class="flex my-8 py-1 border-2 font-semibold bg-hulk border-hulk text-white px-8 rounded-3xl hover:bg-gradient-to-r from-black to-old-hulk">
                Unggah Kreasi
            </button>
        </div>
    </section>
    
    <script>
        function toggleExtraCards() {
            const moreButton = document.getElementById('moreButton');
            const extraCards = document.getElementById('extraCards');

            moreButton.addEventListener('click', function () {
                extraCards.classList.toggle('hidden');
                moreButton.textContent = extraCards.classList.contains('hidden') ? 'Lebih Banyak' : 'Lebih Sedikit';
            });
        }

        function checkRowsVisibility() {
            const itemsContainer = document.getElementById('itemsContainer');
            const moreButton = document.getElementById('moreButton');
            const items = itemsContainer.querySelectorAll('.item');
            const itemsPerRow = 3; // Misalnya, 3 item per baris (sesuai grid Tailwind)

            // Tampilkan tombol hanya jika ada lebih dari 2 baris
            if (items.length > itemsPerRow * 2) {
                moreButton.classList.remove('hidden');
            } else {
                moreButton.classList.add('hidden');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            checkRowsVisibility();
            toggleExtraCards();
        });
    </script>

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
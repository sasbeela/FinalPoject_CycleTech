<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    @vite('resources/css/app.css')
    <script>
        function toggleExtraCards() {
            const moreButton = document.getElementById('moreButton');
            const extraCards = document.getElementById('extraCards');

            moreButton.addEventListener('click', function () {
                extraCards.classList.toggle('hidden');
                moreButton.textContent = extraCards.classList.contains('hidden') ? 'Lebih Banyak' : 'Lebih Sedikit';
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            toggleExtraCards();
        });
    </script>
</head>

<body>
    <!-- header -->
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
                <li><a href="{{ route('kelola.sampah') }}" class="hover:text-old-hulk">Kelola Sampah</a></li>
                <li>
                    <div class="relative inline-block text-left">
                        <button id="desktopKreasiButton" type="button" class="text-black hover:text-old-hulk">
                            Kreasi
                        </button>
                        <div id="desktopKreasiDropdown" class="absolute right-0 z-10 hidden mt-2 w-20 rounded-md bg-green-200 shadow-lg">
                            <div class="py-1">
                                <a href="{{ route('kreasi') }}" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300">Kreasi</a>
                                <a href="{{ route('kreasiku') }}" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300">Kreasiku</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('tentang.kami') }}" class="hover:text-green-700">Tentang Kami</a></li>
            </ul>
    
            <!-- Notification & Profile Icons -->
            <ul class="flex items-center space-x-6 font-medium text-gray-700">
                <!-- Notification Dropdown -->
                <li class="relative mt-2 lg:mt-0">
                    <button id="notificationButton" class="text-gray-600 hover:text-green-700 mt-2">
                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/bell.svg" alt="Notification" class="w-6 h-6">
                    </button>
                    <div id="notificationDropdown" class="absolute right-0 mt-2 w-64 bg-white border border-gray-300 rounded-lg shadow-lg hidden">
                        <div class="p-4">
                            <p class="text-sm text-gray-800 font-medium">Notifikasi</p>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            <li class="p-4 hover:bg-gray-100 cursor-pointer">
                                <p class="text-sm text-gray-700">Anda memiliki pesan baru.</p>
                                <span class="text-xs text-gray-500">1 jam yang lalu</span>
                            </li>
                            <li class="p-4 hover:bg-gray-100 cursor-pointer">
                                <p class="text-sm text-gray-700">Update sistem telah berhasil.</p>
                                <span class="text-xs text-gray-500">2 jam yang lalu</span>
                            </li>
                            <li class="p-4 hover:bg-gray-100 cursor-pointer">
                                <p class="text-sm text-gray-700">Jadwal meeting dimulai dalam 30 menit.</p>
                                <span class="text-xs text-gray-500">Hari ini</span>
                            </li>
                        </ul>
                        <div class="p-4 border-t border-gray-200 text-center">
                            <button class="text-sm text-green-700 hover:underline">Lihat Semua</button>
                        </div>
                    </div>
                </li>
    
                <!-- Hamburger Icon (only visible on smaller screens) -->
                <li class="lg:hidden flex items-center">
                    <button id="mobileMenuToggle" class="text-black active:text-hulk focus:outline-none mt-2">
                        <i class="bi bi-list text-3xl"></i>
                    </button>
                </li>
    
                <!-- Profile Icon (only visible on larger screens) -->
                <li class="hidden lg:flex items-center">
                    <a href="{{ route('profile.nasabah')}}">
                        <img src="https://picsum.photos/40" alt="Profile" class="w-10 h-10 rounded-full border border-gray-300">
                    </a>
                </li>
            </ul>
        </div>
    
        <!-- Dropdown Menu for Mobile -->
        <ul id="mobileDropdownMenu" class="lg:hidden hidden flex-col px-4 items-center space-y-4 bg-white border-t border-gray-200 py-4 font-medium text-gray-700">
            <li><a href="{{ route('dashboard.nasabah') }}" class="hover:text-hulk">Beranda</a></li>
            <li><a href="{{ route('kelola.sampah') }}" class="hover:text-hulk">Kelola Sampah</a></li>
            <li><a href="{{ route('kreasi') }}" class="hover:text-hulk">Kreasi</a></li>
            <li><a href="{{ route('tentang.kami') }}" class="hover:text-hulk">Tentang Kami</a></li>
            <li><a href="#" class="hover:text-hulk">Profil</a></li>
        </ul>
    </nav>
    
    <!-- JavaScript -->
    <script>
        // Dropdown Notification
        const notificationButton = document.getElementById('notificationButton');
        const notificationDropdown = document.getElementById('notificationDropdown');
    
        notificationButton.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent click from closing everything
            notificationDropdown.classList.toggle('hidden');
        });
    
        document.addEventListener('click', (event) => {
            if (!event.target.closest('#notificationButton') && !event.target.closest('#notificationDropdown')) {
                notificationDropdown.classList.add('hidden');
            }
        });
    
        // Desktop Kreasi Dropdown
        const desktopKreasiButton = document.getElementById('desktopKreasiButton');
        const desktopKreasiDropdown = document.getElementById('desktopKreasiDropdown');
    
        desktopKreasiButton.addEventListener('click', () => {
            desktopKreasiDropdown.classList.toggle('hidden');
        });
    
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileDropdownMenu = document.getElementById('mobileDropdownMenu');
    
        mobileMenuToggle.addEventListener('click', () => {
            mobileDropdownMenu.classList.toggle('hidden');
        });
    </script>

    <!-- Artikel & Informasi Section -->
    <section class="bg-white py-16 px-32">
        <nav class="text-sm text-gray-600 mb-4">
            <a href="{{ route('dashboard.nasabah') }}" class="hover:underline">Beranda</a> > <span class="text-gray-800">Artikel</span>
        </nav>
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Artikel</h1>
            <p class="text-gray-600">Temukan tips dan trik serta informasi terbaru seputar lingkungan dan pengelolaan sampah.</p>
        </header>
        <div class="container mx-auto text-center">
            <!-- Card 1 Artikel -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-8">
                <div class="bg-gradient-to-b from-birumuda to-krem shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('detail.artikel') }}">
                        <img src="https://picsum.photos/500/300" alt="" class="w-full">
                        <div class="p-4">
                            <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                            <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                        </div>
                    </a>   
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

            <!-- Card 2 Artikel -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-8">
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

            <!-- Extra Card Artikel -->
            <div id="extraCards" class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-8 hidden">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://picsum.photos/500/300" alt="" class="w-full">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
            </div>

            <button id="moreButton" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white mt-8">Lebih Banyak</button>
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

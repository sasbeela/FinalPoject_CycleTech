<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
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
                <li><a href="{{ route('dashboard.nasabah') }}" class="text-black px-4 py-2 hover:text-old-hulk">Beranda</a></li>
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
                    <a href="{{ route('profile.nasabah') }}">
                        <img src="https://picsum.photos/40" alt="Profile" class="w-10 h-10 rounded-full border-4 border-hulk">
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
            <li><a href="{{ route('profile.nasabah') }}" class="hover:text-hulk scroll-smooth">Profile</a></li>
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

<section class="p-8 flex flex-col lg:flex-row gap-8 mt-16">
    <!-- Sidebar -->
    <div class="w-full h-64 lg:w-1/4 bg-white border border-hulk rounded-lg p-4">
        <h2 class="font-semibold text-xl mb-4">Profil</h2>
        <ul class="space-y-4">
            <li>
                <a href="#" class="text-hulk font-semibold">Profil Saya</a>
            </li>
            <li>
                <a href="{{ route('profile.keamanan') }}" class="text-black hover:text-old-hulk">Keamanan</a>
            </li>
            <li>
                <div class="mt-20">
                    <a href="#" class="text-red-600 hover:font-medium hover:text-red-700">Hapus Akun</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Profile Content -->
    <div class="w-full lg:w-3/4 bg-white border border-gray-300 rounded-lg p-6">
        <!-- Profile Image Section -->
        <div class="flex flex-col items-center lg:items-start lg:flex-row gap-4">
            <div class="flex justify-center">
<<<<<<< Updated upstream
                <img src="https://via.placeholder.com/100" alt="Profile Picture" class="w-24 h-24 rounded-full border">
=======
                <!-- Gambar Profil -->
                <img id="profilePreview"
                    src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.png') }}"
                    alt="Profile Picture"
                    class="w-24 h-24 rounded-full border">

>>>>>>> Stashed changes
            </div>
            <div class="flex space-x-4 mt-4 lg:mt-0">
                <button class="px-4 py-2 border-2 font-semibold border-old-hulk text-hulk rounded-full hover:bg-old-hulk hover:text-white">Foto Baru</button>
                <button id="" class="px-4 py-2 border-2 font-semibold border-red-600 text-red-600 rounded-full hover:bg-red-600 hover:text-white">Hapus</button>
            </div>
        </div>

        <!-- Divider -->
        <hr class="my-6 border-gray-300">

        <!-- Personal Information Section -->
        <div>
            <h3 class="font-semibold text-lg mb-4">Informasi Pribadi</h3>

            <!-- Name Field -->
            <div class="mb-4">
                <label class="block text-gray-700">Nama Lengkap</label>
                <input type="text" class="w-full border border-hulk rounded-lg p-2 mt-2" value="Amanda Manopo">
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label class="block text-gray-700">Alamat Email</label>
                <div class="flex items-center border border-hulk rounded-lg p-2 mt-2">
                    <span class="text-hulk mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m4-4v8m8-8a4 4 0 00-8 0v4a4 4 0 01-8 0V8a4 4 0 018-4h6a2 2 0 012 2v4z" />
                        </svg>
                    </span>
                    <input type="email" class="w-full border-none focus:outline-none" value="amandamanopo@gmail.com">
                </div>
            </div>

            <!-- Phone Field -->
            <div class="mb-4">
                <label class="block text-gray-700">Nomor Handphone</label>
                <div class="flex items-center border border-hulk rounded-lg p-2 mt-2">
                    <span class="text-hulk mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l4 4m0 0l4-4m-4 4v6a2 2 0 002 2h6m4 0a2 2 0 002-2v-6m-6-4h6a2 2 0 012 2v6a2 2 0 01-2 2h-6m0-4h6m-6-4v4" />
                        </svg>
                    </span>
                    <input type="text" class="w-full border-none focus:outline-none" value="+62 877 9876 6351">
                </div>
            </div>

            <!-- Save Button -->
            <button class="w-full lg:w-auto px-6 py-2 mt-4 bg-hulk text-white rounded-full hover:bg-old-hulk">Simpan Perubahan</button>
        </div>
    </div>

    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center flex">
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Akun ini?</h2>
            <div class="flex justify-center space-x-4">
                <button id="confirm-delete-button" class="px-4 py-2 border-2 border-hulk text-hulk rounded hover:bg-red-100">
                    Ya
                </button>
                <button onclick="closeOverlay()" class="px-4 py-2 border-2 border-red-600 text-red-600 rounded hover:bg-green-100">
                    Tidak
                </button>
            </div>
        </div>
    </div>
</section>

<script>

    function openOverlay(userId) {
        deleteUserId = userId;
        document.getElementById('overlay').classList.remove('hidden');
    }

    function closeOverlay() {
        document.getElementById('overlay').classList.add('hidden');
    }

    document.getElementById('confirm-delete-button').addEventListener('click', function () {
        if (deleteUserId) {
            document.getElementById(`delete-form-${deleteUserId}`).submit();
        }
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

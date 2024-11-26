<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
    <!-- Unggah Kreasi -->
    <div class="max-w-4xl mx-auto p-6">
        <nav class="text-sm text-gray-600 mb-4">
            <a href="{{ route('kreasi') }}" class="hover:underline">Kreasi</a> > <span class="text-gray-800">Unggah Kreasi</span>
        </nav>
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Unggah Kreasimu</h1>
            <p class="text-gray-600">Tunjukkan kreativitasmu! Unggah karya daur ulangmu dan bergabunglah dengan para pecinta lingkungan lainnya.</p>
        </header>

        <!-- Unggah Foto -->
        <div class="border-2 border-green-500 rounded-lg h-64 flex items-center justify-center mb-6">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </form>
        </div>

        <div class="border-t-2 border-green-500 mb-6"></div>

        <!-- form detail -->
        <form action="submit_kreasi.php" method="post" class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
            <div>
                <label for="judul" class="block text-lg font-medium text-gray-800 mb-2">Judul Kreasi</label>
                <input id="judul" name="judul" type="text" class="w-full border-2 border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md p-3" />
            </div>

            <div>
                <label for="penulis" class="block text-lg font-medium text-gray-800 mb-2">Nama Penulis</label>
                <input id="penulis" name="penulis" type="text" class="w-full border-2 border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md p-3" />
            </div>

            <div>
                <label for="kategori" class="block text-lg font-medium text-gray-800 mb-2">Kategori</label>
                <input id="kategori" name="kategori" type="text" class="w-full border-2 border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md p-3" />
            </div>

            <div class="relative">
                <label for="tanggal" class="block text-lg font-medium text-gray-800 mb-2">Tanggal</label>
            <div class="flex items-center">
                <input id="tanggal" name="tanggal" type="date" class="w-full border-2 border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md p-3 pr-12" />
            </div>

            </div>
                <div class="col-span-2">
                <label for="alat-bahan" class="block text-lg font-medium text-gray-800 mb-2">Alat dan Bahan</label>
                <textarea id="alat-bahan" name="alat_bahan" rows="4" class="w-full border-2 border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md p-3"></textarea>
            </div>

            <div class="col-span-2">
                <label for="langkah" class="block text-lg font-medium text-gray-800 mb-2">Langkah-langkah</label>
                <textarea id="langkah" name="langkah" rows="4" class="w-full border-2 border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 rounded-md p-3"></textarea>
            </div>
            
            <div class="w:1/2 mx-auto justify-left items-left">
                <a href="{{ route('kreasi') }}" class="px-6 py-2 border-2 border-green-500 text-green-500 font-medium rounded-full hover:bg-green-500 hover:text-white transition">Kembali</a>
            </div>
            <div class="w:1/2 mx-auto justify-right items-right">
                <button type="submit" class="px-6 py-2 border-2 border-green-500 text-green-500 font-medium rounded-full hover:bg-green-500 hover:text-white transition">Unggah</button>
            </div>    
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-b from-blue-800 via-white-100 to-brown-100 py-10">
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

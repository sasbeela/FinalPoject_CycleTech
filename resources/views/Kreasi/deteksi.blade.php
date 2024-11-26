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

    <!-- intro -->
    <div id="intro" class="mx-auto item-center justify-center px-10 mt-10">
        <div class="border-2 border-green-500 rounded-lg mx-auto items-center justify-center mb-6 w-[1240px] h-[657px] relative">
            <div class="absolute top-4 left-8 mt-6">  <!-- Posisi tombol di kiri atas -->
                <button id="utamaBtn" class="border-2 border-green-700 text-white-700 font-bold text-2xl py-2 px-4 rounded-full bg-green-700 hover:bg-green-700 hover:text-white w-[131px] h-[50px]">
                    Utama
                </button>
                <button id="uploadBtn" class="border-2 border-green-700 text-green-700 text-2xl py-2 px-4 rounded-full hover:bg-green-700 hover:text-white w-[131px] h-[50px]">
                    Upload
                </button>
            </div>
            <div class="flex justify-center items-center w-full h-full">
                <img src="{{ asset('images/camera.png') }}" alt="Kamera" class="object-cover w-[197px] h-[177px]">
            </div>
            <div class="absolute bottom-4 left-8">
                <div class="text-left mb-4">
                    <h1 class="text-2xl font-bold">Foto dan Daur Ulang</h1>
                </div>
                <div class="text-left mb-4">
                    <p class="text-xl">Sistem berbasis AI untuk membantu mengenali kategori sampah yang dimiliki dan bagaimana mengolah sampah menjadi kerajinan tangan yang bernilai. Pertama-tama, ambil gambar atau unggah ke sistem, lalu sistem akan mengklasifikasikan gambar dan menghasilkan termasuk kategori sampah dan rekomendasi kreasi. Coba sekarang!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Inti -->
    <div id="uploadForm" class="mx-auto item-center justify-center px-10 mt-10 hidden">
        <div class="border-2 border-green-500 rounded-lg mx-auto items-center justify-center mb-6 w-[1240px] h-[816px] relative">
            <div class="absolute top-4 left-8 mt-6">
                <button id="utamaBtn" class="border-2 border-green-700 text-green-700 text-2xl py-2 px-4 rounded-full hover:bg-green-700 hover:text-white w-[131px] h-[50px]">
                    Utama
                </button>
                <button id="uploadBtn" class="border-2 border-green-700 text-white-700 font-bold text-2xl py-2 px-4 rounded-full bg-green-700 hover:bg-green-700 hover:text-white w-[131px] h-[50px]">
                    Upload
                </button>
            </div>
            <div class="absolute top-32 left-8 mt-6">
                <div class="text-left mb-4">
                    <p class="text-xl">Yuk, kenali kategori sampahmu! Seret dan lepas fotonya ke kotak yang telah disediakan di bawah ini atau pilih foto dari penyimpananmu. Tunggu beberapa saat dan hasilnya akan muncul.</p>
                </div>
            </div>
            <!-- Unggah Foto-->
            <div class="absolute bottom-28 left-1/2 transform -translate-x-1/2 mt-6">
                <div class="border-2 border-green-500 rounded-lg h-[467px] w-[1126px] flex items-center justify-center bg-gray-100">
                    <form id="uploadFormElement" enctype="multipart/form-data">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="mb-4">
                    </form>
                    <div class="absolute bottom-10 right-[200px]">
                        <button type="button" id="uploadSubmitBtn" class="px-6 py-2 border-2 border-green-500 text-green-500 font-medium rounded-full hover:bg-green-500 hover:text-white transition">
                            Unggah
                        </button>
                    </div>
                </div>
            </div>
            <!-- sampai sini -->
            <div class="absolute bottom-4 left-8">
                <div class="text-left mb-4">
                    <p class="text-xl">Yuk, kenali kategori sampahmu! Seret dan lepas fotonya ke kotak yang telah disediakan di bawah ini atau pilih foto dari penyimpananmu. Tunggu beberapa saat dan hasilnya akan muncul.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- hasil -->
    <section id="recommendationSection" class="bg-white py-16 px-32 hidden">
        <div class="container mx-auto text-center px-32">
            <header class="mb-6">
                <h1 class="text-4xl font-bold text-gray-800">Hasil</h1>
                <p class="text-gray-600 text-2xl">Berdasarkan deteksi kami, sampah ini termasuk dalam kategori Plastik. Berikut rekomendasi kreasi daur ulang sampahmu!</p>
            </header>
            <div class="container mx-auto text-center">
                <!-- Card 1 Artikel -->
                <div id="itemsContainer" class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-12 mt-8">
                    <div class="item bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl w-[370px] h-[432px] overflow-hidden border border-black-100">
                        <h3 class="text-xl font-bold text-black-800 mb-4 mt-6">Gantungan Kunci dari Botol Plastik Bekas</h3>
                        <img src="https://picsum.photos/300/200" alt="Gantungan Kunci dari Botol Plastik Bekas" class="w-[330px] h-[231px] object-cover rounded-t-lg">
                        <p class="text-black-400 text-xl text-left mt-4">Oleh Amanda Manopo</p>
                    </div>
                </div>
                <!-- button muncul jika lebih dari 2 row -->
                <button id="moreButton" class="border-2 border-green-700 text-green-700 py-2 px-4 rounded-lg hover:bg-green-700 hover:text-white mt-8">Lebih Banyak</button>
            </div>
        </div>
    </section>


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
        // dropdown kreasi
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

        // Unggah Foto
        const uploadBtn = document.getElementById('uploadBtn');
        const introSection = document.getElementById('intro');
        const uploadFormSection = document.getElementById('uploadForm');

        // When the upload button is clicked
        uploadBtn.addEventListener('click', function() {
            introSection.classList.add('hidden');  // Hide the intro section
            uploadFormSection.classList.remove('hidden');  // Show the upload form
        });

        // AJAX agar tidak ter-reload
        // Event Listener untuk Tombol Upload
        document.getElementById('uploadSubmitBtn').addEventListener('click', function () {
            const fileInput = document.getElementById('fileToUpload');
            const formData = new FormData();
            formData.append('fileToUpload', fileInput.files[0]);

            // AJAX untuk Upload File
            fetch('/upload', {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Tampilkan Rekomendasi Artikel
                    const recommendationSection = document.getElementById('recommendationSection');
                    const articleRecommendation = document.getElementById('articleRecommendation');
                    articleRecommendation.textContent = data.article; // Artikel dari response
                    recommendationSection.classList.remove('hidden'); // Tampilkan bagian rekomendasi
                } else {
                    alert('Gagal mengunggah file. Silakan coba lagi.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan. Silakan coba lagi.');
            });
        });

        //hasil
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
        
</body>
</html>

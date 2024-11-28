<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
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
                <li><a href="{{ route('dashboard.nasabah') }}" class="text-black hover:text-old-hulk">Beranda</a></li>
                <li><a href="{{ route('kelola.sampah') }}" class="hover:text-old-hulk">Kelola Sampah</a></li>
                <li>
                    <div class="relative inline-block text-left">
                        <button id="desktopKreasiButton" type="button" class="text-white bg-green-700 rounded-lg hover:bg-old-hulk inline-flex justify-center w-full px-4 py-2">
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


    <!-- Unggah Kreasi -->
    <div class="max-w-4xl mx-auto mt-20 p-6">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Edit Kreasimu</h1>
            <p class="text-gray-600">Tunjukkan kreativitasmu! Unggah karya daur ulangmu dan bergabunglah dengan para pencinta lingkungan lainnya.</p>
        </header>

        <!-- ganti foto -->
        <div class="border-2 border-dashed border-hulk rounded-lg h-64 flex items-center justify-center mb-6">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <img src="https://picsum.photos/300/200" alt="" class="mb-4">
                <input type="file" name="fileToUpload" id="fileToUpload" placeholder="">
            </form>
        </div>

        <div class="border-t-2 border-hulk mb-6"></div>

        <!-- Form Section -->
        <form class="space-y-4" action="submit_kreasi.php" method="post" >
            <!-- Title and Author -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-lg font-medium text-gray-800 mb-2">Judul Kreasi</label>
                    <div class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" contenteditable="true">Gantungan Kunci dari Botol Plastik Bekas</div>
                </div>
                <div>
                    <label class="block text-lg font-medium text-gray-800 mb-2">Nama Penulis</label>
                    <div class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" contenteditable="true">Amanda Manopo</div>
                </div>
            </div>

            <!-- Category and Date -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-lg font-medium text-gray-800 mb-2">Kategori</label>
                    <div class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3" contenteditable="true">Plastik</div>
                </div>
                <div class="relative">
                <label for="tanggal" class="block text-lg font-medium text-gray-800 mb-2">Tanggal</label>
                <div class="flex items-center">
                    <input id="tanggal" name="tanggal" type="date" class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3 pr-12"/>
                </div>
            </div>
            </div>

            <!-- Tools and Materials -->
            <div>
                <label class="block text-lg font-medium text-gray-800 mb-2">Alat dan Bahan</label>
                <div class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3 pr-12" contenteditable="true">
                    - Botol plastik bekas <br>
                    - Gunting <br>
                    - Gantungan kunci (cincin atau pengait kecil) <br>
                    - Stiker atau cat (untuk hiasan) <br>
                    - Paku/alat pemanas (opsional, untuk membuat lubang)
                </div>
            </div>

            <!-- Steps -->
            <div>
                <label class="block text-lg font-medium text-gray-800 mb-2">Langkah-langkah</label>
                <div class="w-full border-2 border-hulk focus:outline-none focus:ring-2 focus:ring-old-hulk rounded-md p-3 pr-12" contenteditable="true">
                    1. Cuci dan keringkan botol plastik bekas. <br>
                    2. Potong botol menjadi bentuk yang diinginkan (bunga, hati, dll.). <br>
                    3. Buat lubang di bagian atas potongan untuk gantungan kunci. <br>
                    4. Pasang gantungan kunci ke dalam lubang yang telah dibuat. <br>
                    5. Hias dengan stiker atau cat sesuai selera.
                </div>
            </div>

            <div class="flex justify-center md:justify-end gap-6 mb-6 justify-end">
                <button type="submit" class="px-6 py-2 border-2 border-hulk text-hulk font-medium rounded-full hover:bg-old-hulk hover:text-white transition">
                    Perbarui
                </button>
                <!-- Button -->
                <button 
                    onclick="openModal()" 
                    class="px-6 py-2 border-2 border-red-500 text-red-500 font-medium rounded-full hover:bg-red-500 hover:text-white transition">
                    Hapus
                </button>

                <!-- Modal -->
                <div id="deleteModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
                    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
                        <h2 class="text-lg font-semibold text-gray-800 mb-4">Konfirmasi Hapus</h2>
                        <p class="text-gray-600 mb-6">Apakah Anda yakin ingin menghapus kreasi ini? Tindakan ini tidak dapat dibatalkan.</p>
                        <div class="flex justify-end space-x-4">
                            <!-- Cancel Button -->
                            <button 
                                onclick="closeModal()" 
                                class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                                Batal
                            </button>
                            <!-- Confirm Delete Button -->
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button 
                                    type="submit" 
                                    class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
    function openModal() {
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    function handleDelete(event) {
        event.preventDefault(); // Prevent form submission to handle redirection manually

        // Simulate successful deletion (replace with an actual AJAX request if needed)
        setTimeout(() => {
            // Redirect to the "Kreasiku" page after deletion
            window.location.href = "{{ route('kreasiku') }}";
        }, 500); // Simulated delay for UX
    }
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

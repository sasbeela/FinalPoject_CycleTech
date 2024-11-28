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
                <li><a href="{{ route('tentang.kami') }}" class="text-white bg-green-700 rounded-lg hover:bg-old-hulk inline-flex justify-center w-full px-4 py-2">Tentang Kami</a></li>
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

    <!-- Hero Section -->
    <div class="relative bg-gray-50 py-10 px-6 md:px-10">
        <div class="relative md:bg-[url('/public/images/tentangkami.png')] bg-no-repeat bg-cover bg-center h-[400px] rounded-lg lg:overflow-show">
            <div class="absolute top-24 left-4 md:top-44 md:left-6 bg-white bg-opacity-100 rounded-lg p-6 max-w-full w-[412px]">
                <div class="bg-white-200 flex items-center">
                    <img src="{{ asset('images/logo 2.png') }}" alt="Logo" class="w-12 h-12 rounded-full mr-4">
                    <h2 class="text-2xl font-bold text-hulk">Cycle Tech</h2>
                </div>
                <p class="mt-4 text-gray-600">
                    Cycle Tech adalah platform inovatif untuk pengelolaan sampah yang cerdas dan berkelanjutan. Dengan fitur-fitur canggih, kami membantu Anda memilah, mengelola, dan mendaur ulang sampah dengan lebih mudah dan efektif, sambil berkontribusi pada lingkungan yang lebih bersih.
                </p>
            </div>
        </div>
    </div>
    
    <div class="max-w-6xl mx-auto text-justify text-gray-700 lg:px-10 md:px-12 md:mt-10 px-16 mb-10">
        <p class="text-lg leading-relaxed">
            Cycle Tech adalah solusi cerdas untuk pengelolaan sampah Anda. Kami menyediakan platform lengkap yang tidak hanya mengedukasi, tetapi juga menginspirasi pengelolaan sampah secara kreatif. Dengan fitur deteksi jenis sampah otomatis, Anda dapat mengunggah gambar sampah dan mendapatkan rekomendasi kreasi menarik yang dapat dibuat dari limbah tersebut.
        </p>
        <p class="mt-4 text-lg leading-relaxed">
            Selain itu, kami juga menghadirkan galeri inspirasi daur ulang untuk membantu Anda mengubah sampah menjadi barang bernilai guna, serta artikel terkini yang membahas isu-isu penting seputar pengelolaan dan teknologi daur ulang. Cycle Tech hadir untuk mempermudah pengelolaan sampah Anda sekaligus berkontribusi pada lingkungan yang lebih bersih dan berkelanjutan.
        </p>
  </div>


    <!-- Visi dan Misi -->
    <section class="bg-gradient-to-t from-krem to-birumuda py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Visi dan Misi</h2>
            <div class="flex flex-col items-center space-y-8 md:space-y-0 justify-center">
                <div class="flex flex-col items-center">
                    <h3 class="text-2xl font-semibold text-hulk mb-4">Visi Kami</h3>
                    <p class="text-gray-700 text-justify w-full max-w-4xl">Menjadi platform digital terdepan yang menginspirasi dan memberdayakan masyarakat untuk mengelola sampah secara kreatif dan inovatif, demi menciptakan lingkungan yang bersih, sehat, dan berkelanjutan.</p>
                </div>
                <div class="flex flex-col items-center">
                    <h3 class="text-2xl font-semibold text-hulk mb-4">Misi Kami</h3>
                    <ul class="text-gray-700 space-y-2 list-decimal list-inside w-full max-w-4xl">
                        <li>Meningkatkan kesadaran dan edukasi masyarakat tentang pentingnya pengelolaan sampah yang ramah lingkungan dan berkelanjutan.</li>
                        <li>Mengembangkan fitur-fitur inovatif yang mendukung daur ulang dan pemanfaatan kembali sampah dengan cara yang kreatif.</li>
                        <li>Memberikan informasi terkini tentang manfaat, peluang, dan nilai ekonomi dari pengelolaan sampah yang baik.</li>
                        <li>Mendorong partisipasi aktif masyarakat dalam pengelolaan sampah melalui platform yang inklusif dan mudah diakses.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Section: Tim Kami -->
    <section class="bg-white py-10">
        <div class="container mx-auto text-center px-6 md:px-32">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Tim Kami</h2>
            <p class="text-gray-600 mt-4">Berikut adalah tim hebat yang bekerja di balik layar Cycle Tech.</p>
    
            <!-- Baris Pertama -->
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-8 mt-12">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/salma.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Salma Salsabila</h3>
                    <p class="text-gray-600">Product Manager</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/mutia.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Mutia Azzahra</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/harry.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Harry Bonardo</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/ivan.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ivan Herdianto</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/aprin.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Aprinia Salsabila</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/ilham.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ilham Saputra</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/anggita.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Anggita Adilianza</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/rizma.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Rizma Agustin</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/velizha.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Velizha Sandy</h3>
                    <p class="text-gray-600">Data Analyst</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/danu.png') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Muhammad Danu</h3>
                    <p class="text-gray-600">Data Analyst</p>
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
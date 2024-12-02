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
                <li><a href="{{ route('dashboard.nasabah') }}" class="text-black  hover:text-old-hulk px-4 py-2">Beranda</a></li>
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

            @php
            use App\Models\Notification;
                $notifications = Notification::latest()->take(5)->get(); // Ambil 5 notifikasi terbaru
            @endphp

            <!-- Notification Dropdown -->
            <div class="flex flex-row space-x-6">
                <!-- Notification Dropdown -->
                <div class="relative mt-2 lg:mt-0">
                    <!-- Notification Icon -->
                    <button id="notificationButton" class="relative focus:outline-none mt-2">
                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/bell.svg" alt="Notification" class="w-6 h-6">
                        @if($notifications->where('read_status', false)->count() > 0)
                            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                {{ $notifications->where('read_status', false)->count() }}
                            </span>
                        @endif
                    </button>

                    <!-- Dropdown -->
                    <div id="notificationDropdown" class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-lg border border-gray-200 z-50 hidden">
                        <div class="p-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold">Notifikasi</h3>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            @forelse($notifications as $notification)
                                <li class="p-4 flex items-start">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900">{{ $notification->message }}</p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            {{ $notification->created_at->diffForHumans() }}
                                        </p>
                                    </div>
                                </li>
                            @empty
                                <li class="p-4">
                                    <p class="text-sm text-gray-500 text-center">Tidak ada notifikasi baru</p>
                                </li>
                            @endforelse

                            <form action="{{ route('notifications.mark-read') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-sm text-blue-700 hover:underline">Tandai semua sebagai sudah dibaca</button>
                            </form>
                        </ul>
                    </div>
                </div>
                    <!-- Hamburger Icon (only visible on smaller screens) -->
                    <li class="lg:hidden flex items-center">
                        <button id="mobileMenuToggle" class="text-black active:text-hulk focus:outline-none mt-2">
                            <i class="bi bi-list text-3xl"></i>
                        </button>
                    </li>

                    <!-- Profile Icon (only visible on larger screens) -->
                    <li class="hidden lg:flex items-center">
                        <a href="{{ route('profile.nasabah') }}">
                            <img src="{{ auth('nasabah')->user()->photo ? asset('storage/' . auth('nasabah')->user()->photo) : 'https://via.placeholder.com/40' }}"
                                alt="Profile"
                                class="w-10 h-10 rounded-full border-4 border-hulk">
                        </a>
                    </li>
                    <li class="hidden lg:flex items-center">
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="flex items-center">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-red-600 focus:outline-none">
                                <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/box-arrow-right.svg" alt="Logout" class="w-6 h-6">
                            </button>
                        </form>
                    </li>
                </div>
            </div>

            <!-- Dropdown Menu for Mobile -->
            <ul id="mobileDropdownMenu" class="lg:hidden hidden flex-col px-4 items-center space-y-4 bg-white border-t border-gray-200 py-4 font-medium text-gray-700">
                <li><a href="{{ route('dashboard.nasabah') }}" class="hover:text-hulk">Beranda</a></li>
                <li><a href="{{ route('kelola.sampah') }}" class="hover:text-hulk">Kelola Sampah</a></li>
                <li><a href="{{ route('kreasi') }}" class="hover:text-hulk">Kreasi</a></li>
                <li><a href="{{ route('tentang.kami') }}" class="hover:text-hulk">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-hulk">Profil</a></li>
                <li>
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-red-600 focus:outline-none">
                            <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/box-arrow-right.svg" alt="Logout" class="w-6 h-6">
                        </button>
                    </form>
                </li>
            </ul>
    </nav>

    <!-- JavaScript for Toggle Menu -->
    <script>
        // Dropdown Notification
        document.getElementById('notificationButton').addEventListener('click', function () {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!event.target.closest('#notificationButton') && !event.target.closest('#notificationDropdown')) {
                notificationDropdown.classList.add('hidden');
            }
        });

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
               <a href="{{ route('profile.nasabah')}}" class="text-black hover:text-old-hulk">Profil Saya</a>
            </li>
            <li>
                <a href="{{ route('profile.keamanan')}}" class="text-hulk font-semibold">Keamanan</a>
            </li>
            <li>
                <div class="mt-20">
                    <a href="javascript:void(0)" onclick="openOverlay()" class="text-red-600 hover:font-medium hover:text-red-700">Hapus Akun</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Account Detail Content -->
    <div class="w-full lg:w-3/4 bg-white border border-old-hulk rounded-lg p-6">
        <h3 class="font-semibold text-lg mb-4">Detail Akun</h3>

        <!-- Email Information -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium">Alamat Email</label>
            <p class="text-gray-800">{{ $user->email }}</p>
        </div>

        <!-- Password Section -->
        <div class="mb-6">
            <label class="block text-gray-700 font-medium">Kata Sandi</label>
            <div class="flex items-center border border-old-hulk rounded-lg p-2 mt-2">
                <span class="text-hulk mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 2a6 6 0 016 6v1.586l1.707 1.707a1 1 0 01-1.414 1.414l-1.379-1.379a1 1 0 01-.293-.707V8a4 4 0 10-8 0v1.621a1 1 0 01-.293.707l-1.379 1.379a1 1 0 11-1.414-1.414L4 9.586V8a6 6 0 016-6zm-3 14a3 3 0 106 0h-6z" clip-rule="evenodd" />
                    </svg>
                </span>
                <input id="password-field" type="password" class="w-full border-none focus:outline-none" value="{{ $user->password_plaintext }}" disabled>
                <button type="button" id="toggle-password" class="text-gray-500 hover:text-hulk focus:outline-none ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" id="eye-icon" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="eye-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12h.01M12 12h.01M9 12h.01M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.567 1.822-1.729 3.43-3.298 4.598A9.994 9.994 0 0112 19c-4.477 0-8.268-2.943-9.542-7z" />
                        <path id="eye-closed" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18M10.24 10.24a3 3 0 004.243 4.243M17.657 17.657A8.987 8.987 0 0112 21a8.987 8.987 0 01-7.071-3.343M6.343 6.343A8.987 8.987 0 0112 3c2.116 0 4.065.737 5.657 1.964" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Change Password Button -->
        <a href="{{ route('profile.password') }}" class="px-6 py-2 font-medium border-2 border-old-hulk text-hulk rounded-full hover:bg-hulk hover:text-white">Ubah Kata Sandi</a>
    </div>
</section>

<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center flex hidden">
    <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
        <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Akun ini?</h2>
        <form id="delete-account-form" action="{{ route('profile.deleteAccount') }}" method="POST">
            @csrf
            <div class="flex justify-center space-x-4">
                <button type="submit" class="px-4 py-2 border-2 border-hulk text-hulk rounded hover:bg-red-100">
                    Ya
                </button>
                <button type="button" onclick="closeOverlay()" class="px-4 py-2 border-2 border-red-600 text-red-600 rounded hover:bg-green-100">
                    Tidak
                </button>
            </div>
        </form>
    </div>
</div>
</section>

<script>
    function openOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.remove('hidden');
    }

    function closeOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.add('hidden');
    }

    document.getElementById('toggle-password').addEventListener('click', function () {
        const passwordField = document.getElementById('password-field');
        const eyeOpenIcon = document.getElementById('eye-open');
        const eyeClosedIcon = document.getElementById('eye-closed');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeOpenIcon.classList.add('hidden'); // Sembunyikan ikon mata terbuka
            eyeClosedIcon.classList.remove('hidden'); // Tampilkan ikon mata tertutup
        } else {
            passwordField.type = 'password';
            eyeOpenIcon.classList.remove('hidden'); // Tampilkan ikon mata terbuka
            eyeClosedIcon.classList.add('hidden'); // Sembunyikan ikon mata tertutup
        }
    });
</script>


    <!-- Footer -->
    <section>
        <footer class="bg-gradient-to-t from-birumuda to-krem mt-0 lg:mt-72 py-8">
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

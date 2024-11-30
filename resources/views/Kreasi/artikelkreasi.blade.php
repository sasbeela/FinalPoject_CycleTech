<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

            @php
                use App\Models\Notification;
                $notifications = Notification::latest()->take(5)->get(); // Ambil 5 notifikasi terbaru
            @endphp

            <!-- Notification Dropdown -->
            <div class="relative">
                <!-- Notification Icon -->
                <button id="notificationButton" class="relative focus:outline-none">
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
        document.getElementById('notificationButton').addEventListener('click', function () {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
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

    <!-- artikel -->
    <div class="max-w-3xl mx-auto p-4 mt-24">
        <!-- Main Card -->
        <div class="max-w-4xl mx-auto p-6 bg-white border border-hulk rounded-lg shadow-lg mt-24">
            <!-- Breadcrumb -->
            <nav class="text-sm text-gray-600 mb-4">
                <a href="{{ route('artikel.kreasi', ['id' => $kreasi->id]) }}" class="hover:underline">Kreasi</a> >
                <span class="text-gray-800">{{ $kreasi->judul_kreasi }}</span>
            </nav>

            <!-- Header Image -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('storage/' . $kreasi->foto_kreasi) }}" alt="{{ $kreasi->judul_kreasi }}" class="w-40 h-40 rounded-full border-4 border-hulk shadow-lg">
            </div>

            <!-- Content -->
            <div class="max-w-3xl mx-auto py-5">
                <!-- Judul -->
                <h1 class="text-2xl font-bold text-green-700 mb-4 text-center">{{ $kreasi->judul_kreasi }}</h1>

                <!-- Informasi Detail -->
                <div class="text-gray-600 space-y-2">
                    <!-- Penulis -->
                    <div>
                        <span class="font-semibold text-black">Penulis:</span> {{ $kreasi->author }}
                    </div>

                    <!-- Kategori -->
                    <div>
                        <span class="font-semibold text-black">Kategori:</span> {{ $kreasi->kategori_kreasi ?? 'Kategori tidak ditemukan' }}
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <span class="font-semibold text-black">Diterbitkan:</span>
                        {{ \Carbon\Carbon::parse($kreasi->tanggal)->format('d M Y') }}
                    </div>
                </div>
            </div>

            <!-- Alat dan Bahan -->
            <h2 class="text-lg font-semibold text-hulk mb-3">Alat dan Bahan:</h2>
            <ul class="list-disc pl-6 text-gray-700 mb-6">
                {!! nl2br(e($kreasi->alat_bahan)) !!}
            </ul>

            <!-- Langkah-Langkah -->
            <h2 class="text-lg font-semibold text-hulk mb-3">Langkah-langkah:</h2>
            <ol class="list-decimal pl-6 text-gray-700">
                {!! nl2br(e($kreasi->langkah)) !!}
            </ol>
        </div>

        <!-- Similar Creations Section -->
            @if($kreasiSerupa->isNotEmpty())
            <h2 class="flex justify-center text-center text-lg font-semibold text-gray-800 mb-4 mt-8">Kreasi Serupa</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-12 hover:outerline-old-hulk px-24 sm:px-10">
                @foreach($kreasiSerupa as $item)
                    <div class="bg-gradient-to-b from-birumuda to-krem p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                        <a href="{{ route('artikel.kreasi', $item->id) }}">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $item->judul_kreasi }}</h3>
                            <img src="{{ asset('storage/' . $item->foto_kreasi) }}" alt="{{ $item->judul_kreasi }}" class="w-full h-48 object-cover rounded-t-lg">
                            <p class="text-gray-600 mt-2">Oleh {{ $item->author }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            @else
            <p class="text-center text-gray-600 mt-8">Tidak ada kreasi serupa ditemukan.</p>
            @endif
        </div>
    </div>

    <!-- Footer -->
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
</body>
</html>

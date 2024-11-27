<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css') }}">
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="flex flex-col lg:flex-row">
        <!-- Admin Panel Title (clickable for mobile) -->
        <div class="lg:hidden flex justify-between items-center p-4 bg-hulk">
            <!-- Button that toggles the sidebar -->
            <button id="toggleButton" class="text-white font-extrabold text-[20px] cursor-pointer">
                Admin Panel
            </button>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" class="fixed lg:relative -translate-x-full lg:translate-x-0 transition-transform duration-300 lg:basis-[15%] h-full lg:h-screen z-10 bg-hulk w-[75%] lg:w-auto">
            <div class="h-full px-6 lg:px-[25px] py-4">
                <div class="px-4 py-6 flex items-center justify-center border-b border-light-white/[0.3]">
                    <h1 class="text-white text-[20px] leading-[24px] font-extrabold lg:cursor-default">Admin Panel</h1>
                </div>
                <div class="flex items-center gap-4 py-4 lg:pt-[35px]">
                    <i class="fa-solid fa-gauge text-white"></i>
                    <a href="{{ route('admin.dashboard') }}" class="text-[18px] lg:text-[20px] text-white leading-[30px] hover:font-bold">Dashboard</a>
                </div>
                <div>
                    <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-layer-group text-white"></i>
                            <a href="{{ route('admin.categories.index') }}" class="text-[18px] lg:text-[20px] leading-[30px] font-normal text-white hover:font-bold">Kategori Sampah</a>
                        </div>
                        <i class="fa-solid fa-chevron-right text-white hidden lg:block"></i>
                    </div>
                    <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-newspaper text-white"></i>
                            <a href="{{ route('admin.artikel.index') }}" class="text-[18px] lg:text-[20px] leading-[30px] font-normal text-white hover:font-bold">Artikel</a>
                        </div>
                        <i class="fa-solid fa-chevron-right text-white hidden lg:block"></i>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="fa-brands fa-creative-commons-share text-white"></i>
                        <a href="{{ route('admin.kreasi.index') }}" class="text-[18px] lg:text-[20px] leading-[30px] font-normal text-white hover:font-bold">Kreasi</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-users text-white"></i>
                        <a href="{{ route('admin.datauser.index') }}" class="text-[18px] lg:text-[20px] leading-[30px] font-normal text-white hover:font-bold">Data Pengguna</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-[10px] pt-[24rem] cursor-pointer">
                    <div class="flex items-center gap-[10px]">
                        <i class="fa-brands fa-creative-commons-share"></i>
                        <a href="{{ route('admin.dataadmin.index') }}" class="text-[20px] leading-[30px] font-normal text-white hover:font-bold">Data Admin</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-[10px] py-[15px] cursor-pointer">
                    <div class="flex items-center gap-[10px]">
                        <i class="fa-solid fa-users"></i>
                        <a href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="text-[20px] leading-[30px] font-normal text-white hover:font-bold">
                            Logout
                        </a>
                    </div>
                </div>

                <!-- Form Logout Tersembunyi -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <!-- Content -->
        <div class="basis-full lg:basis-[85%] border p-4 lg:pl-4 lg:pt-4">
            @yield('content')
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById('toggleButton');
            const sidebar = document.getElementById('sidebar');

            toggleButton.addEventListener('click', function() {
                sidebar.classList.toggle('-translate-x-full');
            });
        });
    </script>
</body>
</html>

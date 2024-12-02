<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body class="bg-blue-50">
    <nav class="bg-gradient-to-r from-birumuda to-krem shadow-lg fixed top-0 w-full h-18 z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-6 md:px-10">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="<?php echo e(asset('images/logo 2.png')); ?>" alt="Logo" class="w-10 h-10 rounded-full">
                <h1 class="text-xl font-semibold text-hulk">Cycle Tech</h1>
            </div>

            <!-- Centered Navigation Links for Desktop -->
            <ul class="hidden lg:flex items-center space-x-6 font-medium text-gray-700">
                <li><a href="<?php echo e(route('dashboard.nasabah')); ?>" class="text-white bg-green-700 rounded-lg hover:bg-old-hulk inline-flex justify-center w-full px-4 py-2">Beranda</a></li>
                <li><a href="<?php echo e(route('kelola.sampah')); ?>" class="hover:text-old-hulk">Kelola Sampah</a></li>
                <li>
                    <div class="relative inline-block text-left">
                        <button id="desktopKreasiButton" type="button" class="text-black hover:text-old-hulk">
                            Kreasi
                        </button>
                        <div id="desktopKreasiDropdown" class="absolute right-0 z-10 hidden mt-2 w-20 rounded-md bg-green-200 shadow-lg">
                            <div class="py-1">
                                <a href="<?php echo e(route('kreasi')); ?>" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300">Kreasi</a>
                                <a href="<?php echo e(route('kreasiku')); ?>" class="block px-4 py-2 text-sm text-gray-700 bg-green-200 hover:bg-green-300">Kreasiku</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="<?php echo e(route('tentang.kami')); ?>" class="hover:text-green-700">Tentang Kami</a></li>
            </ul>

            <?php
                use App\Models\Notification;
                $notifications = Notification::latest()->take(5)->get(); // Ambil 5 notifikasi terbaru
            ?>

            <!-- Notification Dropdown -->
            <div class="flex flex-row space-x-6">
                <!-- Notification Dropdown -->
                <div class="relative mt-2 lg:mt-0">
                    <!-- Notification Icon -->
                    <button id="notificationButton" class="relative focus:outline-none mt-2">
                        <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/bell.svg" alt="Notification" class="w-6 h-6">
                        <?php if($notifications->where('read_status', false)->count() > 0): ?>
                            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                <?php echo e($notifications->where('read_status', false)->count()); ?>

                            </span>
                        <?php endif; ?>
                    </button>

                    <!-- Dropdown -->
                    <div id="notificationDropdown" class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-lg border border-gray-200 z-50 hidden">
                        <div class="p-4 border-b border-gray-200">
                            <h3 class="text-lg font-semibold">Notifikasi</h3>
                        </div>
                        <ul class="divide-y divide-gray-200">
                            <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="p-4 flex items-start">
                                    <div class="flex-1">
                                        <p class="text-sm font-medium text-gray-900"><?php echo e($notification->message); ?></p>
                                        <p class="mt-1 text-xs text-gray-500">
                                            <?php echo e($notification->created_at->diffForHumans()); ?>

                                        </p>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li class="p-4">
                                    <p class="text-sm text-gray-500 text-center">Tidak ada notifikasi baru</p>
                                </li>
                            <?php endif; ?>

                            <form action="<?php echo e(route('notifications.mark-read')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="text-sm text-blue-700 hover:underline px-10 py-2">Tandai semua sebagai sudah dibaca</button>
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
                        <a href="<?php echo e(route('profile.nasabah')); ?>">
                            <img src="<?php echo e(auth('nasabah')->user()->photo ? asset('storage/' . auth('nasabah')->user()->photo) : 'https://via.placeholder.com/40'); ?>"
                                alt="Profile"
                                class="w-10 h-10 rounded-full border border-gray-300">
                        </a>
                    </li>
                    <li class="hidden lg:flex items-center">
                        <form id="logoutForm" action="<?php echo e(route('logout')); ?>" method="POST" class="flex items-center">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-gray-600 hover:text-red-600 focus:outline-none">
                                <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/box-arrow-right.svg" alt="Logout" class="w-6 h-6">
                            </button>
                        </form>
                    </li>
                </div>
            </div>

            <!-- Dropdown Menu for Mobile -->
            <ul id="mobileDropdownMenu" class="lg:hidden hidden flex-col px-4 items-center space-y-4 bg-white border-t border-gray-200 py-4 font-medium text-gray-700">
                <li><a href="<?php echo e(route('dashboard.nasabah')); ?>" class="hover:text-hulk">Beranda</a></li>
                <li><a href="<?php echo e(route('kelola.sampah')); ?>" class="hover:text-hulk">Kelola Sampah</a></li>
                <li><a href="<?php echo e(route('kreasi')); ?>" class="hover:text-hulk">Kreasi</a></li>
                <li><a href="<?php echo e(route('tentang.kami')); ?>" class="hover:text-hulk">Tentang Kami</a></li>
                <li><a href="#" class="hover:text-hulk">Profil</a></li>
                <li>
                    <form id="logoutForm" action="<?php echo e(route('logout')); ?>" method="POST" class="">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="text-gray-600 hover:text-red-600 focus:outline-none">
                            <img src="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/box-arrow-right.svg" alt="Logout" class="w-6 h-6">
                        </button>
                    </form>
                </li>
            </ul>
    </nav>

    <!-- JavaScript -->
    <script>
        // Dropdown Notification
        document.getElementById('notificationButton').addEventListener('click', function () {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
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
    <section class="bg-white py-10 mt-16">
        <div class="container mx-auto text-center px-4">
            <img src="<?php echo e(asset('images/beranda 1.png')); ?>" alt="Recycle Bins" class="w-full max-w-5xl mx-auto rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-gray-800 mt-8">Cycle Tech</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Solusi untuk manajemen sampah yang lebih baik. Kami menyediakan berbagai layanan untuk menjaga lingkungan tetap bersih dan sehat.</p>
        </div>
    </section>

    <!-- Artikel & Informasi Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center px-32">
            <h2 class="text-2xl font-bold text-center text-gray-800">Artikel & Informasi</h2>
            <!-- Card Artikel -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8">
                <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('detail.artikel', $article->id)); ?>" class="block">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                            <img src="<?php echo e(asset('storage/' . $article->foto)); ?>" alt="<?php echo e($article->judul_artikel); ?>" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-gray-700"><?php echo e($article->judul_artikel); ?></h3>
                                <p class="text-gray-600 mt-2"><?php echo e(Str::limit($article->isi, 50)); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p class="text-gray-600">Belum ada artikel tersedia.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

   <!-- Mitra Kami Section -->
   <section class="bg-white py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold text-center text-gray-800">Rekomendasi Pengelola Sampah</h2>
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-2 gap-6 mt-8 px-24 lg:px-8 md:px-32">
            <a href="https://apsiumkmsampah.id/" class="block">
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="<?php echo e(asset('images/apsi.png')); ?>" alt="APSI" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
            </a>
            <a href="https://www.adupi.org/" class="block">
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="<?php echo e(asset('images/adupi.png')); ?>" alt="ADUPI" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
            </a>
            <a href="https://ibcsd.or.id/" class="block">
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="<?php echo e(asset('images/ibcsd.png')); ?>" alt="IBCS" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
            </a>
            <a href="https://repurpose.global/" class="block">
                <div class="bg-white shadow-lg rounded-lg w-[240px] h-[262px] overflow-hidden">
                    <img src="<?php echo e(asset('images/repurpose.png')); ?>" alt="Repurpose" class="w-[240px] h-[133px]">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-700">Pengelolaan Sampah</h3>
                        <p class="text-gray-600 mt-2">Daur ulang dan pengelolaan sampah yang tepat.</p>
                    </div>
                </div>
            </a>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <section>
        <footer class="bg-gradient-to-t from-birumuda to-krem py-10">
            <div class="container mx-auto flex flex-col md:flex-row justify-between items-center md:px-32 px-24">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <div class="flex items-center">
                        <img src="<?php echo e(asset('images/logo 2.png')); ?>" alt="Cycle Tech Logo" class="w-10 h-10 mr-3">
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
<?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/Dashboard/dashboard.blade.php ENDPATH**/ ?>
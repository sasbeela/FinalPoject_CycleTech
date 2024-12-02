<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Dashboard'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.6.0-web/css')); ?>">
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="min-h-screen">
    <div class="flex flex-col lg:flex-row h-screen">
        <!-- Admin Panel Title (clickable for mobile) -->
        <div class="lg:hidden flex justify-between items-center p-4 bg-hulk">
            <!-- Button that toggles the sidebar -->
            <button id="toggleButton" class="text-white font-extrabold text-xl cursor-pointer">
                Admin Panel
            </button>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" class="fixed lg:relative -translate-x-full lg:translate-x-0 transition-transform duration-300 lg:basis-[15%] z-10 bg-hulk w-[75%] lg:w-auto h-screen">
            <div class="px-6 lg:px-6 py-4">
                <div class="px-4 py-6 flex items-center justify-center border-b border-light-white/[0.3]">
                    <h1 class="text-white text-xl leading-6 font-extrabold lg:cursor-default">Admin Panel</h1>
                </div>
                <div class="flex items-center gap-4 py-4 lg:pt-8">
                    <i class="fa-solid fa-gauge text-white"></i>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="text-lg lg:text-xl text-white leading-6 hover:font-bold">Dashboard</a>
                </div>
                <div>
                    <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-layer-group text-white"></i>
                            <a href="<?php echo e(route('admin.categories.index')); ?>" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Kategori Sampah</a>
                        </div>
                        <i class="fa-solid fa-chevron-right text-white hidden lg:block"></i>
                    </div>
                    <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                        <div class="flex items-center gap-4">
                            <i class="fa-solid fa-newspaper text-white"></i>
                            <a href="<?php echo e(route('admin.artikel.index')); ?>" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Artikel</a>
                        </div>
                        <i class="fa-solid fa-chevron-right text-white hidden lg:block"></i>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="fa-brands fa-creative-commons-share text-white"></i>
                        <a href="<?php echo e(route('admin.kreasi.index')); ?>" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Kreasi</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-users text-white"></i>
                        <a href="<?php echo e(route('admin.datauser.index')); ?>" class="text-lg lg:text-xl leading-6 font-normal text-white hover:font-bold">Data Pengguna</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 pt-56 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="fa-brands fa-creative-commons-share text-white"></i>
                        <a href="<?php echo e(route('admin.dataadmin.index')); ?>" class="text-xl leading-6 font-normal text-white hover:font-bold">Data Admin</a>
                    </div>
                </div>
                <div class="flex items-center justify-between gap-4 py-4 cursor-pointer">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-users text-white"></i>
                        <a href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="text-xl leading-6 font-normal text-white hover:font-bold">
                            Logout
                        </a>
                    </div>
                </div>

                <!-- Hidden Logout Form -->
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </div>

        <!-- Content -->
        <div class="basis-full lg:basis-[85%] border p-4 lg:pl-4 lg:pt-4">
            <?php echo $__env->yieldContent('content'); ?>
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
<?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/admin/layout/app.blade.php ENDPATH**/ ?>
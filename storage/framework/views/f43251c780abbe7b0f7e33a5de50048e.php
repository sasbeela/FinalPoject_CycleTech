<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech Login</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script>
        function redirectToLogin() {
            const userType = document.getElementById('userType').value;
            if (userType === 'nasabah') {
                window.location.href = "<?php echo e(route('login.nasabah')); ?>";
            } else if (userType === 'admin') {
                window.location.href = "<?php echo e(route('login.admin')); ?>";
            }
        }
    </script>
</head>
<body class="bg-gradient-to-b from-birumuda to-krem flex min-h-screen">
    <!-- Left Side -->
    <div class="w-2/3 h-screen overflow-hidden relative hidden lg:block">
        <img src="<?php echo e(asset('images/login.png')); ?>" alt="Recycle Symbol" class="object-cover w-full h-full">
    </div>
    <!-- Right Side -->
    <div class="lg:w-1/3 w-full p-8 flex flex-col justify-center relative">
        <div class="text-center mb-8">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Cycle Tech Logo" class="mx-auto mb-4">
            <h2 class="text-2xl font-bold">Selamat Datang Kembali!</h2>
            <p class="text-gray-600">Silakan pilih jenis pengguna untuk masuk</p>
            <div class="mb-4">
                <label for="userType" class="block text-gray-700">Masuk sebagai : Admin</label>
                <select id="userType" class="text-sm lg:text-lg w-1/2 px-4 py-2 border rounded-lg bg-hulk text-white focus:outline-none focus:ring-2 focus:ring-old-hulk" onchange="redirectToLogin()">
                    <option value="">Pilih Jenis Pengguna</option>
                    <option value="nasabah">Nasabah</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>

        <!-- Tampilkan Alert Jika Ada Error -->
        <?php if($errors->any()): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form id="adminForm" action="<?php echo e(route('submit.admin')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="text" id="email" name="email" value="<?php echo e(old('email')); ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk" required>
            </div>
            <button type="submit" class="w-full bg-hulk text-white py-2 rounded-lg hover:bg-old-hulk">Masuk</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/Admin/login.blade.php ENDPATH**/ ?>
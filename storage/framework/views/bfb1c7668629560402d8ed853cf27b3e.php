<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech Registration</title>
    <link rel="icon" type="image/x-icon" href="/images/logo 2.png">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body class="bg-gradient-to-b from-birumuda to-krem flex min-h-screen">

    <!-- Left Side -->
    <div class="w-2/3 h-screen overflow-hidden relative hidden lg:block">
        <img src="<?php echo e(asset('images/signin.png')); ?>" alt="Recycle Symbol" class="object-cover w-full h-full">
    </div>

    <!-- Right Side -->
    <div class="lg:w-1/3 w-full p-8 flex flex-col justify-center relative">
        <div class="text-center mb-8">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Cycle Tech Logo" class="mx-auto mb-4">
            <h2 class="text-2xl font-bold">Buat Akun</h2>
            <p class="text-gray-600">Ayo bergabung dan jadi bagian dari penyelamatan bumi!</p>
        </div>

        <form id="registrationForm" class="block md:px-32 lg:px-0" action="<?php echo e(route('signin.create')); ?>" method="POST" novalidate>
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">Nomor Handphone</label>
                <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk" required pattern="\d*">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk" required>
                <small id="emailError" class="text-red-500 hidden">Email sudah terdaftar, silakan gunakan email lain.</small>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk" required>
            </div>
            <button type="submit" class="w-full bg-hulk text-white py-2 rounded-lg hover:bg-old-hulk">Daftar</button>
        </form>
        <div class="text-center mt-4">
            <p>Sudah memiliki Akun? <a href="<?php echo e(route('login.nasabah')); ?>" class="text-hulk">Masuk</a></p>
        </div>
    </div>

<script>
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const form = document.getElementById('registrationForm');

    // Validasi email saat pengguna mengetik atau berpindah dari input
    emailInput.addEventListener('blur', function () {
        const email = emailInput.value.trim();

        if (email) {
            // Lakukan request AJAX untuk mengecek email
            fetch(`/check-email?email=${email}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Server error');
                }
                return response.json();
            })
            .then(data => {
                if (data.exists) {
                    // Jika email sudah ada, tampilkan pesan error
                    emailError.classList.remove('hidden');
                    emailInput.classList.add('border-red-500');
                    emailInput.setCustomValidity('Email sudah terdaftar.');
                } else {
                    // Reset pesan error jika email valid
                    emailError.classList.add('hidden');
                    emailInput.classList.remove('border-red-500');
                    emailInput.setCustomValidity('');
                }

                emailInput.reportValidity();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    });

    // Validasi form secara keseluruhan saat submit
    form.addEventListener('submit', function (event) {
        const inputs = form.querySelectorAll('input[required]');
        let isValid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) {
                input.setCustomValidity('Kolom ini wajib diisi.');
                isValid = false;
            } else {
                input.setCustomValidity('');
            }

            input.reportValidity();
        });

        if (!isValid || emailInput.validity.customError) {
            event.preventDefault();
        }
    });
</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\php\FinalPoject_CycleTech\resources\views/Akun/signin.blade.php ENDPATH**/ ?>
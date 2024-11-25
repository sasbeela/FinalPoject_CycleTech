<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech Registration</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-birumuda to-krem flex min-h-screen">

        <!-- Left Side -->
        <div class="w-2/3 h-screen overflow-hidden relative hidden lg:block">
            <img src="{{ asset('images/signin.png') }}" alt="Recycle Symbol" class="object-cover w-full h-full">
        </div>

        <!-- Right Side -->
        <div class="lg:w-1/3 w-full p-8 flex flex-col justify-center relative">
            <div class="text-center mb-8">
                <img src="{{ asset('images/logo.png') }}" alt="Cycle Tech Logo" class="mx-auto mb-4">
                <h2 class="text-2xl font-bold">Buat Akun</h2>
                <p class="text-gray-600">Ayo bergabung dan jadi bagian dari penyelamatan bumi!</p>
            </div>

            <form class="block md:px-32 lg:px-0" action="{{ route('signin.create') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Nomor Handphone</label>
                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Kata Sandi</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-old-hulk">
                </div>
                <button type="submit" class="w-full bg-hulk text-white py-2 rounded-lg hover:bg-old-hulk">Daftar</button>
            </form>
            <div class="text-center mt-4">
                <p>Sudah memiliki Akun? <a href="{{ route('login.nasabah') }}" class="text-hulk">Masuk</a></p>
            </div>
        </div>
</body>
</html>

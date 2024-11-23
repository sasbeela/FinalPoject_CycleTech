<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cycle Tech Login</title>
    @vite('resources/css/app.css')
    <script>
        function redirectToLogin() {
            const userType = document.getElementById('userType').value;
            if (userType === 'nasabah') {
                // Redirect ke halaman login nasabah
                window.location.href = "{{ route('login.nasabah') }}";
            } else if (userType === 'admin') {
                // Redirect ke halaman login admin
                window.location.href = "{{ route('login.admin') }}";
            }
        }
    </script>
</head>
<body class="bg-green-100 flex min-h-screen">
    <!-- Left Side -->
    <div class="w-2/3 h-screen overflow-hidden relative">
        <img src="{{ asset('images/login.png') }}" alt="Recycle Symbol" class="object-cover w-full h-full">
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <div class="bg-green-300 rounded-full w-16 h-16"></div>
            <div class="bg-green-400 rounded-full w-12 h-12"></div>
            <div class="bg-green-500 rounded-full w-8 h-8"></div>
        </div>
    </div>
    <!-- Right Side -->
    <div class="w-1/3 p-8 flex flex-col justify-center relative">
        <div class="text-center mb-8">
            <img src="{{ asset('images/logo.png') }}" alt="Cycle Tech Logo" class="mx-auto mb-4">
            <h2 class="text-2xl font-bold">Selamat Datang Kembali!</h2>
            <p class="text-gray-600">Silakan pilih jenis pengguna untuk masuk</p>
            <div class="mb-4">
                <label for="userType" class="block text-gray-700">Masuk sebagai</label>
                <select id="userType" class="w-1/2 px-4 py-2 border rounded-lg bg-green-500 text-white focus:outline-none focus:ring-2 focus:ring-green-700" onchange="redirectToLogin()">
                    <option value="">Pilih Jenis Pengguna</option>
                    <option value="nasabah">Nasabah</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
        </div>

        <form id="adminForm" style="display: block;" action="{{ route('submit.admin') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Email</label>
                <input type="text" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Kata Sandi</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg hover:bg-green-600">Masuk</button>
        </form>
    </div>

</body>
</html>

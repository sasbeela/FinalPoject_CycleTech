@extends('admin.layout.app')

@section('title', 'Categories')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-6 rounded-md shadow-md w-xl">
        <h1 class="text-5xl font-bold m-6 mb-7 text-center">Edit Data Admin</h1>

        <!-- Table -->
        <form action="#" method="post" enctype="multipart/form-data">
            <!-- Judul Artikel -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="judul">Nama Admin</label>
                <input type="text" id="judul" name="judul" class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="judul">Email Admin</label>
                <input type="text" id="judul" name="judul" class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="judul">Password Baru</label>
                <input type="text" id="judul" name="judul" class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="judul">Konfirmasi Password Baru</label>
                <input type="text" id="judul" name="judul" class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk">
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">
                <a href="{{ route('admin.categories.index') }}" type="button" class="bg-gray text-white px-4 py-2 rounded hover:bg-gray-600">
                    Kembali
                </a>    
                <button type="submit" class="bg-hulk text-white px-4 py-2 rounded hover:bg-old-hulk">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

@endsection
@extends('admin.layout.app')

@section('title', 'Categories')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-4 lg:p-6 rounded-md shadow-md w-full lg:w-xl">
        <h1 class="text-3xl lg:text-5xl font-bold m-4 lg:m-6">Kategori Sampah</h1>

        <!-- Button to add new category -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.categories.tambah') }}" class="bg-hulk text-white px-3 py-2 rounded hover:bg-old-hulk text-sm lg:text-base">
                Tambah Data Kategori
            </a>
        </div>

        <!-- Table Container for responsive scroll -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-hulk">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="px-2 lg:px-4 py-2 border border-hulk text-xs lg:text-sm">ID</th>
                        <th class="px-2 lg:px-4 py-2 border border-hulk text-xs lg:text-sm">Kategori Sampah</th>
                        <th class="px-2 lg:px-4 py-2 border border-hulk text-xs lg:text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Table Row 1 -->
                    <tr>
                        <td class="px-2 lg:px-4 py-2 border border-hulk text-xs lg:text-base"></td>
                        <td class="px-2 lg:px-4 py-2 border border-hulk text-xs lg:text-base"></td>
                        <td class="px-2 lg:px-4 py-2 border-hulk flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-3">
                            <a href="{{ route('admin.categories.edit') }}" class="bg-hulk text-white px-3 py-1 rounded hover:bg-old-hulk text-center text-xs lg:text-base">Edit</a>
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-xs lg:text-base">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

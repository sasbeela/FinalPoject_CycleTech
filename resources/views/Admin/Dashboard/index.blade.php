@extends('admin.layout.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-3xl lg:text-5xl font-bold m-4 lg:m-6">Dashboard</h1>
    <div class="flex flex-col">
        <!-- Filter -->
        <div class="m-4 lg:m-9 flex flex-col lg:flex-row items-start lg:items-center space-y-4 lg:space-y-0 lg:space-x-4">
            <div>
                <label for="month" class="block font-medium text-xl lg:text-2xl pb-2">Pilih Waktu</label>
                <select id="month" class="mt-1 block w-full lg:w-[10rem] h-[3rem] shadow-gray-500 rounded-md shadow-md text-lg border-solid border-2 border-hulk">
                    <option>Semua Bulan</option>
                    <option>Januari</option>
                    <option>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    <option>Mei</option>
                    <option>Juni</option>
                    <option>Juli</option>
                    <option>Agustus</option>
                    <option>September</option>
                    <option>Oktober</option>
                    <option>November</option>
                    <option>Desember</option>
                </select>
            </div>
            <div>
                <label for="year" class="block font-medium text-xl lg:text-2xl pb-2">Pilih Tahun</label>
                <select id="year" class="mt-1 block w-full lg:w-[10rem] h-[3rem] shadow-gray-500 rounded-md shadow-md text-lg border-solid border-2 border-hulk">
                    <option>Semua Tahun</option>
                    <option>2024</option>
                </select>
            </div>
            <div class="self-start lg:self-end flex w-full lg:w-auto">
                <button class="w-full lg:w-[10rem] h-[3rem] text-xl font-normal px-4 py-2 bg-hulk text-white rounded hover:bg-old-hulk shadow-md hover:font-medium">Terapkan</button>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 m-4 lg:m-0">
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Pengguna</h2>
                <p class="mt-2 text-xl font-bold">X</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Kreator</h2>
                <p class="mt-2 text-xl font-bold">X</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Kreasi</h2>
                <p class="mt-2 text-xl font-bold">X</p>
            </div>
        </div>

        <!-- Grafik -->
        <div class="mt-4 lg:mt-8 bg-white p-4 lg:p-8 shadow rounded-lg border-solid border-2 border-hulk m-4 lg:m-0">
            <h2 class="text-lg font-medium">Grafik Kreativitas</h2>
            <p class="mt-4"></p>
        </div>
    </div>
@endsection

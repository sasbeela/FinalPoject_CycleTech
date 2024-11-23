<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\adminKategoriController;
use App\Http\Controllers\Admin\AdminArtikelController;
use App\Http\Controllers\Admin\AdminKreasiController;
use App\Http\Controllers\Admin\AdminPenggunaController;
use App\Http\Controllers\Admin\AdminUploadArtikelController;
use App\Http\Controllers\Admin\AdminEditArtikelController;
use App\Http\Controllers\Admin\adminAddCategoriesController;
use App\Http\Controllers\Admin\adminEditCategoriesController;
use App\Http\Controllers\Admin\adminDataAdminController;
use App\Http\Controllers\Admin\adminEditDataAdminController;

// Route untuk halaman landing
Route::get('/', function () {
    return view('landing'); // Lokasi di resources/views/Layout/landing.blade.php
});

// Routes untuk fitur akun nasabah
Route::prefix('nasabah')->group(function () {
    // Halaman login nasabah
    Route::get('/login', [AuthController::class, 'showNasabahLoginForm'])->name('login.nasabah');

    // Proses login nasabah
    Route::post('/login', [AuthController::class, 'submitNasabahLogin'])->name('submit.nasabah');

    // Halaman daftar nasabah
    Route::get('/signin', [AuthController::class, 'showNasabahSigninForm'])->name('signin.nasabah');

    // Proses pendaftaran nasabah
    Route::post('/signin', [AuthController::class, 'createSignin'])->name('signin.create');

    // Route untuk dashboard nasabah
    Route::get('/dashboard', function () {
        return view('Akun.dashboard');
    })->name('dashboard.nasabah');

    // Route untuk Kelola Sampah
    Route::get('/Kelola-Sampah', function () {
        return view('KelolaSampah.kelolasampah');
    })->name('kelola.sampah');

    // Route untuk Kreasi
    Route::get('/Kreasi', function () {
        return view('Kreasi.kreasi');
    })->name('kreasi');

    // Route untuk Tentang Kami
    Route::get('/Tentang-Kami', function () {
        return view('tentangkami');
    })->name('tentang.kami');
});

// Routes untuk login admin
Route::prefix('admin')->group(function () {
    // Menampilkan form login admin
    Route::get('/login', [AuthController::class, 'showAdminLoginForm'])->name('login.admin');

    // Proses login admin
    Route::post('/login', [AuthController::class, 'submitAdminLogin'])->name('submit.admin');
});

// Routes Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Kategori Sampah
    Route::get('/categories', [AdminKategoriController::class, 'index'])->name('categories.index');

    // Artikel
    Route::get('/articles', [AdminArtikelController::class, 'index'])->name('artikel.index');
    Route::post('/articles/store', [AdminArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/articles/edit/{id}', [AdminArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/articles/update/{id}', [AdminArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/articles/{id}', [AdminArtikelController::class, 'destroy'])->name('artikel.destroy');
    
    // Kreasi
    Route::get('/creations', [AdminKreasiController::class, 'index'])->name('kreasi.index');

    // Data Pengguna
    Route::get('/users', [AdminPenggunaController::class, 'index'])->name('datauser.index');
    Route::delete('/users/{id}', [AdminPenggunaController::class, 'destroy'])->name('datauser.destroy');

    Route::get('/articles/upload', [AdminUploadArtikelController::class, 'index'])->name('artikel.upload');
    Route::get('/categories/tambah', [AdminAddCategoriesController::class, 'index'])->name('categories.tambah');
    Route::get('/categories/edit', [AdminEditCategoriesController::class, 'index'])->name('categories.edit');

    Route::get('/data-admin', [AdminDataAdminController::class,'index'])->name('DataAdmin.index');
    Route::get('/data-admin/edit', [AdminEditDataAdminController::class,'index'])->name('DataAdmin.edit');
});
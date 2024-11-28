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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Route untuk halaman landing
Route::get('/', function () {
    return view('landing');
})->name('landing.page');;

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Check Email Signin
Route::get('/check-email', function (Request $request) {
    $email = $request->query('email');

    $exists = DB::table('nasabah')->where('email', $email)->exists();

    return response()->json(['exists' => $exists]);
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

    // Route untuk profile nasabah
    Route::get('/profile', function () {
        return view('Profile.index');})->name('profile.nasabah');

    Route::get('/profile/keamanan', function () {
        return view('Profile.keamanan');})->name('profile.keamanan');

    Route::get('/profile/keamanan/ubah-password', function () {
        return view('Profile.editpassword');})->name('profile.password');

    // Route untuk dashboard nasabah
    Route::get('/dashboard', function () {
        return view('Dashboard.dashboard');
    })->name('dashboard.nasabah');

    // Route untuk Kelola Sampah
    Route::get('/Kelola-Sampah', function () {
        return view('KelolaSampah.kelolasampah');
    })->name('kelola.sampah');

    // Route untuk Kreasi
    Route::get('/Kreasi', function () {
        return view('Kreasi.kreasi');
    })->name('kreasi');

    Route::get('/deteksi', function () {
        return view('Kreasi.deteksi');
    })->name('deteksi.sampah');

    Route::get('/unggah-kreasi', function () {
        return view('Kreasi.unggahkreasi');
    })->name('unggah.kreasi');

    Route::get('/artikel-kreasi', function () {
        return view('Kreasi.artikelkreasi');
    })->name('artikel.kreasi');

    Route::get('/Kreasiku', function () {
        return view('Kreasiku.kreasiku');
    })->name('kreasiku');

    // Route untuk Tentang Kami
    Route::get('/Tentang-Kami', function () {
        return view('Dashboard.tentangkami');
    })->name('tentang.kami');

    //Route Dashboard Nasabah
    Route::get('/artikel', function () {
        return view('Dashboard.artikel');
    })->name('artikel.nasabah');

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

    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Kategori Sampah
    Route::get('/categories', [AdminKategoriController::class, 'index'])->name('categories.index');
    Route::get('/categories/tambah', [AdminKategoriController::class, 'create'])->name('categories.create'); // Mengarahkan ke method create
    Route::post('/categories/store', [AdminKategoriController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{id}', [AdminKategoriController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/update/{id}', [AdminKategoriController::class, 'update'])->name('categories.update');
    Route::delete('/categories/destroy/{id}', [AdminKategoriController::class, 'destroy'])->name('categories.destroy');

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

    // Data Admin
    Route::get('/data-admin', [AdminDataAdminController::class, 'index'])->name('dataadmin.index');
    Route::delete('/data-admin/{id}', [AdminDataAdminController::class, 'destroy'])->name('dataadmin.destroy');
    Route::get('/data-admin/{id}/edit', [AdminDataAdminController::class, 'edit'])->name('dataadmin.edit');
    Route::put('/data-admin/{id}', [AdminDataAdminController::class, 'update'])->name('dataadmin.update');

});
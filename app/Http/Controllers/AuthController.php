<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login nasabah
    public function showNasabahLoginForm()
    {
        return view('Akun.login');
    }

    // Menampilkan form login admin
    public function showAdminLoginForm()
    {
        return view('Admin.login');
    }

    // Menampilkan form daftar nasabah
    public function showNasabahSigninForm()
    {
        return view('Akun.signin');
    }

    // Proses pendaftaran nasabah
    public function createSignin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:nasabah,email',
            'password' => 'required|string|min:6',
        ]);

        Nasabah::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login.nasabah')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }

    // Proses login untuk nasabah
    public function submitNasabahLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Login menggunakan guard 'nasabah'
        if (Auth::guard('nasabah')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // Redirect ke dashboard nasabah
            return redirect()->route('dashboard.nasabah');
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // Proses login untuk admin
    public function submitAdminLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Coba login menggunakan guard 'admin'
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // Redirect ke dashboard admin
            return redirect()->route('admin.dashboard');
        }

        // Jika login gagal
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout()
    {
        // Logout pengguna
        Auth::logout();

        // Redirect ke halaman landing
        return redirect('/');
    }

}
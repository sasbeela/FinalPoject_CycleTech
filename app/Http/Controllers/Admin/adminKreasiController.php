<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kreasi;

class adminKreasiController extends Controller
{
    // Menampilkan daftar kreasi
    public function index()
    {
        // Ambil data kreasi dari tabel `kreasis`
        $kreasis = Kreasi::all();

        // Kirim data ke view
        return view('admin.Kreasi.index', compact('kreasis'));
    }

    // Menghapus kreasi berdasarkan ID
    public function destroy($id)
    {
        // Cari kreasi berdasarkan ID
        $kreasi = Kreasi::findOrFail($id);

        // Hapus data dari database
        $kreasi->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('admin.kreasi.index')->with('success', 'Kreasi berhasil dihapus.');
    }
}
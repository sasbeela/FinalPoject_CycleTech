<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminArtikelController extends Controller
{
    public function index()
    {
        $articles = Artikel::latest()->paginate(10);
        return view('Admin.Artikel.index', compact('articles'));
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses upload foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('artikel', 'public');
        }

        // Simpan data artikel ke database
        Artikel::create([
            'judul_artikel' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'foto' => $fotoPath,
        ]);

        // Redirect ke halaman utama artikel dengan pesan sukses
        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('Admin.Artikel.edit', compact('artikel'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $artikel = Artikel::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($artikel->foto) {
                Storage::delete('public/' . $artikel->foto);
            }
            $fotoPath = $request->file('foto')->store('artikel', 'public');
            $artikel->foto = $fotoPath;
        }

        $artikel->update([
            'judul_artikel' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        // Hapus file foto jika ada
        if ($artikel->foto && Storage::exists('public/' . $artikel->foto)) {
            Storage::delete('public/' . $artikel->foto);
        }

        // Hapus artikel dari database
        $artikel->delete();

        return response()->json(['success' => 'Artikel berhasil dihapus']);
    }
}
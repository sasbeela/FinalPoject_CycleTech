<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiSeeder extends Seeder
{
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'Gantungan Kunci dari Botol Plastik Bekas',
            'author' => 'Amanda Manopo',
            'kategori_kreasi' => 'Plastik',
            'foto_kreasi' => 'images/kreasi1.jpg',
            'alat_bahan' => "1. Botol plastik bekas\n2. Gunting\n3. Cat untuk menghias",
            'langkah' => "1. Cuci botol plastik\n2. Potong menjadi bentuk kecil\n3. Tambahkan hiasan",
            'tanggal' => now(),
        ]);
    }
}
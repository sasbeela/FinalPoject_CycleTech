<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiMTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'POT AIR YANG MEMANCARKAN KRISTAL',
            'foto_kreasi' => 'kreasi_images/MT_01.jpg', 
            'kategori_kreasi' => 'Metal',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-10-27',
            'alat_bahan' => "1. Pot air dari kaleng susu\n2. Kristal: Bisa menggunakan kristal gantung lampu, kristal kerajinan, atau kristal akrilik\n3. Kawat floral\n4. Tang mikro\n5. Manik-manik (opsional)",
            'langkah' => "1. Lepaskan rim dari pancuran pot air dengan hati-hati. Pastikan untuk bekerja perlahan, karena bisa jadi rim ini cukup ketat tergantung pada usia pot air.\n2. Masukkan kristal ke dalam seutas kawat, kemudian masukkan ujung kawat ke dalam lubang pancuran pot air.\n3. Dari dalam pancuran, pasang manik-manik di sepanjang kawat (manik-manik ini tidak akan terlihat). Gunakan tang untuk melilitkan dan mengamankan kawat di dalam pancuran.\n4. Pasang kembali rim pancuran dengan merapatkan tepiannya menggunakan tang, agar kawat dan kristal tetap terpasang dengan aman.\n5. Hasil: Pot air yang indah dengan pancuran kristal yang memukau, siap mempercantik taman atau dekorasi luar ruangan Anda! 🌸💧"
        ]);
        

        Kreasi::create([
            'judul_kreasi' => 'BLOK BUNGA DARI PENUTUP BOTOL',
            'foto_kreasi' => 'kreasi_images/MT_02.jpg',
            'kategori_kreasi' => 'Metal',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-10-28',
            'alat_bahan' => "1. Dowel kayu 12 inci\n2. Penutup kaleng\n3. 15 tutup botol kaleng\n4. Pliers\n5. Lem kuat besi",
            'langkah' => "1. Bentuk Petal Bunga: Gunakan pliers untuk membengkokkan 12 tutup botol menjadi dua bagian seperti buku.\n2. Pasang Tutup Botol di Pusat Kaleng: Tempelkan satu tutup botol di tengah penutup kaleng menggunakan lem kuat.\n3. Atur Petal Bunga: Letakkan dua tutup botol 'petal' saling bertolak belakang, dan lakukan hal yang sama pada semua petal, sehingga Anda memiliki 6 pasang petal.\n4. Tempelkan Petal ke Penutup Kaleng: Tempelkan semua 6 pasang petal yang sudah dibengkokkan ke penutup kaleng, mengelilingi tutup botol pusat.\n5. Tambahkan Daun: Tempelkan dua tutup botol di sisi dowel kayu untuk membuat daun.\n6. Biarkan Lem Mengering: Biarkan lem mengering sepenuhnya sebelum memindahkan bunga.\n7. Hasil: Bunga cantik dari tutup botol siap dipajang sebagai dekorasi taman atau pot tanaman! 🌸"
        ]);

        Kreasi::create([
            'judul_kreasi' => 'BURUNG HULU DARI PARUT KEJU',
            'foto_kreasi' => 'kreasi_images/MT_03.jpg',
            'kategori_kreasi' => 'Metal',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-10-29',
            'alat_bahan' => "1. Parutan keju stainless steel 9 inci\n2. 2 tutup Mason jar diameter 2,75 inci\n3. 2 tutup botol logam diameter 1,5 inci\n4. 2 tutup botol bir logam diameter 1 inci\n5. 2 sekrup dengan mur dan baut\n6. Mesin bor dengan mata bor yang sesuai\n7. Kawat tembaga panjang 15 inci\n8. 1 ranting pohon panjang 9 inci\n9. 1 potongan ranting pohon berbentuk segitiga sekitar 1 inci panjang\n10. Lem tembak dengan stik lem bening\n11. Kertas sisa, spidol, dan gunting",
            'langkah' => "1. Membuat Mata Burung Hantu: Gunakan tutup Mason jar untuk mata burung hantu, dengan menumpuk tutup terkecil di atas tutup terbesar.\n2. Membuat Template untuk Lubang: Buat template di kertas untuk menentukan posisi lubang pada tutup jar.\n3. Menandai Posisi Lubang: Tandai posisi lubang dengan spidol dan pindahkan tanda tersebut ke tutup jar.\n4. Membor Lubang: Bor lubang dengan hati-hati pada posisi yang telah ditandai menggunakan mesin bor.\n5. Menyusun Mata Burung Hantu: Ambil satu mata burung hantu, susun tutup jar dari yang terbesar di bawah hingga yang terkecil di atas, sesuaikan posisi lubang yang sudah dibor.\n6. Menempelkan Mata ke Parutan Keju: Pasang mata burung hantu ke parutan keju menggunakan sekrup, mur, dan baut.\n7. Membuat Hidung Burung Hantu: Panaskan lem tembak dan tempelkan potongan kayu berbentuk segitiga sebagai hidung burung hantu tepat di bawah mata.\n8. Membuat Sayap Burung Hantu: Masukkan kawat melalui dua lubang bawah parutan keju dari dalam keluar. Lilitkan kawat pada potongan ranting pohon untuk mengamankan posisi sayap burung hantu.\n9. Penempatan Burung Hantu di Taman: Letakkan burung hantu di taman luar Anda. Seiring waktu, parutan stainless steel akan berkarat, memberikan tampilan yang lebih rustic pada dekorasi ini.\n10. Hasil: Burung hantu unik dari parutan keju siap untuk menghiasi taman Anda! 🦉🌿"
        ]);
    }
}

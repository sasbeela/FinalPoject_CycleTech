<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiPSSeed extends Seeder
{
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'Tiker Plastik Daur Ulang',
            'foto_kreasi' => '',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Muhammad Danu Erlangga',
            'tanggal' => '2024-11-24',
            'alat_bahan' => "1. Kemasan Bekas Bungkus Kopi\n2. Gunting\n3. Penggaris\n4. Lem\n5. Papan Alas",
            'langkah' => "1. Persiapan Strip: Potong kemasan bekas menjadi strip-strip panjang dengan lebar sekitar 2 cm menggunakan gunting. Ukur dengan penggaris agar strip memiliki ukuran yang seragam.\n2. Membuat Strip: Lipat strip-strip tersebut agar menjadi lebih kuat dan tidak mudah robek. Anda dapat melipatnya dua atau tiga kali sesuai ketebalan yang diinginkan.\n3. Mulai Menganyam: Ambil beberapa strip dan mulai anyam secara bergantian satu dengan yang lain, membentuk pola dasar anyaman (biasanya pola kotak-kotak).\n4. Menambahkan Strip: Tambahkan strip-strip baru saat diperlukan, pastikan strip tersebut masuk dengan kencang dan rapi. Teruskan anyaman hingga mencapai ukuran yang diinginkan (misalnya 40x40 cm).\n5. Mengunci Anyaman: Setelah selesai menganyam, kunci ujung-ujung anyaman dengan lem untuk mencegahnya terlepas.\n6. Penyelesaian: Rapihkan sisi-sisi tikar dengan memotong kelebihan strip dan memastikan semua ujung terpasang dengan baik.",
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Tas Plastik Daur Ulang',
            'foto_kreasi' => '',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Ivan Herdianto',
            'tanggal' => '2024-11-20',
            'alat_bahan' => "1. Kemasan Bekas\n2. Gunting\n3. Penggaris\n4. Lem\n5. Papan Alas\n6. Jarum Jahit Besar\n7. Benang Nilon atau Tali Kuat\n8. Bungkus Kopi Bekas\n9. Resleting",
            'langkah' => "1. Persiapan Strip: Potong kemasan bekas menjadi strip-strip panjang dengan lebar sekitar 2 cm menggunakan gunting. Ukur dengan penggaris agar strip memiliki ukuran yang seragam.\n2. Membuat Strip Lebih Kuat: Lipat strip-strip tersebut agar menjadi lebih kuat dan tidak mudah robek. Anda dapat melipatnya dua atau tiga kali sesuai ketebalan yang diinginkan.\n3. Memulai Anyaman: Ambil beberapa strip dan mulai anyam secara bergantian satu dengan yang lain, membentuk pola dasar anyaman (biasanya pola kotak-kotak).\n4. Menambahkan Strip Baru: Tambahkan strip-strip baru saat diperlukan, pastikan strip tersebut masuk dengan kencang dan rapi. Teruskan anyaman hingga mencapai ukuran tas yang diinginkan.\n5. Membentuk Tas: Setelah anyaman dasar selesai, bentuk anyaman tersebut menjadi tas dengan menggabungkan sisi-sisi anyaman menggunakan benang nilon atau tali kuat. Gunakan jarum jahit besar untuk membantu mengikat dan menjahit bagian-bagian tas.\n6. Menyelesaikan Tas: Pastikan semua ujung strip dan sambungan anyaman terikat dengan kuat. Rapikan sisi-sisi tas dengan memotong kelebihan strip dan memastikan semua ujung terpasang dengan baik. Lem ujung-ujung strip untuk mencegahnya terlepas.",
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Daur Ulang Apron',
            'foto_kreasi' => '',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Ilham Hermansyah',
            'tanggal' => '2024-12-10',
            'alat_bahan' => "1. Benang dan Jarum atau mesin jahit\n2. Gunting\n3. Penggaris\n4. Pulpen atau pensil\n5. Papan Alas\n6. Kantong Bekas (misalnya Kantong potting mix dan kantong kopi)\n7. Tali atau pita untuk tali pengikat apron.",
            'langkah' => "1. Persiapan Kantong: Bersihkan kantong bekas yang akan digunakan, potong bagian atas dan bawah kantong sehingga terbuka menjadi lembaran.\n2. Membuat Pola Apron: Gunakan penggaris dan pulpen/pensil untuk menggambar pola apron pada lembaran kantong. Pola apron biasanya berbentuk persegi panjang dengan bagian atas yang lebih sempit untuk leher.\n3. Memotong Pola: Gunting sesuai pola yang telah digambar.\n4. Jahitan Tepi: Lipat dan jahit tepi-tepi apron untuk mencegah sobekan.\n5. Memasang Tali: Pasang tali atau pita pada bagian atas untuk pengikat leher dan pada bagian samping untuk pengikat pinggang.\n6. Penyelesaian: Pastikan semua jahitan kuat dan rapi.",
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Pouch Daur Ulang',
            'foto_kreasi' => '',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Ilham Hermansyah',
            'tanggal' => '2024-11-10',
            'alat_bahan' => "1. Jarum dan benang\n2. Gunting\n3. Penggaris\n4. Pulpen atau pensil\n5. Kancing atau Velcro\n6. Kemasan bekas plastic sachet",
            'langkah' => "1. Persiapan Kemasan: Bersihkan kemasan bekas yang akan digunakan. Potong bagian atas dan bawah kemasan sehingga terbuka menjadi lembaran.\n2. Mengukur dan Menandai: Gunakan penggaris dan pulpen/pensil untuk menggambar pola kantong pada lembaran kemasan sesuai ukuran yang diinginkan.\n3. Memotong Pola: Gunting sesuai dengan pola yang telah digambar.\n4. Membuat Kantong: Lipat lembaran kemasan sesuai dengan pola kantong yang diinginkan. Jahit sisi-sisi kemasan dengan jarum dan benang agar membentuk kantong.\n5. Menambahkan Penutup: Pasang kancing atau velcro pada bagian atas kantong untuk penutup.\n6. Penyelesaian: Pastikan semua jahitan kuat dan rapi. Rapikan sisi-sisi kantong dengan memotong kelebihan kemasan dan memastikan semua ujung terpasang dengan baik.",
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Kotak Pensil',
            'foto_kreasi' => '',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Harry Bonardo',
            'tanggal' => '2024-11-11',
            'alat_bahan' => "1. Jarum dan benang atau mesin jahit\n2. Gunting\n3. Penggaris\n4. Pensil atau kapur kain\n5. Bahan plastik atau kain bekas dengan desain menarik\n6. Resleting",
            'langkah' => "1. Potong Bahan: Potong bahan plastik atau kain bekas sesuai ukuran yang diinginkan untuk membuat pouch.\n2. Pasang Resleting: Letakkan resleting di antara dua potongan bahan dan jahit menggunakan mesin jahit atau tangan.\n3. Jahit Sisi-Sisi: Jahit sisi-sisi bahan untuk membentuk pouch, pastikan resleting berada di bagian atas.\n4. Rapikan Jahitan: Potong sisa benang dan rapikan jahitan.\n5. Pouch Siap Digunakan.",
        ]);
    }
}

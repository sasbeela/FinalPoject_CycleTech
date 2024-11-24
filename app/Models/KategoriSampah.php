<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSampah extends Model
{
    use HasFactory;

    // Jika nama tabel berbeda dari model, tentukan di sini
    protected $table = 'kategori_sampah';

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = ['kategori'];
}

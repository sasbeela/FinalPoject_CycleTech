<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kreasi extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = ['author', 'kategori_kreasi', 'judul_kreasi', 'foto_kreasi'];
}

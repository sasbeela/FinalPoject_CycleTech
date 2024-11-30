<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nasabah extends Authenticatable
{
    use HasFactory;

    protected $table = 'nasabah'; // Pastikan sesuai dengan nama tabel di database

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
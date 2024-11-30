<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kreasi', function (Blueprint $table) {
            $table->id();  // Kolom id, auto increment
            $table->string('author');  // Kolom untuk menyimpan nama author
            $table->string('kategori_kreasi');  // Kolom kategori kreasi
            $table->string('judul_kreasi');  // Kolom untuk menyimpan judul kreasi
            $table->string('foto_kreasi')->nullable();  // Kolom untuk menyimpan foto kreasi, nullable
            $table->timestamps();  // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kreasi');
    }
};

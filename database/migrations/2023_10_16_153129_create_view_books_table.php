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
        Schema::create('view_books', function (Blueprint $table) {
            $table->id();
            $table->string("isbn", 20)->unique();
            $table->string("judul", 100);
            $table->string("idkategori", 20)->unique();
            $table->string("pengarang", 50);
            $table->string("penerbit", 50);
            $table->string("kota_terbit", 50);
            $table->string("editor", 50);
            $table->string("file_gambar");
            $table->integer("stok");
            $table->integer("stok_tersedia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_books');
    }
};

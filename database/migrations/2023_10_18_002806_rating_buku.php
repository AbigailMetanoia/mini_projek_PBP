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
        Schema::create('rating_buku', function (Blueprint $table) {
            $table->id();
            $table->string("isbn", 20);
            $table->string("noktp", 20)->unique();
            $table->integer("skor_rating")->unsigned();
            $table->string("tgl_rating");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_buku');
    }
};

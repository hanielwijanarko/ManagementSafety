<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('p3ks', function (Blueprint $table) {
            $table->id(); // No id
            $table->string('departemen')->comment('Departemen yang bertanggung jawab atas kotak P3K'); // Departemen
            $table->text('isi_kotak_dan_kuantitas')->comment('Daftar isi kotak P3K dan kuantitasnya'); // Isi kotak dan kuantitas
            $table->timestamps();
        });
    }

    /**
     * Balikkan migrasi.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('p3ks');
    }
};
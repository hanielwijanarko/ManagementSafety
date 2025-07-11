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
        Schema::create('apars', function (Blueprint $table) {
            $table->id(); // No id
            $table->string('lokasi')->comment('Lokasi penempatan APAR'); // Lokasi
            $table->date('tanggal_expired')->comment('Tanggal kadaluarsa APAR'); // Tanggal Expired
            $table->decimal('berat', 8, 2)->comment('Berat APAR dalam kg'); // Berat
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
        Schema::dropIfExists('apars');
    }
};
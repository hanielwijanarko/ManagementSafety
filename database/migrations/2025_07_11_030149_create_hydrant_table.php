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
        Schema::create('hydrants', function (Blueprint $table) {
            $table->id(); // No id
            $table->string('lokasi')->comment('Lokasi penempatan hydrant'); // Lokasi
            $table->string('kondisi_hydrant')->comment('Kondisi hydrant (misal: Baik, Perlu Perbaikan)'); // Kondisi hydrant
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
        Schema::dropIfExists('hydrants');
    }
};
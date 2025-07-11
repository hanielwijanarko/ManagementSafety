<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apar extends Model
{
    use HasFactory;

    /**
     * Tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'apars';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lokasi',
        'tanggal_expired',
        'berat',
    ];

    /**
     * Atribut yang harus di-cast ke tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tanggal_expired' => 'date',
    ];
}
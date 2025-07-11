<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P3k extends Model
{
    use HasFactory;

    /**
     * Tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'p3ks';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'departemen',
        'isi_kotak_dan_kuantitas',
    ];
}
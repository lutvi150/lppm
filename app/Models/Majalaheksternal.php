<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majalaheksternal extends Model
{
    protected $table = 'majalaheksternals';

    protected $fillable = [
        'judul',
        'tahun',
        'peneliti',
        'fakultas',
        'kategori',
        'npp',
        'nidn',
        'jabfung',
        'periode',
        'issn',
        'pdf'
    ];
}

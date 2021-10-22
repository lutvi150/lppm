<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'penelitians';

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
        'pdf',
        'issn'
    ];

    
}

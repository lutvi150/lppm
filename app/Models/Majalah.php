<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majalah extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'date',
        'images',
        'tipe',
        'tahun',
        'peneliti',
        'fakultas',
        'kategori',
        'npp',
        'nidn',
        'jabfung',
        'periode',
        'issn'
    ];
}

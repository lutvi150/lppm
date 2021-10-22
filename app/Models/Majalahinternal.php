<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Majalahinternal extends Model
{
    protected $table = 'majalahinternals';

    protected $fillable = [
        'judul',
        'tahun',
        'peneliti',
        'fakultas',
        'kategori',
        'npp',
        'nidn',
        'pdf',
        'jabfung',
        'periode',
        'issn'
    ];
}

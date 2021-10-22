<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prosiding extends Model
{
    use HasFactory;

    protected $table = 'prosiding';
    protected $fillable = [
        'judul',
        'peneliti',
        'kategori',
        'fakultas',
         'npp',
        'nidn',
        'jabfung',
        'periode',
        'issn',
        'pdf'
    ];

}

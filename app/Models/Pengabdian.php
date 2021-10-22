<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengabdian extends Model
{
    protected $table = 'pengabdians';

    protected $fillable = [
        'id',
        'judul',
        'tahun',
        'peneliti',
        'fakultas',
        'kategori',
        'npp',
        'nidn',
        'jabfung',
    ];
}

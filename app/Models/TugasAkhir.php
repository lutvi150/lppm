<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasAkhir extends Model
{
    use HasFactory;

    protected $table = 'tugas_akhir';
    protected $fillable = [
    'judul',
    'nim',
    'nama',
    'wisuda',
    'fakultas',
    'judulindo',
    'juduling',
    'cover',
    'cover',
    'isi',
    'setujuta',
    'sahta',
    'publikasi',
    'asli',
    'jurnal',
    'bab1',
    'bab2',
    'bab3',
    'bab4',
    'bab5',
    'bab6',
    'dapus',
    'pdf'
    ];
}

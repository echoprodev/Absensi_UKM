<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaOrmawa extends Model
{
    use HasFactory;

    protected $table = 'anggota_ormawa';

    protected $fillable = [
        'nama_mahasiswa',
        'jabatan_ormawa',
        'nama_ormawa',
        'status',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi_musik extends Model
{
    use HasFactory;

    protected $table = 'absensi_musik';

    protected $fillable = [
        'anggota_musik',
            'prodi_musik',
            'jabatan_musik',
            'kegiatan_mingguan',
            'keterangan_mingguan',
            'kegiatan_lainnya',
            'keterangan_lainnya',
            'statusabsensi_musik',
    ];
}

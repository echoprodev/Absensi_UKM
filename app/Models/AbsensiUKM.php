<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiUKM extends Model
{
    use HasFactory;

    protected $table = 'absensi_ukm';

    protected $fillable = [
        'nama_anggota',
        'jenis_ormawa',
        'struktur',
        'kegiatan',
        'keterangan_kegiatan',
        'status_absensi',
        'komentar',
    ];
}

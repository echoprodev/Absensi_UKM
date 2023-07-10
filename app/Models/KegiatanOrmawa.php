<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanOrmawa extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_ormawa';

    protected $fillable = [
        'nama_kegiatan', 'ormawa'
    ];
}

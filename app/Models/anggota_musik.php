<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota_musik extends Model
{
    use HasFactory;

    protected $table = 'anggota_musik';

    protected $fillable = [
        'anggota_musik',
        'jabatan_musik',
        'status_musik',
    ];
}

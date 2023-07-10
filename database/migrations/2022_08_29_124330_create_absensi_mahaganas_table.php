<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiMahaganasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_mahagana', function (Blueprint $table) {
            $table->id();
            $table->string('anggota_mahagana');
            $table->string('prodi_mahagana');
            $table->string('jabatan_mahagana');
            $table->string('kegiatan_mingguan');
            $table->string('keterangan_mingguan');
            $table->string('kegiatan_lainnya');
            $table->string('keterangan_lainnya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi_mahagana');
    }
}

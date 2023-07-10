<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiMusiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_musik', function (Blueprint $table) {
            $table->id();
            $table->string('anggota_musik');
            $table->string('prodi_musik');
            $table->string('jabatan_musik');
            $table->string('kegiatan_mingguan');
            $table->string('keterangan_mingguan');
            $table->string('kegiatan_lainnya');
            $table->string('keterangan_lainnya');
            $table->string('statusabsensi_musik');
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
        Schema::dropIfExists('absensi_musik');
    }
}

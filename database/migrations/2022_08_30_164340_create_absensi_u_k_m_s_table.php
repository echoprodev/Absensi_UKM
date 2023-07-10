<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsensiUKMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_UKM', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota');
            $table->string('jenis_ormawa');
            $table->string('struktur');
            $table->string('kegiatan');
            $table->string('keterangan_kegiatan');
            $table->string('komentar')->default('');
            $table->string('status_absensi')->default('Pending');

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
        Schema::dropIfExists('absensi_ukm');
    }
}

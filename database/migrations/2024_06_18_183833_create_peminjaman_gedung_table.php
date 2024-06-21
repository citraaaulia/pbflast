<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanGedungTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman_gedung', function (Blueprint $table) {
            $table->increments('Id_Peminjaman');
            $table->string('NIM', 11);
            $table->unsignedInteger('ID_Gedung');
            $table->string('ID_pegawai', 12);
            $table->dateTime('Tanggal_pinjam');
            $table->dateTime('Tanggal_selesai');
            $table->boolean('Status');
            $table->string('Deskripsi', 255);
            $table->timestamps();

            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
            $table->foreign('ID_Gedung')->references('ID_gedung')->on('gedung');
            $table->foreign('ID_pegawai')->references('ID_pegawai')->on('pegawai');
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman_gedung');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratDisposisiTable extends Migration
{
    public function up()
    {
        Schema::create('surat_disposisi', function (Blueprint $table) {
            $table->increments('ID_suratdisposisi');
            $table->unsignedInteger('ID_Disposisi');
            $table->string('ID_karumahtangga', 12);
            $table->string('ID_pegawai', 12);
            $table->string('nomor_surat', 50);
            $table->string('perihal', 50);
            $table->string('keterangan', 255);
            $table->dateTime('tanggal_surat');
            $table->timestamps();

            $table->foreign('ID_Disposisi')->references('ID_Disposisi')->on('disposisi');
            $table->foreign('ID_karumahtangga')->references('ID_Ka_Rumahtangga')->on('ka_rumahtangga');
            $table->foreign('ID_pegawai')->references('ID_pegawai')->on('pegawai');
        });
    }

    public function down()
    {
        Schema::dropIfExists('surat_disposisi');
    }
}

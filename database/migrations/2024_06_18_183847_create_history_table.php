<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('ID_history');
            $table->string('NIM', 11);
            $table->unsignedInteger('ID_peminjaman');
            $table->unsignedInteger('ID_suratdisposisi');
            $table->unsignedInteger('ID_Disposisi');
            $table->timestamps();

            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
            $table->foreign('ID_peminjaman')->references('Id_Peminjaman')->on('peminjaman_gedung');
            $table->foreign('ID_suratdisposisi')->references('ID_suratdisposisi')->on('surat_disposisi');
            $table->foreign('ID_Disposisi')->references('ID_Disposisi')->on('disposisi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('history');
    }
}

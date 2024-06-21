<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisiTable extends Migration
{
    public function up()
    {
        Schema::create('disposisi', function (Blueprint $table) {
            $table->increments('ID_Disposisi');
            $table->unsignedInteger('ID_Peminjaman');
            $table->string('ID_karumahtangga', 12);
            $table->boolean('status');
            $table->string('catatan', 255);
            $table->dateTime('Tanggal_disposisi');
            $table->timestamps();

            $table->foreign('ID_Peminjaman')->references('Id_Peminjaman')->on('peminjaman_gedung');
            $table->foreign('ID_karumahtangga')->references('ID_Ka_Rumahtangga')->on('ka_rumahtangga');
        });
    }

    public function down()
    {
        Schema::dropIfExists('disposisi');
    }
}

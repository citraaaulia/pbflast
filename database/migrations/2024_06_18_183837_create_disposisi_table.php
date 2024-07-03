<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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

            $table->unsignedInteger('ID_Peminjaman')->references('id')->on('bokings');
            $table->foreign('ID_karumahtangga')->references('ID_Ka_Rumahtangga')->on('ka_rumahtangga');
            $table->dateTime('Tanggal_disposisi')->default(DB::raw('CURRENT_TIMESTAMP'));

        });
    }

    public function down()
    {
        Schema::dropIfExists('disposisi');
    }
}

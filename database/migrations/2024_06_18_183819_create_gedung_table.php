<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGedungTable extends Migration
{
    public function up()
    {
        Schema::create('gedung', function (Blueprint $table) {
            $table->increments('ID_gedung');
            $table->string('Nama_gedung', 50);
            $table->string('Lokasi', 50);
            $table->integer('Kapasitas');
            $table->boolean('status_gedung');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gedung');
    }
}

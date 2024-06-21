<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaRumahtanggaTable extends Migration
{
    public function up()
    {
        Schema::create('ka_rumahtangga', function (Blueprint $table) {
            $table->string('ID_Ka_Rumahtangga', 12)->primary();
            $table->string('Nama_pegawai', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ka_rumahtangga');
    }
}
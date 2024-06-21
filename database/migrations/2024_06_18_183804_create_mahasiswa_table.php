<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('NIM', 11)->primary();
            $table->string('Nama_Mahasiswa', 255);
            $table->string('No_HP', 15);
            $table->string('Email', 255);
            $table->string('Username', 50);
            $table->string('Password', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}

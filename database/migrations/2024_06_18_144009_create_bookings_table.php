<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organization');
            $table->string('activity');
            $table->string('scale');
            $table->date('tanggal_kegiatan')->unique(); // Tanggal kegiatan yang dipilih oleh user
            $table->date('tanggal_peminjaman'); // Tanggal peminjaman, yaitu tanggal saat user mengisi form
            $table->string('ruangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

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
            $table->id('ID_Disposisi');
            $table->unsignedBigInteger('ID_Peminjaman');
            $table->unsignedBigInteger('ID_karumahtangga');
            $table->string('status');
            $table->text('catatan');
            $table->timestamp('tanggal_disposisi');
            $table->timestamps();
    
            $table->foreign('ID_Peminjaman')->references('id')->on('bookings')->onDelete('cascade');
            $table->foreign('ID_karumahtangga')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('disposisi');
    }
}

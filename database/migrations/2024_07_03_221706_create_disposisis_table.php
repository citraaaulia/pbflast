<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->increments('ID_Disposisi');
            $table->unsignedBigInteger('ID_Peminjaman');
            $table->string('ID_karumahtangga', 12);
            $table->enum('status', ['pending', 'ditolak']);
            $table->string('catatan', 255);
            $table->dateTime('Tanggal_disposisi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();

            // Definisikan foreign key sesuai kebutuhan Anda
            $table->foreign('ID_Peminjaman')->references('id')->on('bookings');
            $table->foreign('ID_karumahtangga')->references('ID_Ka_Rumahtangga')->on('ka_rumahtangga');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};

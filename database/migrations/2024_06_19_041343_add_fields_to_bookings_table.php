<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'tanggal_peminjaman')) {
                $table->date('tanggal_peminjaman')->nullable();
            }
            if (!Schema::hasColumn('bookings', 'ruangan')) {
                $table->string('ruangan')->nullable();
            }
            if (!Schema::hasColumn('bookings', 'tanggal_kegiatan')) {
                $table->date('tanggal_kegiatan')->nullable();
            }
            if (!Schema::hasColumn('bookings', 'status')) {
                $table->string('status')->default('diajukan');
            }
        });
    }

    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (Schema::hasColumn('bookings', 'tanggal_peminjaman')) {
                $table->dropColumn('tanggal_peminjaman');
            }
            if (Schema::hasColumn('bookings', 'ruangan')) {
                $table->dropColumn('ruangan');
            }
            if (Schema::hasColumn('bookings', 'tanggal_kegiatan')) {
                $table->dropColumn('tanggal_kegiatan');
            }
            if (Schema::hasColumn('bookings', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
}

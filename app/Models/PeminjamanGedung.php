<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanGedung extends Model
{
    use HasFactory;

    protected $table = 'peminjaman_gedung';
    protected $primaryKey = 'Id_Peminjaman';

    protected $fillable = [
        'NIM', 'ID_Gedung', 'ID_pegawai', 'Tanggal_pinjam', 'Tanggal_selesai', 'Status', 'Deskripsi'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisis'; // Nama tabel di database
    protected $primaryKey = 'ID_Disposisi'; // Primary key dari tabel

    protected $fillable = [
        'ID_Peminjaman',
        'ID_karumahtangga',
        'status',
        'catatan',
        'Tanggal_disposisi'
    ];
}

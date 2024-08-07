<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    use HasFactory;

    protected $table = 'gedung';
    protected $primaryKey = 'ID_gedung';

    protected $fillable = [
        'Nama_gedung', 'Lokasi', 'Kapasitas','foto', 'status_gedung','keterangan'
    ];
}

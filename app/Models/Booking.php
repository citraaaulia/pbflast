<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'organization', 'activity', 'scale', 'tanggal_peminjaman', 'ruangan', 'tanggal_kegiatan', 'status',
    ];
} 

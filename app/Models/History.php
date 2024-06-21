<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'history';
    protected $primaryKey = 'ID_history';

    protected $fillable = [
        'NIM', 'ID_peminjaman', 'ID_suratdisposisi', 'ID_Disposisi'
    ];
}

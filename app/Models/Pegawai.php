<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'ID_pegawai';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_pegawai', 'Nama_pegawai'
    ];
}

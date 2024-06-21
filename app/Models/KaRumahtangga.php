<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaRumahtangga extends Model
{
    use HasFactory;

    protected $table = 'ka_rumahtangga';
    protected $primaryKey = 'ID_Ka_Rumahtangga';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ID_Ka_Rumahtangga', 'Nama_pegawai'
    ];
}

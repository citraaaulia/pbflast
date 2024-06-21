<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratDisposisi extends Model
{
    use HasFactory;

    protected $table = 'surat_disposisi';
    protected $primaryKey = 'ID_suratdisposisi';

    protected $fillable = [
        'ID_Disposisi', 'ID_karumahtangga', 'ID_pegawai', 'nomor_surat', 'perihal', 'keterangan', 'tanggal_surat'
    ];
}

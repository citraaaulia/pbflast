<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function riwayatSemua()
    {
        $riwayatSemua = Disposisi::all();
        $title = "Riwayat Semua Disposisi"; // Judul halaman

        return view('riwayatSemua', compact('riwayatSemua', 'title'));
    }
}

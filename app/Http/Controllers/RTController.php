<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use App\Models\PeminjamanGedung;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function Pengajuan()
    {
        $Pengajuan = Disposisi::where('status', 'pending')->get();
        $title = "List Peminjaman Gedung"; // Judul halaman

        return view('disposisiRT', compact('Pengajuan', 'title'));
    }

}

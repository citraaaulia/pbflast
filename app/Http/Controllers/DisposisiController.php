<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Spatie\Permission\Exceptions\UnauthorizedException;
use App\Models\SuratDisposisi;

class DisposisiController extends Controller
{
    public function riwayatPending()
    {
        $riwayatPending = Disposisi::where('status', 'pending')->get();
        $title = "Riwayat Disposisi Pending"; // Judul halaman

        return view('riwayatDisposisi', compact('riwayatPending', 'title'));
    }

    public function riwayatTolak()
    {
        $riwayatTolak = Disposisi::where('status', 'ditolak')->get();
        $title = "Riwayat Disposisi ditolak"; // Judul halaman

        return view('riwayatDitolak', compact('riwayatTolak', 'title'));
    }
    public function riwayatSelesai()
    {
        $riwayatSelesai = Disposisi::where('status', 'selesai')->get();
        $title = "Riwayat Disposisi Selesai"; // Judul halaman

        return view('riwayatSelesai', compact('riwayatSelesai', 'title'));
    }
    
}

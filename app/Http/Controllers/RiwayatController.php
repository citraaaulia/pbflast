<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Disposisi;

class RiwayatController extends Controller
{
    public function index()
    {
        $diajukan = Booking::where('status', 'diajukan')->get();
        $selesai = Booking::where('status', 'selesai')->get();
        $ditolak = Disposisi::where('status', 'ditolak')->get();
        return view('riwayat', compact('diajukan', 'selesai', 'ditolak'));
    }
}

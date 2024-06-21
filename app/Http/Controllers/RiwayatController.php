<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class RiwayatController extends Controller
{
    public function index()
    {
        $diajukan = Booking::where('status', 'diajukan')->get();
        $selesai = Booking::where('status', 'selesai')->get();
        $ditolak = Booking::where('status', 'ditolak')->get();
        return view('riwayat', compact('diajukan', 'selesai', 'ditolak'));
    }
}

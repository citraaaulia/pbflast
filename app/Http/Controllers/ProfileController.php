<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profil');
    }

    public function showRiwayat()
    {
        $diajukan = Booking::where('status', 'diajukan')->get();
        $selesai = Booking::where('status', 'selesai')->get();
        $ditolak = Booking::where('status', 'ditolak')->get();
        return view('riwayat', compact('diajukan', 'selesai', 'ditolak'));
    }

    public function showBooking()
    {
        return view('booking');
    }
}

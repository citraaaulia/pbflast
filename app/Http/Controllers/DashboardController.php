<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Disposisi;
class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPengajuan = Booking::count();
        $jumlahPengajuanDitolak = Disposisi::where('status', 'ditolak')->count();
        $disposisiDibutuhkan = Booking::where('status', 'disposisi')->count();

        return view('dashboard', compact('jumlahPengajuan', 'jumlahPengajuanDitolak', 'disposisiDibutuhkan'));
    }
}

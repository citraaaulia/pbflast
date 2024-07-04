<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Disposisi;

class diajukanController extends Controller
{
    public function index()
{
    $diajukan = Booking::where('status', 'diajukan')->get(); // Contoh query
    $title = 'Daftar Peminjaman Diajukan'; // Atau judul yang sesuai
    return view('diajukan', compact('diajukan', 'title'));
}
    public function approveBooking(Request $request)
    {
        $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'catatan' => 'required|string',
            'status' => 'required|string|in:pending,ditolak'
        ]);

        Disposisi::create([
            'ID_Peminjaman' => $request->booking_id,
            'ID_karumahtangga' => auth()->user()->id, // Sesuaikan dengan ID pengguna yang melakukan approval
            'status' => $request->status,
            'catatan' => $request->catatan,
            'tanggal_disposisi' => now()
        ]);

        return response()->json(['success' => true]);
    }
}

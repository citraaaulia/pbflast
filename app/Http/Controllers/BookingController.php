<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Validator;
use App\Models\Gedung;
use App\Models\Disposisi;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'organization' => 'required|string|max:255',
            'activity' => 'required|string|max:255',
            'scale' => 'required|string',
            'tanggal_kegiatan' => 'required|date',
            'tanggal_peminjaman' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $booking = new Booking;
        $booking->name = $request->name;
        $booking->organization = $request->organization;
        $booking->activity = $request->activity;
        $booking->scale = $request->scale;
        $booking->tanggal_kegiatan = $request->tanggal_kegiatan;
        $booking->tanggal_peminjaman = $request->tanggal_peminjaman;
        $booking->ruangan = 'Gedung Seminar I'; // Assuming it's static, otherwise add it to the form
        $booking->save();

        return response()->json(['success' => 'Booking berhasil!'], 200);
    }

    public function showRiwayat()
    {
        $diajukan = Booking::where('status', 'diajukan')->get();
        $selesai = Booking::where('status', 'selesai')->get();
        $ditolak = Disposisi::where('status', 'ditolak')->get();
        return view('riwayat', compact('diajukan', 'selesai', 'ditolak'));
    }

    public function showProfil()
    {
        return view('profil');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return response()->json(['success' => 'Booking deleted successfully']);
    }

    public function show($id)
    {
        $gedung = Gedung::findOrFail($id); // Mengambil gedung berdasarkan ID, sesuaikan dengan model dan kondisi yang sesuai
        return view('booking.show', compact('gedung'));
    }
    

}

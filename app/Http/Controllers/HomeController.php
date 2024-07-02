<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
     public function index(Request $request)
     {
         // Mengambil semua data gedung dari database
         $daftarGedung = Gedung::all();
         
         // Query untuk pencarian gedung
         $query = Gedung::query();
 
         // Jika ada pencarian berdasarkan ID gedung
         if ($request->has('nama_gedung') && $request->nama_gedung != 'all') {
             $namaGedung = $request->nama_gedung;
             $query->where('ID_gedung', $namaGedung);
         }
 
         // Ambil hasil query
         $gedungs = $query->get();
 
         // Load view home.blade.php dengan data gedung yang sudah difilter
         return view('home', compact('daftarGedung', 'gedungs'));
     }
}

<?php

namespace App\Http\Controllers;

use App\Models\Disposisi;
use Illuminate\Http\Request;
use App\Models\SuratDisposisi;
use Illuminate\Support\Facades\Log;
use Dompdf\Dompdf;
use Dompdf\Options;

class SuratController extends Controller
{
    public function create()
    {
        return view('surat.create');
    }

    public function Pengajuan()
    {
        $Pengajuan = Disposisi::where('status', 'pending')->get();
        $title = "List Peminjaman Gedung"; // Judul halaman

        return view('disposisiRT', compact('Pengajuan', 'title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ID_Disposisi' => 'required',
            'ID_karumahtangga' => 'required',
            'nomor_surat' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'tanggal_surat' => 'required|date',
        ]);

        // Simpan data ke dalam database
        $suratDisposisi = SuratDisposisi::create($validated);

        // Ubah status disposisi menjadi "selesai"
        $disposisi = Disposisi::findOrFail($validated['ID_Disposisi']);
        $disposisi->status = 'selesai';
        $disposisi->save();

        // Redirect atau lanjutkan ke proses generate PDF
        return redirect()->route('surat.disposisi.generate', ['id' => $suratDisposisi->ID_suratdisposisi]);
    }

    public function generateSuratDisposisiPDF($id)
    {
        $suratDisposisi = SuratDisposisi::findOrFail($id);

        // Create PDF instance (Dompdf)
        $pdf = new Dompdf();

        // Load HTML view for the PDF content (gunakan view 'pdf.surat_disposisi')
        $html = view('pdf.surat_disposisi', compact('suratDisposisi'))->render();

        // Load HTML content ke Dompdf
        $pdf->loadHtml($html);

        // Render PDF (output to browser)
        $pdf->render();

        // Download PDF dengan nama file berdasarkan nomor surat
        return $pdf->stream('surat_disposisi_' . $suratDisposisi->nomor_surat . '.pdf');
    }
}

<?php

use App\Http\Controllers\diajukanController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\selesaiController;
use App\Http\Controllers\tolakController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiwayatController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::group(['prefix'=> 'tatausaha', 'middleware' => ['auth', 'role:tatausaha']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/RiwayatDisposisi', [DisposisiController::class, 'riwayatPending'])->name('riwayat.pending');
    Route::get('/RiwayatDitolak', [DisposisiController::class, 'riwayatTolak'])->name('riwayat.ditolak');
    Route::get('/RiwayatSelesai', [DisposisiController::class, 'riwayatSelesai'])->name('riwayat.selesai');
});

Route::group(['prefix'=> 'rumahtangga', 'middleware' => ['auth', 'role:rumahtangga']], function () {
    Route::get('/disposisiRT', [SuratController::class, 'Pengajuan'])->name('peminjaman.gedung');
    Route::post('/surat-disposisi/store', [SuratController::class, 'store'])->name('surat.disposisi.store');
    Route::get('/surat-disposisi/generate/{id}', [SuratController::class, 'generateSuratDisposisiPDF'])->name('surat.disposisi.generate');
    Route::get('surat/create', [SuratController::class, 'create'])->name('surat.create');
    Route::get('/profile', [ProfileController::class, 'show']);
});

// routes/web.php

Route::get('/diajukan', [diajukanController::class, 'index']);

Route::get('/selesai', [selesaiController::class, 'selesai']);

Route::get('/tolak', [tolakController::class, 'tolak']);


//Ana
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::get('/profil', [ProfileController::class, 'index'])->name('profil');
Route::get('/riwayat', [ProfileController::class, 'showRiwayat'])->name('riwayat.show');
Route::get('/booking', [ProfileController::class, 'showBooking'])->name('booking.show');
Route::get('/riwayat', [BookingController::class, 'showRiwayat'])->name('riwayat.show');
Route::get('/profil', [BookingController::class, 'showProfil'])->name('profil.show');
Route::delete('/booking/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');

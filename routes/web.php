<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\CariJadwalController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\TabelAssetController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\TabelPengajuanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashboardController::class])->name('dashboard');

Route::middleware('auth')->name('data.')->group(function() {
    Route::resource('asset', AssetController::class)->except('show');
    Route::resource('unit', UnitController::class)->except('show');
});

Route::resource('pengajuan', PengajuanController::class);
Route::resource('peminjaman', PeminjamanController::class)->except('show');

Route::resource('verifikasi', VerifikasiController::class)->except('show');

// Route::get('/jadwal', [CariJadwalController::class, 'index']);
// Route::get('/minjam', [PeminjamanController::class, 'index']);
// Route::get('/verif', [VerifikasiController::class, 'index']);
// Route::get('/track', [TrackingController::class, 'index']);










Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

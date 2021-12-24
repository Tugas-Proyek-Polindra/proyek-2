<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\K_AkunController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelolaKainController;
use App\Http\Controllers\KelolaProdukController;
use App\Http\Controllers\KelolaOrderanController;
use App\Http\Controllers\PelayananProdukController;

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\BuktiPembayaranController;

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
    return view('home');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact_us', [DashboardController::class, 'contact_us'])->name('contact_us');



// Fitur Penjual
Route::group(['middleware' => 'penjual'], function () {
    Route::get('/kelola_akun', [K_AkunController::class, 'index']);
    Route::get('/laporan', [LaporanController::class, 'index']);
});

Route::resource('/produk/pelayanan', PelayananProdukController::class)->middleware('auth');
Route::resource('/produk/kelola_kain', KelolaKainController::class)->middleware('auth');
Route::resource('/produk/kelola_orderan', KelolaOrderanController::class)->middleware('auth');
Route::resource('/produk', KelolaProdukController::class)->middleware('auth');
Route::get('/buktibayar', [BuktiPembayaranController::class, 'bukti_bayar'])->name('bukti_bayar')->middleware('auth');
Route::get('/pemesanan/invoice', [PemesananController::class, 'invoice'])->name('invoice')->middleware('admin');
Route::get('/pemesanan/invoice/update', [PemesananController::class, 'update'])->name('update')->middleware('admin');



//Pelanggan
Route::resource('/pemesanan', PemesananController::class)->middleware('auth');
Route::resource('/pelanggan-buktibayar', BuktiPembayaranController::class)->middleware('auth');
Route::get('/pelanggan', [DashboardController::class, 'pelanggan'])->name('pelanggan')->middleware('pelanggan');

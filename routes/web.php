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


use App\Http\Controllers\InvoicePemesananController;
use App\Http\Controllers\PemesananController;

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
Route::resource('/invoice-pesanan', InvoicePesananController::class)->middleware('auth'); //blum ada model
Route::resource('/bukti-bayar', BuktiBayarController::class)->middleware('auth'); //blum ada model


Route::resource('/pemesanan', PemesananController::class)->middleware('auth');
Route::resource('/pelanggan-invoice', InvoicePemesananController::class)->middleware('auth');
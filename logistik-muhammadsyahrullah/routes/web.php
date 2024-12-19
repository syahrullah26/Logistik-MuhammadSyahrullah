<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\CreateInputController;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing_page.index');
Route::get('/history',[LandingPageController::class, 'history'])->name('landing_page.history');
Route::post('/input-catatan/store',[CreateInputController::class,'store']);


Route::get('/barang-masuk', [BarangMasukController::class, 'index']);
Route::get('/barang-masuk/create', [BarangMasukController::class, 'create']);
Route::post('/barang-masuk/store', [BarangMasukController::class, 'store']);

Route::get('/barang-keluar', [BarangKeluarController::class, 'index']);
Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create']);
Route::post('/barang-keluar/store', [BarangKeluarController::class, 'store']);

Route::get('/stok-barang', [StokBarangController::class, 'index'])->name('stok-barang.index');


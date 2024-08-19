<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\Komoditascontroller;
use App\Http\Controllers\LaporanController;


Route::get('/', function () {
    return view('index');
});

//produksi
// Route::get('/produksi/{komoditas}', [ProduksiController::class, 'index']);
Route::get('/produksi', [ProduksiController::class, 'index']);
Route::get('/produksi/detail/{id}', [ProduksiController::class, 'detail']);
Route::get('/produksi/tambahkpro', [Produksicontroller::class, 'create']);
Route::post('/produksi/saveproduksi', [Produksicontroller::class, 'store']);
Route::get('/produksi/edit/{id}', [Produksicontroller::class, 'edit']);
Route::put('/produksi/update/{id}', [Produksicontroller::class, 'update']);
Route::get('/produksi/delete/{id}', [produksicontroller::class, 'destroy']);


//komuditas
Route::get('/komoditas', [KomoditasController::class, 'index']);
Route::get('/komoditas/detail/{id}', [KomoditasController::class, 'detail']);
Route::get('/komoditas/tambahkomo', [Komoditascontroller::class, 'create']);
Route::post('/komoditas/savekomoditas', [Komoditascontroller::class, 'store']);
Route::get('/komoditas/edit/{id}', [Komoditascontroller::class, 'edit']);
Route::put('/komoditas/update/{id}', [KomoditasController::class, 'update']);
Route::get('/komoditas/delete/{id}', [komoditascontroller::class, 'destroy']);

//laporan
Route::get('/laporan', [LaporanController::class, 'index']);

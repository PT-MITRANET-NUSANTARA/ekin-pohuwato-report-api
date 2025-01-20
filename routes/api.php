<?php

use App\Http\Controllers\Ekin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/perjanjian_kinerja', [Ekin::class, 'perjanjianKinerja']);
Route::post('/evaluasi_kinerja', [Ekin::class, 'evaluasiKinerja']);
Route::post('/matriks_peran_hasil', [Ekin::class, 'matriksPeranHasil']);
Route::post('/hasil_skp', [Ekin::class, 'hasilSkp']);
Route::post('/form_penilaian', [Ekin::class, 'formPenilaian']);
Route::post('/rencana_skp', [Ekin::class, 'rencanaSkp']);
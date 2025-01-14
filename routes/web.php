<?php

use App\Http\Controllers\Ekin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perjanjian_kinerja', [Ekin::class, 'perjanjianKinerja']);
Route::get('/evaluasi_kinerja', [Ekin::class, 'evaluasiKinerja']);
Route::get('/matriks_peran_hasil', [Ekin::class, 'matriksPeranHasil']);
Route::get('/hasil_skp', [Ekin::class, 'hasilSkp']);
Route::get('/form_penilaian', [Ekin::class, 'formPenilaian']);
Route::get('/rencana_skp', [Ekin::class, 'rencanaSkp']);

<?php

use App\Http\Controllers\Ekin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perjanjian_kinerja', [Ekin::class, 'perjanjianKinerja']);
Route::get('/evaluasi_kinerja', [Ekin::class, 'evaluasiKinerja']);

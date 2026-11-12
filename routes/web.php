<?php

use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::resource('pegawai', PegawaiController::class); 
    return view('welcome');


Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->name('pegawai.store');
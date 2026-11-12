<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', function () {
    return view('pegawai.index', ['title' => 'Employee Data Page']);
});

Route::get('/pegawai/create', function () {
    return view('pegawai.create', ['title' => 'Employee Data Addition Page']);
});
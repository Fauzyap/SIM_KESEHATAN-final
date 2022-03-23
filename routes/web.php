<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
});

Route::get('/siswa', function () {
    return view('admin.content.view');
});

Route::get('/form', function () {
    return view('admin.content.form');
});

Route::get('/edit_siswa', function () {
    return view('admin.content.edit_siswa');
});

Route::get('/input_sakit', function () {
    return view('admin.content.input_sakit');
});

Route::get('/hitung_imt', function () {
    return view('admin.content.hitung_imt');
});

Route::get('/edit_sakit', function () {
    return view('admin.content.edit_sakit');
});

Route::get('/tambah_sakit', function () {
    return view('admin.content.tambah_sakit');
});

Route::get('/tambah_imt', function () {
    return view('admin.content.tambah_imt');
});

Route::get('/laporan', function () {
    return view('admin.content.laporan');
});

Route::get('/dashboard_siswa', function () {
    return view('siswa.dashboard');
});

Route::get('/siswa_imt', function () {
    return view('siswa.content.tambah_imt');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\xController;

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

Route::resource('admin', ReadingController::class);
Route::resource('siswa', SiswaController::class);



Route::get('/adminsiswa', function () {
    return view('admin.content.view');
});

Route::get('/Xexport', 'App\Http\Controllers\xController@Xexport')->name('Xexport');
Route::post('/Ximport', 'App\Http\Controllers\xController@Ximport')->name('Ximport');
Route::get('/siswaX', 'App\Http\Controllers\xController@index');

Route::get('/siswaXI', function () {
    return view('admin.content.dataXI');
});
Route::get('/siswaXII', function () {
    return view('admin.content.dataXII');
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

Route::get('/siswa_imt', function () {
    return view('siswa.content.tambah_imt');
});


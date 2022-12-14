<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\xController;
use App\Http\Controllers\xiController;
use App\Http\Controllers\xiiController;

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
Route::get('/Xiexport', 'App\Http\Controllers\xiController@Xiexport')->name('Xiexport');
Route::get('/Xiiexport', 'App\Http\Controllers\xiiController@Xexport')->name('Xiiexport');
Route::post('/Ximport', 'App\Http\Controllers\xController@Ximport')->name('Ximport');
Route::post('/XiImport', 'App\Http\Controllers\xiController@XiImport')->name('XiImport');
Route::post('/XiiImport', 'App\Http\Controllers\xiiController@XiiImport')->name('XiiImport');
Route::get('/siswaX', 'App\Http\Controllers\xController@index');
Route::post('/siswaX', 'App\Http\Controllers\xController@destroy');
Route::get('/siswaXI', 'App\Http\Controllers\xiController@index');
Route::get('/siswaXII', 'App\Http\Controllers\xiiController@index');


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


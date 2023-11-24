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
Route::middleware('auth:Administrator')->group(function () {
     // berita-acara
     Route::prefix('berita-acara')->group(function () {
        // list-dosen
        Route::get('/index', 'BeritaAcaraController@index')->name('berita-acara.index');
        Route::get('/create', 'BeritaAcaraController@create')->name('berita-acara.create');
        Route::get('/detail/{id}', 'BeritaAcaraController@detail')->name('berita-acara.detail');
        Route::get('/create-detail/{id}', 'BeritaAcaraController@createDetail')->name('berita-acara.create-detail');
        Route::get('/editdetail/{id}', 'BeritaAcaraController@editdetail')->name('berita-acara.editdetail');
        Route::post('/store', 'BeritaAcaraController@store')->name('berita-acara.store');
        Route::post('/store-detail/{id}', 'BeritaAcaraController@storeDetail')->name('berita-acara.store-detail');
        Route::post('/update-detail/{id}', 'BeritaAcaraController@updateDetail')->name('berita-acara.update-detail');
        Route::delete('/destroy/{id}', 'BeritaAcaraController@hapusDetail')->name('berita-acara.destroy');

    });

      // berita-acara formal dan non formal
      Route::prefix('berita-acara-formal-non')->group(function () {
        Route::get('/index', 'BeritaAcaraFormalNonController@index')->name('berita-acara-formal-non.index');
        Route::get('/create', 'BeritaAcaraFormalNonController@create')->name('berita-acara-formal-non.create');
        Route::get('/detail/{id}', 'BeritaAcaraFormalNonController@detail')->name('berita-acara-formal-non.detail');
        Route::get('/create-detail/{id}', 'BeritaAcaraFormalNonController@createDetail')->name('berita-acara-formal-non.create-detail');
        Route::get('/editdetail/{id}', 'BeritaAcaraFormalNonController@editdetail')->name('berita-acara-formal-non.editdetail');
        Route::post('/store', 'BeritaAcaraFormalNonController@store')->name('berita-acara-formal-non.store');
        Route::post('/store-detail/{id}', 'BeritaAcaraFormalNonController@storeDetail')->name('berita-acara-formal-non.store-detail');
        Route::post('/update-detail/{id}', 'BeritaAcaraFormalNonController@updateDetail')->name('berita-acara-formal-non.update-detail');
        Route::delete('/destroy/{id}', 'BeritaAcaraFormalNonController@hapusDetail')->name('berita-acara-formal-non.destroy');

    });

     // berita-acara uas dan uts
     Route::prefix('berita-acara-uts-uas')->group(function () {
        Route::get('/index', 'BeritaAcaraUasUtsController@index')->name('berita-acara-uts-uas.index');
        Route::get('/create', 'BeritaAcaraUasUtsController@create')->name('berita-acara-uts-uas.create');
        Route::get('/detail/{id}', 'BeritaAcaraUasUtsController@detail')->name('berita-acara-uts-uas.detail');
        Route::get('/create-detail/{id}', 'BeritaAcaraUasUtsController@createDetail')->name('berita-acara-uts-uas.create-detail');
        Route::get('/editdetail/{id}', 'BeritaAcaraUasUtsController@editdetail')->name('berita-acara-uts-uas.editdetail');
        Route::post('/store', 'BeritaAcaraUasUtsController@store')->name('berita-acara-uts-uas.store');
        Route::post('/store-detail/{id}', 'BeritaAcaraUasUtsController@storeDetail')->name('berita-acara-uts-uas.store-detail');
        Route::post('/update-detail/{id}', 'BeritaAcaraUasUtsController@updateDetail')->name('berita-acara-uts-uas.update-detail');
        Route::delete('/destroy/{id}', 'BeritaAcaraUasUtsController@hapusDetail')->name('berita-acara-uts-uas.destroy');

    });

     // berita-acara skripsi dan kp
     Route::prefix('berita-acara-kp-skripsi')->group(function () {
        Route::get('/index', 'BeritaAcaraKpSkirpsiController@index')->name('berita-acara-kp-skripsi.index');
        Route::get('/create', 'BeritaAcaraKpSkirpsiController@create')->name('berita-acara-kp-skripsi.create');
        Route::get('/detail/{id}', 'BeritaAcaraKpSkirpsiController@detail')->name('berita-acara-kp-skripsi.detail');
        Route::get('/create-detail/{id}', 'BeritaAcaraKpSkirpsiController@createDetail')->name('berita-acara-kp-skripsi.create-detail');
        Route::get('/editdetail/{id}', 'BeritaAcaraKpSkirpsiController@editdetail')->name('berita-acara-kp-skripsi.editdetail');
        Route::post('/store', 'BeritaAcaraKpSkirpsiController@store')->name('berita-acara-kp-skripsi.store');
        Route::post('/store-detail/{id}', 'BeritaAcaraKpSkirpsiController@storeDetail')->name('berita-acara-kp-skripsi.store-detail');
        Route::post('/update-detail/{id}', 'BeritaAcaraKpSkirpsiController@updateDetail')->name('berita-acara-kp-skripsi.update-detail');
        Route::delete('/destroy/{id}', 'BeritaAcaraKpSkirpsiController@hapusDetail')->name('berita-acara-kp-skripsi.destroy');

    });
    



    Route::resource('mahasiswa', 'MahasiswaController');
    Route::resource('dosen', 'DosenController');
    Route::resource('matkul', 'MatkulController');
    Route::resource('fakultas', 'FakultasController');
    Route::resource('gedung', 'GedungController');
    Route::resource('ruangan', 'RuanganController');
    Route::resource('prodi', 'ProdiController');
    
    Route::resource('schedule', 'ScheduleController');
    Route::get('/schedule/{id}/create', 'ScheduleController@create');
    
    Route::resource('ta', 'TahunAkademikController');
    Route::post('/activeTa/{id}', 'TahunAkademikController@activeTa');
    
    Route::resource('kelas', 'KelasController');
    Route::get('kelas/{id}/add', 'KelasController@addMahasiswa');
    Route::post('/storeMahasiswa', 'KelasController@storeMahasiswa');
    Route::post('/deleteMahasiswa/{id}', 'KelasController@deleteMahasiswa');

    Route::get('/', 'HomeController@dashboard')->name('dashboard');

   




});

Route::middleware('auth:mahasiswa')->group(function () {
    Route::resource('krs', 'KrsController');
    Route::get('/mahasiswas','HomeController@mahasiswa');
    Route::get('/absens','HomeController@absen');
    Route::get('/nilais','HomeController@nilai');
    Route::get('nilai/{id}/print', 'NilaiController@print')->name('nilai.print');
});

Route::middleware('auth:dosen')->group(function () {
    Route::get('/dosens','HomeController@dosen');
    Route::get('/list-dosen', 'BeritaAcaraController@listDosen')->name('berita-acara.list-dosen');
    Route::get('/show-ba/{id}', 'BeritaAcaraController@showBa')->name('berita-acara.show-ba');
    Route::resource('nilai', 'NilaiController');
    Route::get('/list-nilai','NilaiController@list')->name('nilai.list');
    Route::get('nilai/{id}/cetak', 'NilaiController@cetakDosen')->name('nilai.cetakDosen');

    Route::resource('absen', 'AbsenController');
    Route::get('/list-absen','AbsenController@list')->name('absen.list');
    Route::get('absen/{id}/cetak', 'AbsenController@cetak')->name('absen.cetak');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login2', 'AuthController@postlogin')->name('login2');
Route::post('/logout', 'AuthController@logout')->name('logout');



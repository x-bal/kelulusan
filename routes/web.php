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
    return view('auth.login');
});
Route::get('/', 'AuthController@index')->name('login');
Route::post('login', 'AuthController@login');
Route::get('/siswa/download/{siswa:id}', 'SiswaController@print')->name('siswa.print');

Route::middleware('auth')->group(function () {
    // Route Logout
    Route::post('/logout', 'AuthController@logout');

    // Route Dashboard
    Route::get('/profile', 'DashboardController@profile')->name('profile');
    Route::post('/updateProfile/{user:id}', 'DashboardController@update')->name('profile.update');

    // Route Siswa
    Route::get('/siswa/get/{siswa:id}', 'SiswaController@get')->name('siswa.get');
    Route::post('/siswa/status/{siswa:id}', 'SiswaController@status')->name('siswa.status');

    // Route Home
    Route::get('/home', 'DashboardController@home')->name('home');
    Route::middleware('admin')->group(function () {
        // Route Admin
        Route::resource('admin', 'AdminController');

        // Route Guru
        Route::resource('guru', 'GuruController');

        // Route Siswa
        Route::post('/siswa/import', 'SiswaController@import')->name('siswa.import');
        Route::post('/siswa/export', 'SiswaController@export')->name('siswa.export');
        Route::resource('siswa', 'SiswaController');

        // Route Surat Kelulusan
        Route::post('/surat/status', 'SuratController@status')->name('surat.status');
        Route::resource('surat', 'SuratController');

        // Route Setting
        Route::get('/setting/get/{setting:id}', 'SettingController@get');
        Route::post('/setting/status/{setting:id}', 'SettingController@status');
        Route::resource('setting', 'SettingController');

        Route::post('/download/{download:id}', 'DownloadController@status');
    });

    Route::middleware('notsiswa')->group(function () {
        // Route Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

        // Route Nilai
        Route::get('/nilai/input/{id}', 'NilaiController@input')->name('nilai.input');
        Route::get('/nilai/export', 'NilaiController@export')->name('nilai.export');
        Route::post('/nilai/import', 'NilaiController@import')->name('nilai.import');
        Route::post('/nilai/insert/{id}', 'NilaiController@insert')->name('nilai.insert');
        Route::resource('nilai', 'NilaiController');
    });
});

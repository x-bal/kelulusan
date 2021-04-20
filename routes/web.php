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

Route::middleware('auth')->group(function () {
    // Route Logout
    Route::post('/logout', 'AuthController@logout');

    // Route Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // Route Home
    Route::get('/home', 'DashboardController@home')->name('home');

    // Route Admin
    Route::resource('admin', 'AdminController');

    // Route Guru
    Route::resource('guru', 'GuruController');

    // Route Siswa
    Route::get('/siswa/get/{siswa:id}', 'SiswaController@get')->name('siswa.get');
    Route::get('/siswa/print/{siswa:id}', 'SiswaController@print')->name('siswa.print');
    Route::post('/siswa/import', 'SiswaController@import')->name('siswa.import');
    Route::post('/siswa/status/{siswa:id}', 'SiswaController@status')->name('siswa.status');
    Route::resource('siswa', 'SiswaController');

    // Route Nilai
    Route::get('/nilai/input/{id}', 'NilaiController@input')->name('nilai.input');
    Route::post('/nilai/insert/{id}', 'NilaiController@insert')->name('nilai.insert');
    Route::resource('nilai', 'NilaiController');

    // Route Surat Kelulusan
    Route::resource('surat', 'SuratController');

    // Route Ssetting
    Route::get('/setting/get/{setting:id}', 'SettingController@get');
    Route::post('/setting/status/{setting:id}', 'SettingController@status');
    Route::resource('setting', 'SettingController');
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\PengadaanController;


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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
})->name('login');


Route::get('/pengadaan-modul', function () {
    return view('create-pengadaan-modul');
});

Route::get('/berkas-pengadaan', function () {
    return view('berkas-pengadaan');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Fitur Timeline
Route::get('/timeline', [TimelineController::class, 'index']);
Route::get('/list-timeline', [TimelineController::class, 'index2']);
Route::get('/create-timeline', [TimelineController::class, 'create']);
Route::post('/list-timeline', [TimelineController::class, 'insert']);
Route::post('/timeline', [TimelineController::class, 'insert']);
Route::delete('/list-timeline/{id}', [TimelineController::class, 'destroy']);

// Fitur Update Deadline
Route::get('/update-timeline', function () {
    return view('update-timeline');
});

// Fitur Pengadaan Modul Ajar
Route::get('/riwayat', [PengadaanController::class, 'index']);
Route::get('/detail-matkul', [PengadaanController::class, 'indexDetail']);
Route::get('/pengadaan-modul', [PengadaanController::class, 'create']);
Route::post('/riwayat', [PengadaanController::class, 'insert']);

Route::group(['middleware' => ['auth', 'roleChecker:10']], function () {
    
    // Fitur Kelola Akun
    Route::get('/super-admin-kelola-akun', [UserController::class, 'index']);
    Route::delete('/super-admin-kelola-akun/{id}', [UserController::class, 'destroy']);

    // Fitur Daftar Dosen
    Route::get('/super-admin-daftar-dosen', [DosenController::class, 'index']);
    Route::get('/super-admin-create-dosen', [DosenController::class, 'create']);
    Route::post('/super-admin-daftar-dosen', [DosenController::class, 'insert']);

    // Route::get('/super-admin-daftar-dosen/{id}/edit',[DosenController::class, 'edit']);
    // Route::put('/super-admin-daftar-dosen/{id}',[DosenController::class, 'update']);
    Route::delete('/super-admin-daftar-dosen/{id}', [DosenController::class, 'destroy']);
});

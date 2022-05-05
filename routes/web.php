<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;

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
})->name('login');

//Super Admin
Route::get('/super-admin-create', function () {
    return view('super-admin-create');
});

// Route::get('/super-admin-kelola-akun', function () {
//     return view('super-admin-kelola-akun');
// });

Route::get('/super-admin-update', function () {
    return view('super-admin-update');
});

Route::get('/riwayat', function () {
    return view('riwayat-pengadaan-modul');
});

Route::get('/pengadaan-modul', function () {
    return view('create-pengadaan-modul');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/super-admin-daftar-dosen', function () {
    return view('super-admin-daftar-dosen');
});

//LoginUP2Ai

Route::get('/detail-d3it', function () {
    return view('detail-d3it');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Fitur Kelola Akun
Route::get('/super-admin-kelola-akun', [UserController::class, 'index']);
Route::delete('/super-admin-kelola-akun/{id}',[UserController::class, 'destroy']);

// Fitur Daftar Dosen
Route::get('/super-admin-daftar-dosen', [DosenController::class, 'index']);
Route::get('/super-admin-create-dosen', [DosenController::class, 'create']);
Route::post('/super-admin-daftar-dosen', [DosenController::class, 'insert']);
<<<<<<< HEAD

Route::get('/detail-Matkul', function () {
    return view('detail-Matkul');
});
=======
// Route::get('/super-admin-daftar-dosen/{id}/edit',[DosenController::class, 'edit']);
// Route::put('/super-admin-daftar-dosen/{id}',[DosenController::class, 'update']);
Route::delete('/super-admin-daftar-dosen/{id}',[DosenController::class, 'destroy']);

// Fitur Update Deadline
Route::get('/update-timeline', function () {
    return view('update-timeline');
});
>>>>>>> 7f2fa9bad6f350f634dc678285106a462d9f4607

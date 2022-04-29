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

Route::get('/super-admin-daftar-dosen', function () {
    return view('super-admin-daftar-dosen');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Fitur Kelola Akun
Route::get('/super-admin-kelola-akun', [UserController::class, 'index']);

// Fitur Daftar Dosen
Route::get('/super-admin-daftar-dosen', [DosenController::class, 'index']);
Route::get('/super-admin-create-dosen', [DosenController::class, 'create']);
Route::post('/super-admin-daftar-dosen', [DosenController::class, 'insert']);
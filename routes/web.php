<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountDosenController;

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

Route::get('/super-admin-kelola-akun', [AccountDosenController::class, 'index']);
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

//Super Admin
Route::get('/super-admin-create', function () {
    return view('super-admin-create');
});

Route::get('/super-admin-kelola-akun', function () {
    return view('super-admin-kelola-akun');
});

Route::get('/super-admin-update', function () {
    return view('super-admin-update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use App\Http\Controllers\ApprovalPengadaanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\KuotaController;


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
    return view('auth.landingpage');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/pengadaan-modul', function () {
    return view('create-pengadaan-modul');
});

Route::get('/berkas-pengadaan', function () {
    return view('berkas-pengadaan');
});

Route::get('/home-tim-pengusul', function () {
    return view('home-tim-pengusul');
});

Route::get('/ajukan-pengadaan', function () {
    return view('ajukan-pengadaan');
});

Route::get('/timeline-view', function () {
    return view('timeline-view');
});

// Route::get('/riwayat-pengusul', function () {
//     return view('riwayat-tim-pengusul');
// });

Route::get('/dokumen-pengusul', function () {
    return view('tim-pengusul.dokumen-pengusul');
});

Route::get('/detail-view', function () {
    return view('detail-view-pengusul');
});

Route::get('/detail-matkul-pengusul', function () {
    return view('detail-matkul-pengusul');
});

Route::get('/home-reviewer', function () {
    return view('tim-reviewer/home-reviewer');
});

Route::get('/detail-reviewer', function () {
    return view('tim-reviewer/detail-reviewer');
});

Route::get('/catatan-reviewer', function () {
    return view('tim-reviewer/catatan-reviewer');
});

Route::get('/timeline-reviewer', function () {
    return view('tim-reviewer/timeline-viewer');
});

//kaprodi
Route::get('/home-kaprodi', function () {
    return view('kaprodi/home-kaprodi');
});

Route::get('/pengadaan-kaprodi', function () {
    return view('kaprodi/pengadaan-kaprodi');
});

Route::get('/detail-pengadaan', function () {
    return view('kaprodi/detail-pengadaan-kaprodi');
});

Route::get('/approval-kaprodi', function () {
    return view('kaprodi/approval-kaprodi');
});

Route::get('/daftar-tim-pengusul', function () {
    return view('kaprodi/daftar-tim-pengusul');
});


Route::get('/daftar-tim-reviewer', function () {
    return view('kaprodi/daftar-tim-reviewer');
});

Route::get('/tambah-tim-pengusul', function () {
    return view('kaprodi/tambah-tim-pengusul');
});

Route::get('/tambah-tim-reviewer', function () {
    return view('kaprodi/tambah-tim-reviewer');
});

Route::get('/detail-tim-pengusul', function () {
    return view('kaprodi/detail-tim-pengusul');
});

Route::get('/detail-tim-reviewer', function () {
    return view('kaprodi/detail-tim-reviewer');
});

Route::get('/detail-kaprodi', function () {
    return view('kaprodi/detail-kaprodi');
});

Route::get('/edit-tim-pengusul', function () {
    return view('kaprodi/edit-tim-pengusul');
});

Route::get('/edit-tim-reviewer', function () {
    return view('kaprodi/edit-tim-reviewer');
});

Route::get('/timeline-kaprodi', function () {
    return view('kaprodi/timeline-kaprodi');
});

Route::get('/detail-matakuliah-pengadaan', function () {
    return view('kaprodi/detail-matakuliah-pengadaan');
});

Route::get('/list-pengadaan', function () {
    return view('kaprodi/list-pengadaan');
});

Route::get('/under-maintain', function () {
    return view('maintainpage');
});

Route::middleware('auth')->group(function () {
    // Route Home For Every Role
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // Fitur Timeline
    Route::get('/timeline', [TimelineController::class, 'index']);
    Route::get('/list-timeline', [TimelineController::class, 'index2']);
    Route::get('/create-timeline', [TimelineController::class, 'create']);
    Route::post('/list-timeline', [TimelineController::class, 'insert']);
    Route::get('/list-timeline/{id}/edit',[TimelineController::class, 'edit']);
    Route::put('/list-timeline/{id}',[TimelineController::class, 'update']);
    Route::post('/timeline', [TimelineController::class, 'insert']);
    Route::delete('/list-timeline/{id}', [TimelineController::class, 'destroy']);

    // Fitur set kuota
    Route::get('/set/kuota', [KuotaController::class, 'create']);
    Route::get('/getProdi/{id}', [KuotaController::class, 'getProdi']);
    Route::post('/set/kuota', [KuotaController::class, 'insert']);

    // Fitur Pengadaan Modul Ajar
    Route::get('/riwayat', [PengadaanController::class, 'index']);
    Route::get('/detail/pengadaan/{id}', [PengadaanController::class, 'indexDetail']);
    Route::get('/pengajuan-modul', [PengadaanController::class, 'create']);
    Route::get('/getProdi/{id}', [PengadaanController::class, 'getProdi']);
    Route::post('/riwayat', [PengadaanController::class, 'insert'])->name('insert');

    // Fitur Approval Pengadaan Modul Ajar
    Route::post('/jawab-pengadaan', [ApprovalPengadaanController::class, 'answer']);

    // Fitur Dokumen
    Route::get('/dokumen', function () {
        return view('berkas-pengadaan');
    });

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
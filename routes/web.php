<?php

use App\Http\Controllers\ApprovalPengadaanController;
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

Route::get('/dokumen', function () {
    return view('kaprodi/dokumen');
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


Route::middleware('auth')->group(function () {
    // Route Home For Every Role
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home/pengusul', [App\Http\Controllers\HomeController::class, 'homepengusul'])->name('homepengusul');
    Route::get('/home/reviewer', [App\Http\Controllers\HomeController::class, 'homereviewer'])->name('homereviewer');
    Route::get('/home/up2ai', [App\Http\Controllers\HomeController::class, 'homeup2ai'])->name('homeup2ai');
    Route::get('/home/kaprodi', [App\Http\Controllers\HomeController::class, 'homekaprodi'])->name('homekaprodi');



    // List Halaman Menu Tiap Role User
    Route::get('/selectrole', function () {
        return view('roles-menu.timpengusul');
    });


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
    Route::get('/detail/pengadaan/{id}', [PengadaanController::class, 'indexDetail']);
    Route::get('/pengajuan-modul', [PengadaanController::class, 'create']);
    Route::get('/getProdi/{id}', [PengadaanController::class, 'getProdi']);
    Route::post('/riwayat', [PengadaanController::class, 'insert']);

    // Fitur Approval Pengadaan Modul Ajar
    Route::post('/jawab-pengadaan', [ApprovalPengadaanController::class, 'answer']);

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

    //Tim Pengusul
    // Route::get('/', function () {
    //     $akademik = App\Models\Akademik::all();
    //     return view('tim-pengusul.create-pengadaan-modul',['akademik' => $akademik]);
    // });

    // Route::get('/pengajuan-modul/getProdi/{id}', function ($id) {
    //     $prodi = App\Models\Prodi::where('id_akademik',$id)->get();
    //     return response()->json($prodi);
    // });
});
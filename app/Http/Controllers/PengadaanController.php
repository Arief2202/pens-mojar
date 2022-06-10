<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Modul;
use Illuminate\Http\Request;
use App\Models\Pengadaan;

class PengadaanController extends Controller
{
    public function index()
    {
        $dataPengadaan= Pengadaan::paginate(5);
        return view('riwayat-pengadaan-modul', compact(['dataPengadaan']));
    }

    public function indexDetail()
    {
        $dataPengadaan= Pengadaan::paginate(5);
        return view('detail-matkul', compact(['dataPengadaan']));
    }

    public function create()
    {
        $matkul = Matkul::all();
        $modul = Modul::all();
        $dosen = Dosen::all();
        return view('create-pengadaan-modul', compact('modul', 'matkul', 'dosen'));
    }

    public function insert(Request $request)
    {
        Pengadaan::create($request->all());
        return redirect('riwayat');
    }
}

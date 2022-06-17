<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use App\Models\Prodi;
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
        // $dataPengadaan= Pengadaan::with('prodi')->get();
        // dd($dataPengadaan);
        return view('riwayat-pengadaan-modul', compact(['dataPengadaan']));
    }

    public function indexDetail($id)
    {
        $pengadaan= Pengadaan::findOrFail($id);
        // dd($pengadaan->approval);
        return view('detail-pengadaan', compact(['pengadaan']));
    }

    public function create()
    {
        $matkul = Matkul::all();
        $modul = Modul::all();
        $dosen = Dosen::all();
        $akademik = Akademik::all();
        return view('create-pengadaan-modul', compact('modul', 'matkul', 'dosen', 'akademik'));
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        Pengadaan::create($request->all());
        return redirect('riwayat');
    }

    public function getProdi($id)
    {
        $prodi = Prodi::where('id_akademik',$id)->get();
        return response()->json($prodi);
    }

    public function getMatkul($id)
    {
        $matkul = Matkul::where('id_prodi',$id)->get();
        return response()->json($matkul);
    }
}

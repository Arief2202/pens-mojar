<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use App\Models\Kuota;
use App\Models\Prodi;
use Illuminate\Http\Request;

class KuotaController extends Controller
{

    public function create()
    {
        $kuota = Kuota::all();
        $akademik = Akademik::all();
        return view('set-kuota-prodi', compact('kuota', 'akademik'));
    }


    public function insert(Request $request)
    {
        // dd($request);
        Kuota::create($request->all());
        return redirect()->back()->with('message', 'Alokasi Kuota Berhasil');
    }

    public function getProdi($id)
    {
        $prodi = Prodi::where('id_akademik',$id)->get();
        return response()->json($prodi);
    }
}

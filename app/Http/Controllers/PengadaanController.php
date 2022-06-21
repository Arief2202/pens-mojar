<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Modul;
use Illuminate\Http\Request;
use App\Models\Pengadaan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PengadaanController extends Controller
{
    public function index()
    {
        $dataPengadaan= Pengadaan::with(['approvals', 'approvals.user.role'])->get();
        // $dataPengadaan= Pengadaan::with('prodi')->get();
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
           
        $file = $request->file('path_proposal');
        
		$nama_file = time()."_".$file->getClientOriginalName();
        
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'proposal';
		$file->move($tujuan_upload,$nama_file);
 
		Pengadaan::create([
            'id_pengusul'   => $request->id_pengusul,
            'id_matkul'     => $request->id_matkul,
            'id_modul'      => $request->id_modul,
            'id_dosen'      => $request->id_dosen,
            'id_prodi'      => $request->id_prodi,
			'path_proposal' => $nama_file,
            'status'        => $request->status,
		]);

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

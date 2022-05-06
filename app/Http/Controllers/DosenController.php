<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Matkul;

class DosenController extends Controller
{
    public function index()
    {
        $dataDosen = Dosen::paginate(5);
        return view('super-admin-daftar-dosen', compact(['dataDosen']));
    }

    public function create()
    {
        $prodi = Prodi::all();
        $matkul = Matkul::all();
        return view('create-dosen', compact('prodi', 'matkul'));
    }

    public function insert(Request $request)
    {
        Dosen::create($request->all());
        return redirect('super-admin-daftar-dosen');
    }

    // public function edit($id)
    // {
    //     $dataDosen = Dosen::find($id);
    //     return view('edit-dosen', compact(['dataDosen']));
    // }

    // public function update(Request $request, $id)
    // {
    //     $dataDosen = Dosen::find($id);
    //     $dataDosen->update($request->all());
    //     return redirect('/super-admin-daftar-dosen');
    // }

    public function destroy(Dosen $dataDosen)
    {
        Dosen::destroy($dataDosen->id);
        // $dataDosen->delete();
        return redirect('/super-admin-daftar-dosen')->with('success', 
        'Data telah dihapus.');

    }


}

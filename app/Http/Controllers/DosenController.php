<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Prodi;

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
        return view('create-dosen', compact('prodi'));
    }

    public function insert(Request $request)
    {
        Dosen::create($request->all());
        return redirect('super-admin-daftar-dosen');
    }

    public function edit($id)
    {
        $dataDosen = Dosen::find($id);
        return view('places.edit', compact(['place']));
    }

    public function update(Request $request, $id)
    {
        $dataDosen = Dosen::find($id);
        $dataDosen->update($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        $dataDosen = Dosen::find($id);
        $dataDosen->delete();
        return redirect('/')->with('success', 
        'Data telah dihapus.');

    }


}

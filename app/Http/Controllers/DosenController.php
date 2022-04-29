<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dataDosen = Dosen::paginate(5);
        return view('super-admin-daftar-dosen', compact(['dataDosen']));
    }

    public function create()
    {
        return view('create-dosen');
    }

    public function insert(Request $request)
    {
        Dosen::create($request->all());
        return redirect('super-admin-daftar-dosen');
    }
}

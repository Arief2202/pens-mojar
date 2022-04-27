<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dataDosen = Dosen::all();
        return view('super-admin-daftar-dosen', compact(['dataDosen']));
    }
}

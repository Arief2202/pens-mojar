<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riwayatpengusul extends Controller
{
    public function index()
    {
        return view('riwayat-rim-pengusul');
    }
}

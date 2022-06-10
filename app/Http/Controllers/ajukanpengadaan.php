<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ajukanpengadaan extends Controller
{
    public function index()
    {
        return view('home-tim-pengusul');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dokumenpengusul extends Controller
{
    public function index()
    {
        return view('dokumen-pengusul');
    }
}

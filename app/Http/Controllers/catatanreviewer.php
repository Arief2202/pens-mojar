<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catatanreviewer extends Controller
{
    public function index()
    {
        return view('catatan-reviewer');
    }
}

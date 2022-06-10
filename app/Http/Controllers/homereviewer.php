<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homereviewer extends Controller
{
    public function index()
    {
        return view('home-reviewer');
    }
}

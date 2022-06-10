<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timelineview extends Controller
{
    public function index()
    {
        return view('timeline-view');
    }
}

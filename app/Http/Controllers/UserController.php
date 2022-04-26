<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Read()
    {
        $data = User::all();
        return view('super-admin-kelola-akun', compact(['data']));
    }
    
}

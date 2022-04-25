<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Read()
    {
        $data = Users::all();
        return view('super-admin-kelola-akun', compact(['data']));
    }
    
}

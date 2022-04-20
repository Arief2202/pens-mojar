<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountDosen;

class AccountDosenController extends Controller
{
    public function index()
    {
        $data_akun = AccountDosen::all();
        return view('super-admin-kelola-akun', compact(['data_akun']));
    }
}

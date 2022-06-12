<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('superadmin.super-admin-kelola-akun', compact(['data']));
    }
    
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('superadmin.super-admin-kelola-akun')->with('success', 
        'Data telah dihapus.');

    }
}

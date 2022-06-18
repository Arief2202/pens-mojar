<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prodis = Pengadaan::with('prodi:id_prodi,nama')->groupBy('id_prodi')->get();
        $datas = [];

        foreach ($prodis as $key => $value) {
            $teori_count = Pengadaan::where('id_prodi', $value->id_prodi)->where('id_modul', 1)->count();
            $praktikum_count = Pengadaan::where('id_prodi', $value->id_prodi)->where('id_modul', 2)->count();
            $interaktif_count = Pengadaan::where('id_prodi', $value->id_prodi)->where('id_modul', 3)->count();
            
            $datas[$key] = [
                'nama_prodi' => $value->prodi->nama,
                'data' => [
                    'teori' => $teori_count,
                    'praktikum' => $praktikum_count,
                    'interaktif' => $interaktif_count,
                ],
            ];
        }
        
        return view('home', [
            'datas' => $datas
        ]);
    }

    public function homepengusul()
    {
        return view('tim-pengusul.home-tim-pengusul');
    }
    
    public function homereviewer()
    {
        return view('tim-reviewer.home-reviewer');
    }

    public function homekaprodi()
    {
        return view('kaprodi.home-kaprodi');
    }

    public function homeup2ai()
    {
        return view('home');
    }

    public function adminHome()
    {
        return redirect('/super-admin-kelola-akun');
    }
}

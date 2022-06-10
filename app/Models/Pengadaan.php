<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    protected $table = "pengadaan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_matkul', 'id_modul', 'id_dosen', 'kuota'];

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id_matkul', 'id_matkul');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class,'id_dosen', 'id_dosen');
    }

    public function modul()
    {
        return $this->belongsTo(Modul::class,'id_modul', 'id_modul');
    }
}

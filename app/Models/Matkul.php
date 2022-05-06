<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = "mata_kuliah";
    protected $primaryKey = "id_matkul";
    protected $fillable = ['id_matkul', 'kode_matkul', 'nama'];

    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }

    public function pengadaan()
    {
        return $this->hasMany(Pengadaan::class);
    }
}

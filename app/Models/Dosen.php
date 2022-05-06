<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    // protected $primaryKey = "id_dosen";
    protected $fillable = ['id', 'nidn', 'nama', 'id_prodi', 'id_matkul'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id_prodi');
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id_matkul', 'id_matkul');
    }

    public function pengadaan()
    {
        return $this->hasMany(Pengadaan::class);
    }
}

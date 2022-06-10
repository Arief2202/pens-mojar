<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = "modul_ajar";
    // protected $primaryKey = "id";
    protected $fillable = ['id_modul', 'jenis_modul'];

    public function pengadaan()
    {
        return $this->hasMany(Pengadaan::class);
    }
}

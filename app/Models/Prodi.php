<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodi";
    protected $primaryKey = "id_prodi";
    protected $fillable = ['id_prodi', 'nama'];

    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }

    public function akademik()
    {
        return $this->belongsTo(Akademik::class, 'id_akademik', 'id');
    }
}

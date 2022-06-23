<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuota extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class,'id_prodi', 'id_prodi');
    }
}

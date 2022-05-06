<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    protected $table = "timeline";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'tgl_awal', 'tgl_akhir', 'judul', 'deskripsi'];
}

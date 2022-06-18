<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Pengadaan extends Model
{
    protected $table = "pengadaan";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'id_matkul', 'id_modul', 'id_dosen', 'id_prodi', 'kuota'];

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

    public function prodi()
    {
        return $this->belongsTo(Prodi::class,'id_prodi', 'id_prodi');
    }

    /**
     * Get the approval associated with the Pengadaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function approval()
    {
        return $this->hasOne(ApprovalPengadaan::class)->where('user_id', Auth::id());
    }

    /**
     * Get all of the approvals for the Pengadaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvals()
    {
        return $this->hasMany(ApprovalPengadaan::class);
    }

    /**
     * Get the user that owns the Pengadaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_pengusul', 'id');
    }
    
}

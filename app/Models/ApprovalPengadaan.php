<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalPengadaan extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the pengadaan that owns the ApprovalPengadaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengadaan()
    {
        return $this->belongsTo(Pengadaan::class);
    }

}

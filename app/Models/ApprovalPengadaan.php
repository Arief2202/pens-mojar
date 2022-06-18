<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
        return $this->belongsTo(Pengadaan::class)->where('user_id', Auth::id());
    }

    /**
     * Get the user that owns the ApprovalPengadaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

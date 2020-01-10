<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surats';

    public function RT()
    {
        return $this->belongsTo(RT::class, 'rt_id');
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'user_id');
    }
}

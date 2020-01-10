<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface;

class RT extends Model
{
    protected $table = 'r_t_s';
    protected $fillable = [
        'userRT_id', 'nama_rt', 'nama_lengkap', 'tempat_lahir',
        'tanggal_lahir', 'alamat', 'no_hp', 'email', 'password'
    ];


    public function userRT()
    {
        return $this->belongsTo(UserRT::class, 'userRT_id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'rt_id');
    }

    public function warga()
    {
        return $this->hasMany(Warga::class, 'rt_id');
    }

    public function surat()
    {
        return $this->hasMany(Surat::class, 'rt_id');
    }
}

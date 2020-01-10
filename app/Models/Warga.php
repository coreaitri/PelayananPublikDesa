<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'wargas';
    protected $fillable = [
        'rt_id', 'user_id', 'no_kk', 'nama_lengkap', 'nik', 'jenis_kelamin', 'tempat_lahir',
        'tanggal_lahir', 'agama', 'pendidikan_terakhir', 'jenis_pekerjaan', 'status_perkawinan', 'alamat',
    ];


    public function RT()
    {
        return $this->belongsTo(RT::class, 'rt_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function surat()
    {
        return $this->hasMany(Surat::class, 'user_id');
    }
}

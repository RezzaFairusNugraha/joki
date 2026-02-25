<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiswaSekolah extends Model
{
    protected $table = 'siswa_sekolah';
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;

    public function kelas()
    {
        return $this->belongsTo(KelasSekolah::class, 'id_kelas', 'id_kelas');
    }

    public function nilai()
    {
        return $this->hasMany(NilaiSiswa::class, 'id_siswa', 'id_siswa');
    }
}

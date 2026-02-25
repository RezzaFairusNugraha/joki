<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model
{
    protected $table = 'nilai_siswa';
    protected $primaryKey = 'id_nilai';
    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsTo(SiswaSekolah::class, 'id_siswa', 'id_siswa');
    }

    public function mapel()
    {
        return $this->belongsTo(MataPelajaranSekolah::class, 'id_mapel', 'id_mapel');
    }
}

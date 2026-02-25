<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaranSekolah extends Model
{
    protected $table = 'mata_pelajaran_sekolah';
    protected $primaryKey = 'id_mapel';
    public $timestamps = false;

    public function mapelDiampu()
    {
        return $this->hasMany(MapelDiampuKelas::class, 'id_mapel', 'id_mapel');
    }

    public function nilai()
    {
        return $this->hasMany(NilaiSiswa::class, 'id_mapel', 'id_mapel');
    }
}

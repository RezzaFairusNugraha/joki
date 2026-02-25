<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapelDiampuKelas extends Model
{
    protected $table = 'mapel_diampu_kelas';
    protected $primaryKey = 'id_ampu';
    public $timestamps = false;

    public function guru()
    {
        return $this->belongsTo(GuruSekolah::class, 'id_guru', 'id_guru');
    }

    public function kelas()
    {
        return $this->belongsTo(KelasSekolah::class, 'id_kelas', 'id_kelas');
    }

    public function mapel()
    {
        return $this->belongsTo(MataPelajaranSekolah::class, 'id_mapel', 'id_mapel');
    }
}

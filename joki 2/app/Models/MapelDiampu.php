<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapelDiampu extends Model
{
    protected $table = 'Mapel_Diampu';
    protected $primaryKey = 'id_ampu';
    public $timestamps = false;

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id_guru');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel', 'id_mapel');
    }
}

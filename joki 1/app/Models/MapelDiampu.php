<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Mapel_Diampu
class MapelDiampu extends Model
{
    protected $table = 'Mapel_Diampu';
    protected $primaryKey = 'id_ampu';
    public $timestamps = false;

    // Relasi ke Guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id_guru');
    }

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }

    // Relasi ke Mata Pelajaran
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel', 'id_mapel');
    }
}

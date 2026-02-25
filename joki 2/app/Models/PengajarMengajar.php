<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for pengajar_mengajar
class PengajarMengajar extends Model
{
    protected $table = 'pengajar_mengajar';
    protected $primaryKey = 'mengajar_id';
    public $timestamps = false;

    // Relasi ke Pengajar
    public function pengajar()
    {
        return $this->belongsTo(DataPengajar::class, 'pengajar_id', 'pengajar_id');
    }

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->belongsTo(DataKelas::class, 'kelas_id', 'kelas_id');
    }

    // Relasi ke Mata Ajar
    public function mataAjar()
    {
        return $this->belongsTo(MataAjar::class, 'mapel_id', 'mapel_id');
    }
}

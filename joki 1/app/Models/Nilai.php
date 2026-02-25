<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Nilai
class Nilai extends Model
{
    protected $table = 'Nilai';
    protected $primaryKey = 'id_nilai';
    public $timestamps = false;

    // Relasi ke Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id_siswa');
    }

    // Relasi ke Mata Pelajaran
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mapel', 'id_mapel');
    }
}

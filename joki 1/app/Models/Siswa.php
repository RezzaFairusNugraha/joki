<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Siswa
class Siswa extends Model
{
    protected $table = 'Siswa';
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;

    // Relasi ke Kelas (Siswa milik suatu kelas)
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id_kelas');
    }

    // Relasi ke Nilai (Siswa punya banyak nilai)
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_siswa', 'id_siswa');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasSekolah extends Model
{
    protected $table = 'kelas_sekolah';
    protected $primaryKey = 'id_kelas';
    public $timestamps = false; // Karena manual SQL tanpa timestamps

    public function siswa()
    {
        return $this->hasMany(SiswaSekolah::class, 'id_kelas', 'id_kelas');
    }
}

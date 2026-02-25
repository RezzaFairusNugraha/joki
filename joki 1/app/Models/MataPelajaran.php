<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Mata_Pelajaran
class MataPelajaran extends Model
{
    protected $table = 'Mata_Pelajaran'; // Sesuai nama tabel di SQL
    protected $primaryKey = 'id_mapel';
    public $timestamps = false;

    // Relasi ke Mapel Diampu
    public function mapelDiampu()
    {
        return $this->hasMany(MapelDiampu::class, 'id_mapel', 'id_mapel');
    }

    // Relasi ke Nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_mapel', 'id_mapel');
    }
}

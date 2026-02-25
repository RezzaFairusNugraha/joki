<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $table = 'Mata_Pelajaran';
    protected $primaryKey = 'id_mapel';
    public $timestamps = false;

    public function mapelDiampu()
    {
        return $this->hasMany(MapelDiampu::class, 'id_mapel', 'id_mapel');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_mapel', 'id_mapel');
    }
}

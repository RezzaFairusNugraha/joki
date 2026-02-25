<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for data_kelas
class DataKelas extends Model
{
    protected $table = 'data_kelas';
    protected $primaryKey = 'kelas_id';
    public $timestamps = false;

    // Relasi ke Murid
    public function murid()
    {
        return $this->hasMany(DataMurid::class, 'kelas_id', 'kelas_id');
    }
}

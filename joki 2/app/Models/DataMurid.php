<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for data_murid
class DataMurid extends Model
{
    protected $table = 'data_murid';
    protected $primaryKey = 'murid_id';
    public $timestamps = false;

    // Relasi ke Kelas
    public function kelas()
    {
        return $this->belongsTo(DataKelas::class, 'kelas_id', 'kelas_id');
    }

    // Relasi ke Nilai
    public function nilai()
    {
        return $this->hasMany(RekapNilai::class, 'murid_id', 'murid_id');
    }
}

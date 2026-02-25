<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for rekap_nilai
class RekapNilai extends Model
{
    protected $table = 'rekap_nilai';
    protected $primaryKey = 'nilai_id';
    public $timestamps = false;

    // Relasi ke Murid
    public function murid()
    {
        return $this->belongsTo(DataMurid::class, 'murid_id', 'murid_id');
    }

    // Relasi ke Mata Ajar
    public function mataAjar()
    {
        return $this->belongsTo(MataAjar::class, 'mapel_id', 'mapel_id');
    }
}

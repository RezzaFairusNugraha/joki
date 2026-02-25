<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for mata_ajar
class MataAjar extends Model
{
    protected $table = 'mata_ajar';
    protected $primaryKey = 'mapel_id';
    public $timestamps = false;

    // Relasi ke Pengajar Mengajar
    public function pengajarMengajar()
    {
        return $this->hasMany(PengajarMengajar::class, 'mapel_id', 'mapel_id');
    }

    // Relasi ke Nilai
    public function nilai()
    {
        return $this->hasMany(RekapNilai::class, 'mapel_id', 'mapel_id');
    }
}

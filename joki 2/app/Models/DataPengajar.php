<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for data_pengajar
class DataPengajar extends Model
{
    protected $table = 'data_pengajar';
    protected $primaryKey = 'pengajar_id';
    public $timestamps = false;

    // Relasi ke Pengajar Mengajar
    public function mengampu()
    {
        return $this->hasMany(PengajarMengajar::class, 'pengajar_id', 'pengajar_id');
    }

    // Relasi ke Info Sekolah (Berita)
    public function berita()
    {
        return $this->hasMany(InfoSekolah::class, 'pengajar_id', 'pengajar_id');
    }
}

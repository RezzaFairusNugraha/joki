<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model for info_sekolah
class InfoSekolah extends Model
{
    protected $table = 'info_sekolah';
    protected $primaryKey = 'berita_id';
    public $timestamps = false;

    // Relasi ke Pengajar
    public function pengajar()
    {
        return $this->belongsTo(DataPengajar::class, 'pengajar_id', 'pengajar_id');
    }
}

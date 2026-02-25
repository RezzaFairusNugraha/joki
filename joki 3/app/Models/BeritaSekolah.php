<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeritaSekolah extends Model
{
    protected $table = 'berita_sekolah';
    protected $primaryKey = 'id_berita';
    public $timestamps = false;

    public function guru()
    {
        return $this->belongsTo(GuruSekolah::class, 'id_guru', 'id_guru');
    }
}

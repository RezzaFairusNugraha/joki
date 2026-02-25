<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruSekolah extends Model
{
    protected $table = 'guru_sekolah';
    protected $primaryKey = 'id_guru';
    public $timestamps = false;

    public function mapelDiampu()
    {
        return $this->hasMany(MapelDiampuKelas::class, 'id_guru', 'id_guru');
    }

    public function berita()
    {
        return $this->hasMany(BeritaSekolah::class, 'id_guru', 'id_guru');
    }
}

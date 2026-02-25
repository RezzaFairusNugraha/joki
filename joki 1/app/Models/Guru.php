<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Guru
class Guru extends Model
{
    protected $table = 'Guru';
    protected $primaryKey = 'id_guru';
    public $timestamps = false;

    // Relasi ke Mapel Diampu (Guru mengampu banyak mapel)
    public function mapelDiampu()
    {
        return $this->hasMany(MapelDiampu::class, 'id_guru', 'id_guru');
    }

    // Relasi ke Berita (Guru menulis berita)
    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_guru', 'id_guru');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Berita
class Berita extends Model
{
    protected $table = 'Berita';
    protected $primaryKey = 'id_berita';
    public $timestamps = false;

    // Relasi ke Guru (Pemerintah/Pembuat berita adalah guru)
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru', 'id_guru');
    }
}

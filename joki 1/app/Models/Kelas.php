<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Model untuk tabel Kelas
class Kelas extends Model
{
    // Nama tabel manual karena tidak jamak (plural)
    protected $table = 'Kelas';

    // Primary key manual
    protected $primaryKey = 'id_kelas';

    // Matikan timestamps (created_at & updated_at) sesuai permintaan
    public $timestamps = false;

    // Relasi ke Siswa (Satu kelas punya banyak siswa)
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'id_kelas', 'id_kelas');
    }
}

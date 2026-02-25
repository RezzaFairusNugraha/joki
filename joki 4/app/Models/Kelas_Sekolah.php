<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_Sekolah extends Model
{
    use HasFactory;

    protected $table = 'Kelas_Sekolah';
    protected $primaryKey = 'id_kelas';
    public $timestamps = false;
    protected $fillable = ['jurusan_kelas', 'nama_kelas'];

    public function murids()
    {
        return $this->hasMany(Murid::class, 'id_kelas');
    }

    public function pengajars()
    {
        return $this->hasMany(Pengajar::class, 'id_kelas');
    }
}

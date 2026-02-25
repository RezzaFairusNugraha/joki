<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'Pelajaran';
    protected $primaryKey = 'id_pelajaran';
    public $timestamps = false;
    protected $fillable = ['nama_pelajaran', 'tipe'];

    public function mengajars()
    {
        return $this->hasMany(Mengajar::class, 'id_pelajaran');
    }

    public function nilai_siswas()
    {
        return $this->hasMany(Nilai_Siswa::class, 'id_pelajaran');
    }
}

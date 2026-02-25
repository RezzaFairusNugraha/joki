<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'Murid';
    protected $primaryKey = 'id_murid';
    public $timestamps = false;
    protected $fillable = [
        'id_kelas',
        'nis',
        'nama',
        'jk',
        'alamat',
        'no_telp',
        'tgl_lahir'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas_Sekolah::class, 'id_kelas');
    }

    public function nilai_siswas()
    {
        return $this->hasMany(Nilai_Siswa::class, 'id_murid');
    }
}

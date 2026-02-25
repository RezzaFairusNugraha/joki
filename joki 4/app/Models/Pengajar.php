<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $table = 'Pengajar';
    protected $primaryKey = 'id_pengajar';
    public $timestamps = false;
    protected $fillable = [
        'nip',
        'nama',
        'jk',
        'email',
        'no_telp',
        'id_kelas'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas_Sekolah::class, 'id_kelas');
    }

    public function mengajars()
    {
        return $this->hasMany(Mengajar::class, 'id_pengajar');
    }

    public function pengumumans()
    {
        return $this->hasMany(Pengumuman::class, 'id_pengajar');
    }
}

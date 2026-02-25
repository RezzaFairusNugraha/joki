<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    use HasFactory;

    protected $table = 'Mengajar';
    protected $primaryKey = 'id_mengajar';
    public $timestamps = false;
    protected $fillable = ['id_pengajar', 'id_kelas', 'id_pelajaran'];

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'id_pengajar');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas_Sekolah::class, 'id_kelas');
    }

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai_Siswa extends Model
{
    use HasFactory;

    protected $table = 'Nilai_Siswa';
    protected $primaryKey = 'id_nilai_siswa';
    public $timestamps = false;
    protected $fillable = [
        'id_murid',
        'id_pelajaran',
        'nilai_uts',
        'nilai_uas',
        'nilai_akhir'
    ];

    public function murid()
    {
        return $this->belongsTo(Murid::class, 'id_murid');
    }

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class, 'id_pelajaran');
    }
}

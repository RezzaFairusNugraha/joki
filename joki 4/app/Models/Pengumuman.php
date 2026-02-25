<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'Pengumuman';
    protected $primaryKey = 'id_pengumuman';
    public $timestamps = false;
    protected $fillable = [
        'id_pengajar',
        'judul',
        'isi',
        'tanggal'
    ];

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'id_pengajar');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'Guru';
    protected $primaryKey = 'id_guru';
    public $timestamps = false;

    public function mapelDiampu()
    {
        return $this->hasMany(MapelDiampu::class, 'id_guru', 'id_guru');
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_guru', 'id_guru');
    }
}

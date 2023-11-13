<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perlengkapan extends Model
{
    use HasFactory;
    protected $table = "perlengkapan";
    protected $primaryKey = "id_perlengkapan";
    protected $guarded = ['id_perlengkapan'];

    //RELATION MOBIL
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id_mobil');
    }

    //RELATION PEMERIKSAAN
    public function laporan_pemeriksaan()
    {
        return $this->hasMany(LaporanPemeriksaan::class,'id_pemeriksaan','id_pemeriksaan');
    }
}

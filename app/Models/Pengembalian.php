<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $guarded = ['id_pengembalian'];
    
    //RELATION PENYEWAAN
    public function penyewaan()
    {
        return $this->hasOne(Penyewaan::class, 'id_penyewaan', 'id_penyewaan');
    }

    //RELATION LAPORAN PEMERIKSAAN
    public function laporan_pemeriksaan()
    {
        return $this->belongsTo(LaporanPemeriksaan::class, 'id_pemeriksaan', 'id_pemeriksaan');
    }
}

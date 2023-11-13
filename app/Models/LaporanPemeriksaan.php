<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'laporan_pemeriksaan';
    protected $primaryKey = 'id_pemeriksaan';
    protected $guarded = ['id_pemeriksaan'];
    public $timestamps = true;

    //RELATION PERLENGKAPAN
    public function perlengkapan()
    {
        return $this->belongsTo(Perlengkapan::class, 'id_perlengkapan', 'id_perlengkapan');
    }

    //RELATION PENGEMBALIAN
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class,'id_pengembalian', 'id_pengembalian');
    }
}

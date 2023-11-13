<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    use HasFactory;
    protected $table = 'penyewaan';
    protected $primaryKey = 'id_penyewaan';
    protected $guarded = ['id_penyewaan'];

    //RELATION PENGEMBALIAN
    public function pengembalian()
    {
        return $this->belongsTo(Pengembalian::class, 'id_pengembalian', 'id_pengembalian');
    }

    //RELATION PELANGGAN
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class,'id_pelanggan', 'id_pelanggan');
    }

    //RELATION MOBIL
    public function mobil()
    {
        return $this->belongsTo(Mobil::class,'id_mobil', 'id_mobil');
    }
}

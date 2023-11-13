<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $primaryKey = ['id_pelanggan'];
    protected $guarded = ['id_pelanggan'];

    // RELATION ULASAN
    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_ulasan', 'id_ulasan');
    }

    //RELATION PENYEWAAN
    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class, 'id_penyewaan', 'id_penyewaan');
    }

    //RELATION AKUN
    public function akun()
    {
        return $this->hasOne(Akun::class,'id_akun', 'id_akun');
    }
}
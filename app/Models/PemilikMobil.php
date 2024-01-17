<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikMobil extends Model
{
    use HasFactory;
    protected $table = 'pemilik_mobil';
    protected $primaryKey = 'id_pemilik_mobil';
    protected $guarded = ['id_pemilik_mobil'];

    //RELATION MOBIL
    public function mobil()
    {
        return $this->hasMany(Mobil::class, 'id_mobil', 'id_mobil');
    }

    //RELATION AKUN
    public function akun()
    {
        return $this->hasOne(Akun::class,'id_akun', 'id_akun');
    }
}
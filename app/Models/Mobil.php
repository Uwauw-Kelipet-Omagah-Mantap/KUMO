<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $guarded = ['id_mobil', 'created_at', 'updated_at'];

    // RELATION PEMILIK MOBIL
    public function pemilik_mobil()
    {
        return $this->belongsTo(PemilikMobil::class, 'id_pemilik_mobil', 'id_pemilik_mobil');
    }

    //RELATION PENYEWAAN
    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class, 'id_mobil', 'id_mobil');
    }

    //RELATION ULASAN
    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_ulasan', 'id_ulasan');
    }

    //RELATION PERLENGKAPAN
    public function perlengkapan()
    {
        return $this->hasMany(Perlengkapan::class, 'id_perlengkapan', 'id_perlengkapan');
    }

    //RELATION TARIF
    public function tarif()
    {
        return $this->hasMany(Tarif::class, 'id_tarif', 'id_tarif');
    }

    //RELATION MODEL MOBIL
    public function model_mobil()
    {
        return $this->belongsTo(ModelMobil::class, 'id_model_mobil', 'id_model_mobil');
    }
}

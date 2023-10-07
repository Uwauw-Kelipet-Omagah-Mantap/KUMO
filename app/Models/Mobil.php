<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $guarded = ['id_mobil'];

    public $timestamps = false;

    // RELATION
    public function pemilik_mobil()
    {
        return $this->belongsTo(PemilikMobil::class, 'id_pemilik_mobil', 'id_pemilik_mobil');
    }

    public function penyewaan()
    {
        return $this->hasMany(Penyewaan::class, 'id_mobil', 'id_mobil');
    }
}

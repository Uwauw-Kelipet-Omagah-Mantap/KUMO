<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMobil extends Model
{
    use HasFactory;
    protected $table = 'model_mobil';
    protected $guarded = ['id_model_mobil'];

    //RELATION MOBIL
    public function mobil()
    {
        return $this->hasOne(Mobil::class, 'id_mobil', 'id_mobil');
    }

    //RELATION TARIF
    public function tarif()
    {
        return $this->hasMany(Tarif::class, 'id_tarif', 'id_tarif');
    }
}

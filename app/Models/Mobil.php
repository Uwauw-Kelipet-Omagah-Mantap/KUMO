<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $guarded = ['id_mobil', 'created_at', 'updated_at'];

    // RELATION
    public function pemilik_mobil()
    {
        return $this->belongsTo(PemilikMobil::class, 'id_pemilik_mobil', 'id_pemilik_mobil');
    }
}

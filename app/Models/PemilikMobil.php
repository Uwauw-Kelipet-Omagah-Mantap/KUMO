<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikMobil extends Model
{
    use HasFactory;
    protected $table = 'pemilik_mobil';
    protected $guarded = ['id_pemilik_mobil', 'created_at', 'updated_at'];

    // RELATION
    public function pemilik_mobil()
    {
        return $this->belongsTo(PemilikMobil::class, 'id_pemilik_mobil', 'id_pemilik_mobil');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akun';
    protected $primaryKey = 'email';
    protected $guarded = ['email'];

    //RELATION ADMIN
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'email', 'email');
    }

    //RELATION PELANGGAN
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    //RELATION PEMILIK MOBIL
    public function pemilik_mobil()
    {
        return $this->belongsTo(PemilikMobil::class, 'id_pemilik', 'id_pemilik');
    }
}

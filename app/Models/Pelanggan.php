<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $guarded = ['id_pelanggan', 'created_at', 'updated_at'];

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
}
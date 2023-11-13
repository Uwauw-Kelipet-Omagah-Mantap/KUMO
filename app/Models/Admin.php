<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $guarded = ['id_admin'] ;
    public $timestamps = true;

    //RELATION PERUSAHAAN 
    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan', 'id_perusahaan');
    }

    //RELATION AKUN
    public function akun()
    {
        return $this->hasOne(Akun::class, 'id_admin', 'id_admin');
    }
}
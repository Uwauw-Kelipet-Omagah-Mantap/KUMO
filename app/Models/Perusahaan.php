<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = 'perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $guarded = ['id_perusahaan'];

    // RELATION
    public function admin()
    {
        return $this->hasMany(Admin::class,'id_admin','id_admin');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berlaku extends Model
{
    use HasFactory;
    protected $table = 'berlaku';
    protected $primaryKey = 'id_berlaku';
    protected $guarded = ['id_berlaku'];
    
    //RELATION
    public function denda()
    {
        return $this->belongsTo(Denda::class, 'id_denda', 'id_denda');
    }

    public function pengembalian()
    {
        return $this->belongsTo(Pengembalian::class, 'id_pengembalian', 'id_pengembalian');
    }
}

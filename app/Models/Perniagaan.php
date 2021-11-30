<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perniagaan extends Model
{
    use HasFactory;
    protected $table = 'table_perniagaan';

    //1st relationship
    //belong to bila ada FK
    //rujuk yg ni
    public function permohonan()
    {
        return $this->belongTo(Permohonan::class, 'permohonan_id', 'id');
    }

    //2nd relationship
    public function premis()
    {
        return $this->hasMany(Premis::class, 'perniagaan_id', 'id');
    }
}

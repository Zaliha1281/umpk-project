<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pusat extends Model
{
    use HasFactory;
    protected $table = 'table_pusat';

    public function premis()
    {
        return $this->belongsTo(Premis::class, 'premis_id', 'id');
    }
}

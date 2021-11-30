<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaedahBayaran extends Model
{
    use HasFactory;
    protected $table = 'table_kaedah_bayaran';

    //bayaran x pegang foreign key
    public function bayaran()
    {
        return $this->hasMany(Bayaran::class, 'kaedah_bayaran_id', 'id');
    }
}


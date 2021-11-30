<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'table_penilaian';

    public function mesyuarat()
    {
        return $this->belongsTo(Mesyuarat::class, 'mesyuarat_id', 'id');
    }
}

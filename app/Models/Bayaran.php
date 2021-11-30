<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayaran extends Model
{
    use HasFactory;

    //1st relationship
    protected $table = 'table_bayaran';

    public function kaedahbayaran()
    {
        return $this->belongsTo(KaedahBayaran::class, 'kaedah_bayaran_id', 'id');
    }

    //1st relationship
    //x pegang foreign key, terus belongto
    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id', 'id');
    }
}

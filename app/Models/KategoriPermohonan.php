<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPermohonan extends Model
{
    use HasFactory;

    protected $table = 'table_kategori_permohonan';

    //bayaran x pegang foreign key
    public function permohonan()
    {
        return $this->hasMany(Permohonan::class, 'kategori_permohonan_id', 'id');
    }
}

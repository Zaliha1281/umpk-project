<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $table = 'table_permohonan';

     //1
     public function perniagaan()
     {
         return $this->hasOne(Perniagaan::class, 'permohonan_id', 'id');
     }

     //2
     public function kategoriPermohonan()
     {
         return $this->belongsTo(KategoriPermohonan::class, 'kategori_permohonan_id', 'id');
     }

     //3
     public function dokumen()
     {
         return $this->hasMany(Dokumen::class, 'permohonan_id', 'id');
     }
     
     //4
     public function user()
     {
         return $this->belongsTo(User::class, 'permohonan_id', 'id');
     }

     //5
     public function bayaran()
     {
         return $this->hasOne(Bayaran::class, 'permohonan_id', 'id');
     }

     //6
     public function kokurikulum()
     {
         return $this->hasMany(Kokurikulum::class, 'permohonan_id', 'id');
     }

     //7
     public function peperiksaan()
     {
         return $this->hasMany(Peperiksaan::class, 'permohonan_id', 'id');
     }

     //8
     public function mesyuarat()
     {
         return $this->hasMany(Mesyuarat::class, 'permohonan_id', 'id');
     }
}

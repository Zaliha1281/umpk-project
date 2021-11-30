<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePerniagaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_perniagaan', function (Blueprint $table) {
            $table->id();

             //buat relationship
             $table->unsignedBigInteger('permohonan_id');
             $table->foreign('permohonan_id')->references('id')->on('table_permohonan');
 
             $table->String('kod_jenis_perniagaan');
             $table->String('nama_syarikat');
             $table->String('alamat');
             $table->String('poskod');
             $table->String('daerah');
             $table->String('negeri');
             $table->String('tarikh daftar');
             $table->String('modal_dibenar');
             $table->String('modal_berbayar');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_perniagaan');
    }
}

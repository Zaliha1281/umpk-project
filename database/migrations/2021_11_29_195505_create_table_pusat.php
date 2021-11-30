<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePusat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pusat', function (Blueprint $table) {
            $table->id();

            //buat relationship
            $table->unsignedBigInteger('premis_id');
            $table->foreign('premis_id')->references('id')->on('table_premis'); 
            
            $table->String('nama_pusat');
            $table->String('lokasi_pusat');
            $table->String('pusat_peperiksaan');
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
        Schema::dropIfExists('table_pusat');
    }
}

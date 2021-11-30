<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePremis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_premis', function (Blueprint $table) {
            $table->id();

            //buat relationship
            $table->unsignedBigInteger('perniagaan_id');
            $table->foreign('perniagaan_id')->references('id')->on('table_perniagaan');

           
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
        Schema::dropIfExists('table_premis');
    }
}

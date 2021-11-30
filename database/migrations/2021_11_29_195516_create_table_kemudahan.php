<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKemudahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kemudahan', function (Blueprint $table) {
            $table->id();

                //buat relationship
                $table->unsignedBigInteger('premis_id');
                $table->foreign('premis_id')->references('id')->on('table_premis'); 
                $table->String('detail_kemudahan');
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
        Schema::dropIfExists('table_kemudahan');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePeperiksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_peperiksaan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

         
            $table->String('jenis_peperiksaan');
            $table->String('sesi_peperiksaan');
            $table->String('kaedah_peperiksaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_peperiksaan');
    }
}

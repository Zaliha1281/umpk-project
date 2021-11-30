<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKaedahBayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kaedah_bayaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->String('jenis_bayaran');
            $table->String('detail_bayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kaedah_bayaran');
    }
}

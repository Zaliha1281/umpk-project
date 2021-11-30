<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePermohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_permohonan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //buat relationship
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            //buat relationship
            $table->unsignedBigInteger('kategori_permohonan_id');
            $table->foreign('kategori_permohonan_id')->references('id')->on('table_kategori_permohonan');

            $table->String('jenis_agen');
            $table->String('jenis_mohon');
            $table->String('no_rujukan');
            $table->String('perakuan');
            $table->String('tarikh_mohon');
            $table->String('tarikh_kemaskini');
            $table->String('status_permohonan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_permohonan');
    }
}

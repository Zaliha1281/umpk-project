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
            $table->unsignedBigInteger('kategori_permohonan_id')->nullable();
            $table->foreign('kategori_permohonan_id')->references('id')->on('table_kategori_permohonan');

            $table->string('jenis_agen')->nullable();;
            $table->string('jenis_mohon')->nullable();;
            $table->string('no_rujukan')->nullable();;
            $table->string('perakuan')->nullable();;
            $table->string('tarikh_mohon')->nullable();;
            $table->string('tarikh_kemaskini')->nullable();;
            $table->string('status_permohonan')->nullable();;
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

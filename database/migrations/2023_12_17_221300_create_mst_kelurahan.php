<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_kelurahan', function (Blueprint $table) {
            $table->string('kode');
            $table->primary('kode');
            $table->string('kode_kecamatan');
            $table->foreign('kode_kecamatan')->references('kode')->on('mst_kecamatan');
            $table->string('nama');
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
        Schema::dropIfExists('mst_kelurahan');
    }
}

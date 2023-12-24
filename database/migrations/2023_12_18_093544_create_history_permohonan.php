<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryPermohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_permohonan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_permohonan')->unsigned();
            $table->foreign('id_permohonan')->references('id')->on('permohonan');
            $table->bigInteger('verifikator')->unsigned()->nullable();
            $table->foreign('verifikator')->references('id')->on('users');
            $table->bigInteger('status_pengajuan')->unsigned();
            $table->foreign('status_pengajuan')->references('id')->on('mst_status');
            $table->datetime('tgl_update')->useCurrent();
            $table->text('catatan')->nullable();
            $table->string('posisi')->nullable();
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
        Schema::dropIfExists('history_permohonan');
    }
}

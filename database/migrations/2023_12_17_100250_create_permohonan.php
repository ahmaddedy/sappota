<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 20);
            $table->foreign('nik')->references('nik')->on('pemohon');
            $table->bigInteger('jenis_pelayanan')->unsigned();
            $table->foreign('jenis_pelayanan')->references('id')->on('mst_pelayanan');
            $table->text('alasan');
            $table->string('jenis_pemohon');
            $table->date('tgl_permohonan');
            $table->string('no_permohonan');
            $table->string('gambar_letak_pohon_site_plan')->nullable();
            $table->string('scan_imb')->nullable();
            $table->string('scan_izin_usaha')->nullable();
            $table->string('scan_izin_penyambungan_jalan_masuk')->nullable();
            $table->string('letak_pohon')->default('public');
            $table->string('nama_pohon')->nullable();
            $table->string('alamat_pohon')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('jumlah_pohon')->nullable();
            $table->string('jenis_pohon')->nullable();
            $table->string('token');
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
        Schema::dropIfExists('permohonan');
    }
}

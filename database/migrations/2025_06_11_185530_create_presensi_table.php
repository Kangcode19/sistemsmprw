<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 18);
            $table->date('tgl_presensi');
            $table->time('jam_in')->nullable();
            $table->time('jam_out')->nullable();
            $table->string('foto_in', 255)->nullable();
            $table->string('foto_out', 255)->nullable();
            $table->text('lokasi_in')->nullable();
            $table->text('lokasi_out')->nullable();
            $table->char('kode_jam_kerja', 4)->nullable();
            $table->char('status', 1)->nullable();
            $table->char('kode_izin', 9)->nullable();

            $table->foreign('kode_izin')->references('kode_izin')->on('pengajuan_izin')->onDelete('cascade');
            $table->foreign('kode_jam_kerja')->references('kode_jam_kerja')->on('jam_kerja')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nik')->references('nik')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};

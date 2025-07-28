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
        Schema::create('konfigurasi_jamkerja', function (Blueprint $table) {
            $table->char('nik', 18)->nullable();
            $table->string('hari', 10)->nullable();
            $table->char('kode_jam_kerja', 4)->nullable();

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
        Schema::dropIfExists('konfigurasi_jamkerja');
    }
};

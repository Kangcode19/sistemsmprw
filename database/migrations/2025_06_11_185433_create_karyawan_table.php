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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->char('nik', 18)->primary();
            $table->string('nama_lengkap', 100);
            $table->string('jabatan', 20);
            $table->string('no_hp', 13);
            $table->string('foto', 30)->nullable();
            $table->char('kode_dept', 3);
            $table->char('kode_cabang', 3)->nullable();
            $table->char('status_location', 1)->default('1');
            $table->char('status_jam_kerja', 1)->default('1');
            $table->string('password');
            $table->string('remember_token', 255)->nullable();

            $table->foreign('kode_cabang')->references('kode_cabang')->on('cabang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_dept')->references('kode_dept')->on('departemen')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
};

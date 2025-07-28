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
        Schema::create('konfigurasi_jk_dept', function (Blueprint $table) {
            $table->char('kode_jk_dept', 7)->primary();
            $table->char('kode_cabang', 3)->nullable();
            $table->char('kode_dept', 3)->nullable();

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
        Schema::dropIfExists('konfigurasi_jk_dept');
    }
};

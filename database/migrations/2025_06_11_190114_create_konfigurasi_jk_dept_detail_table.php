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
        Schema::create('konfigurasi_jk_dept_detail', function (Blueprint $table) {
            $table->char('kode_jk_dept', 7)->nullable();
            $table->string('hari', 10)->nullable();
            $table->char('kode_jam_kerja', 4)->nullable();

            $table->foreign('kode_jk_dept')->references('kode_jk_dept')->on('konfigurasi_jk_dept')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfigurasi_jk_dept_detail');
    }
};

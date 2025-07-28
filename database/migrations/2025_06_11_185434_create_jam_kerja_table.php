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
        Schema::create('jam_kerja', function (Blueprint $table) {
            $table->char('kode_jam_kerja', 4)->primary();
            $table->string('nama_jam_kerja', 15);
            $table->time('awal_jam_masuk');
            $table->time('jam_masuk');
            $table->time('akhir_jam_masuk');
            $table->time('awal_jam_istirahat')->nullable();
            $table->time('akhir_jam_istirahat')->nullable();
            $table->char('status_istirahat', 1)->nullable();
            $table->time('jam_pulang');
            $table->smallInteger('total_jam');
            $table->char('lintashari', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_kerja');
    }
};

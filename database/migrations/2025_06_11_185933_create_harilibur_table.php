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
        Schema::create('harilibur', function (Blueprint $table) {
            $table->char('kode_libur', 7)->primary();
            $table->date('tanggal_libur');
            $table->char('kode_cabang', 3);
            $table->string('keterangan', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harilibur');
    }
};

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
        Schema::create('pengajuan_izin', function (Blueprint $table) {
            $table->char('kode_izin', 9)->primary();
            $table->char('nik', 18)->nullable();
            $table->date('tgl_izin_dari')->nullable();
            $table->date('tgl_izin_sampai')->nullable();
            $table->char('status', 1)->nullable()->comment('i : izin s : sakit');
            $table->char('kode_cuti', 3)->nullable();
            $table->string('keterangan', 255)->nullable();
            $table->string('doc_sid', 255)->nullable();
            $table->char('status_approved', 1)->nullable()->default('0')->comment('0 : Pending 1: Disetuji 2: Ditolak');

            $table->foreign('kode_cuti')->references('kode_cuti')->on('master_cuti')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pengajuan_izin');
    }
};

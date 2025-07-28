<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfigurasiJkDeptDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $konfigurasi_jk_dept_detail = [
            ['kode_jk_dept' => 'JSMPKPS', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['kode_jk_dept' => 'JSMPKPS', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['kode_jk_dept' => 'JSMPKPS', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['kode_jk_dept' => 'JSMPKPS', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['kode_jk_dept' => 'JSMPKPS', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['kode_jk_dept' => 'JSMPKPS', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['kode_jk_dept' => 'JSMPGRU', 'hari' => 'Senin', 'kode_jam_kerja' => 'JKO4'],
            ['kode_jk_dept' => 'JSMPGRU', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JKO4'],
            ['kode_jk_dept' => 'JSMPGRU', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JKO4'],
            ['kode_jk_dept' => 'JSMPGRU', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JKO4'],
            ['kode_jk_dept' => 'JSMPGRU', 'hari' => 'Jumat', 'kode_jam_kerja' => null],
            ['kode_jk_dept' => 'JSMPGRU', 'hari' => 'Sabtu', 'kode_jam_kerja' => null]
        ];

        DB::table('konfigurasi_jk_dept_detail')->insert($konfigurasi_jk_dept_detail);
    }
}

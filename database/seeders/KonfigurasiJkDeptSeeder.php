<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfigurasiJkDeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $konfigurasi_jk_dept = [
            [
                'kode_jk_dept' => 'JSMPGRU',
                'kode_cabang' => 'SMP',
                'kode_dept' => 'GRU'
            ],
            [
                'kode_jk_dept' => 'JSMPKPS',
                'kode_cabang' => 'SMP',
                'kode_dept' => 'KPS'
            ]
        ];

        DB::table('konfigurasi_jk_dept')->insert($konfigurasi_jk_dept);
    }
}

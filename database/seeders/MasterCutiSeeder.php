<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterCutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master_cuti = [
            [
                'kode_cuti' => 'CT1',
                'nama_cuti' => 'Cuti Tahunan',
                'jml_hari' => 12
            ],
            [
                'kode_cuti' => 'CT2',
                'nama_cuti' => 'Cuti Melahirkan',
                'jml_hari' => 90
            ],
            [
                'kode_cuti' => 'CT3',
                'nama_cuti' => 'Cuti Sakit',
                'jml_hari' => 14
            ],
            [
                'kode_cuti' => 'CT4',
                'nama_cuti' => 'Cuti Penting',
                'jml_hari' => 7
            ]
        ];

        DB::table('master_cuti')->insert($master_cuti);
    }
}

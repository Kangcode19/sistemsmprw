<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cabang = [
            [
                'kode_cabang' => 'SMP',
                'nama_cabang' => 'Kantor smp',
                'lokasi_cabang' => '-7.57831, 112.44093',
                'radius_cabang' => 10
            ]
        ];

        DB::table('cabang')->insert($cabang);
    }
}

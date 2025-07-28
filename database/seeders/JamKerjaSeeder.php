<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jam_kerja = [
            [
                'kode_jam_kerja' => 'JK01',
                'nama_jam_kerja' => 'SENIN - KAMIS',
                'awal_jam_masuk' => '06:00:00',
                'jam_masuk' => '07:00:00',
                'akhir_jam_masuk' => '07:30:00',
                'awal_jam_istirahat' => '08:30:00',
                'akhir_jam_istirahat' => '09:30:00',
                'status_istirahat' => '1',
                'jam_pulang' => '14:00:00',
                'total_jam' => 7,
                'lintashari' => null
            ],
            [
                'kode_jam_kerja' => 'JK02',
                'nama_jam_kerja' => "JUM'AT",
                'awal_jam_masuk' => '06:00:00',
                'jam_masuk' => '07:00:00',
                'akhir_jam_masuk' => '07:30:00',
                'awal_jam_istirahat' => '08:30:00',
                'akhir_jam_istirahat' => '09:30:00',
                'status_istirahat' => '1',
                'jam_pulang' => '11:00:00',
                'total_jam' => 6,
                'lintashari' => null
            ],
            [
                'kode_jam_kerja' => 'JK03',
                'nama_jam_kerja' => 'SABTU',
                'awal_jam_masuk' => '06:00:00',
                'jam_masuk' => '07:00:00',
                'akhir_jam_masuk' => '07:30:00',
                'awal_jam_istirahat' => '08:55:00',
                'akhir_jam_istirahat' => '09:30:00',
                'status_istirahat' => '1',
                'jam_pulang' => '14:00:00',
                'total_jam' => 7,
                'lintashari' => null
            ]
        ];

        DB::table('jam_kerja')->insert($jam_kerja);
    }
}

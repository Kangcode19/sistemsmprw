<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $presensi = [
            [
                'id' => 48,
                'nik' => 'Ustadafrizal',
                'tgl_presensi' => '2025-05-20',
                'jam_in' => '00:06:00',
                'jam_out' => '00:14:00',
                'foto_in' => null,
                'foto_out' => null,
                'lokasi_in' => null,
                'lokasi_out' => null,
                'kode_jam_kerja' => 'JK01',
                'status' => 'h',
                'kode_izin' => null
            ]
        ];

        DB::table('presensi')->insert($presensi);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departemen = [
            ['kode_dept' => 'GRU', 'nama_dept' => 'Guru'],
            ['kode_dept' => 'KPS', 'nama_dept' => 'Kepala sekolah'],
            ['kode_dept' => 'TU', 'nama_dept' => 'Tata usaha']
        ];

        DB::table('departemen')->insert($departemen);
    }
}

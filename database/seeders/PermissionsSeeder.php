<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'name' => 'view-karyawan',
                'guard_name' => 'web',
                'created_at' => '2023-12-15 00:36:28',
                'updated_at' => '2023-12-15 00:36:28'
            ],
            [
                'id' => 2,
                'name' => 'view-departemen',
                'guard_name' => 'web',
                'created_at' => '2023-12-15 00:36:28',
                'updated_at' => '2023-12-15 00:36:28'
            ]
        ];

        DB::table('permissions')->insert($permissions);
    }
}

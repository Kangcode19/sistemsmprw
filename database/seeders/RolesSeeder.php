<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'administrator',
                'guard_name' => 'web',
                'created_at' => '2023-12-15 00:36:28',
                'updated_at' => '2023-12-15 00:36:28'
            ],
            [
                'id' => 2,
                'name' => 'admin departemen',
                'guard_name' => 'web',
                'created_at' => '2023-12-18 00:22:14',
                'updated_at' => '2023-12-18 00:22:14'
            ]
        ];

        DB::table('roles')->insert($roles);
    }
}

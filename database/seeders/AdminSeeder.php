<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'id' => 14,
                'name' => 'Bu desi ratnasari',
                'email' => 'desiratnasari@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$mthzYa/CRxONhqC0gwbL/eHyajw4EtHAQdnERmFhiU0NNJdUgwcCO',
                'kode_dept' => 'KPS',
                'kode_cabang' => 'SMP',
                'remember_token' => null,
                'created_at' => '2025-03-04 13:30:31',
                'updated_at' => '2025-03-04 13:30:31'
            ],
            [
                'id' => 17,
                'name' => 'badrit',
                'email' => 'kangbadrit@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$JmLNIuJW19LNMdC8sljfNudjIkP/QOjTaPtGZ.2x6OHBffF1xNvVS',
                'kode_dept' => 'TU',
                'kode_cabang' => 'SMP',
                'remember_token' => null,
                'created_at' => '2025-05-27 13:25:23',
                'updated_at' => '2025-05-27 13:25:23'
            ],
            [
                'id' => 20,
                'name' => 'achmadbaihaqi',
                'email' => 'achmadbaihaqi583@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$YKTORtTiAMZSp48lMv.J9u68bljNmCOmil66XZxgF1yDX7ba97VYe',
                'kode_dept' => 'TU',
                'kode_cabang' => 'SMP',
                'remember_token' => null,
                'created_at' => '2025-05-27 14:08:20',
                'updated_at' => '2025-05-27 14:08:20'
            ]
        ];

        DB::table('admins')->insert($admins);
    }
}

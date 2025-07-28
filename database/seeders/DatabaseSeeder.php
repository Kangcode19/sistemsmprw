<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
                // Seeder untuk tabel master
            DepartemenSeeder::class,
            CabangSeeder::class,
            JamKerjaSeeder::class,
            MasterCutiSeeder::class,

                // Seeder untuk tabel user dan permission
            PermissionsSeeder::class,
            RolesSeeder::class,
            AdminSeeder::class,
            RoleHasPermissionsSeeder::class,
            ModelHasRolesSeeder::class,

                // Seeder untuk data karyawan
            KaryawanSeeder::class,
            KonfigurasiJamKerjaSeeder::class,
            KonfigurasiJkDeptSeeder::class,
            KonfigurasiJkDeptDetailSeeder::class,

                // Seeder untuk data presensi
            PengajuanIzinSeeder::class,
            PresensiSeeder::class
        ]);
        $this->command->info('Semua data awal berhasil ditambahkan!');
    }
}
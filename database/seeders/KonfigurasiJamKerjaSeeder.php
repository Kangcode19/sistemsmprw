<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfigurasiJamKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $konfigurasi_jamkerja = [
            // Konfigurasi untuk kangbadrit
            ['nik' => 'Ustadbadrit', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadbadrit', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadbadrit', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadbadrit', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadbadrit', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'Ustadbadrit', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'Ustadbadrit', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk Ustadafrizal
            ['nik' => 'Ustadafrizal', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadafrizal', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadafrizal', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadafrizal', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadafrizal', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'Ustadafrizal', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'Ustadafrizal', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk Ustadmashuda
            ['nik' => 'Ustadmashuda', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadmashuda', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadmashuda', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadmashuda', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadmashuda', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'Ustadmashuda', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'Ustadmashuda', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            
            // Konfigurasi untuk Ustadnasrudin
            ['nik' => 'Ustadnasrudin', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnasrudin', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnasrudin', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnasrudin', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnasrudin', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'Ustadnasrudin', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'Ustadnasrudin', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk Ustadnur
            ['nik' => 'Ustadnur', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnur', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnur', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnur', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadnur', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'Ustadnur', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'Ustadnur', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk Ustadwahyu
            ['nik' => 'Ustadwahyu', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadwahyu', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadwahyu', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadwahyu', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'Ustadwahyu', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'Ustadwahyu', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'Ustadwahyu', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk bucandy
            ['nik' => 'bucandy', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bucandy', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bucandy', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bucandy', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bucandy', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'bucandy', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'bucandy', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk buifa
            ['nik' => 'buifa', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'buifa', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'buifa', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'buifa', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'buifa', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'buifa', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'buifa', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk bulailatul
            ['nik' => 'bulailatul', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailatul', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailatul', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailatul', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailatul', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'bulailatul', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'bulailatul', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk bulailiyatul
            ['nik' => 'bulailiyatul', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailiyatul', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailiyatul', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailiyatul', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'bulailiyatul', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'bulailiyatul', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'bulailiyatul', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfigurasi untuk burizki
            ['nik' => 'burizki', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'burizki', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'burizki', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'burizki', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'burizki', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'burizki', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'burizki', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfirmasi untuk busiti
            ['nik' => 'busiti', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'busiti', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'busiti', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'busiti', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'busiti', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'busiti', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'busiti', 'hari' => 'Minggu', 'kode_jam_kerja' => null],

            // Konfirmasi untuk butauqiyah
            ['nik' => 'butauqiyah', 'hari' => 'Senin', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'butauqiyah', 'hari' => 'Selasa', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'butauqiyah', 'hari' => 'Rabu', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'butauqiyah', 'hari' => 'Kamis', 'kode_jam_kerja' => 'JK01'],
            ['nik' => 'butauqiyah', 'hari' => 'Jumat', 'kode_jam_kerja' => 'JK02'],
            ['nik' => 'butauqiyah', 'hari' => 'Sabtu', 'kode_jam_kerja' => 'JK03'],
            ['nik' => 'butauqiyah', 'hari' => 'Minggu', 'kode_jam_kerja' => null],
        ];

        DB::table('konfigurasi_jamkerja')->insert($konfigurasi_jamkerja);
    }
}

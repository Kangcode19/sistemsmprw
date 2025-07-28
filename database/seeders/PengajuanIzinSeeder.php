<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajuanIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengajuan_izin = [
            [
                'kode_izin' => 'IZ0225001',
                'nik' => 'Ustadafrizal',
                'tgl_izin_dari' => '2025-02-03',
                'tgl_izin_sampai' => '2025-02-07',
                'status' => 'i',
                'kode_cuti' => null,
                'keterangan' => 'izin sakit',
                'doc_sid' => null,
                'status_approved' => '0'
            ],
            [
                'kode_izin' => 'IZ0325001',
                'nik' => 'bucandy',
                'tgl_izin_dari' => '2025-03-05',
                'tgl_izin_sampai' => '2025-03-10',
                'status' => 'i',
                'kode_cuti' => null,
                'keterangan' => 'malas berkerja',
                'doc_sid' => null,
                'status_approved' => '0'
            ],
            [
                'kode_izin' => 'IZ0525001',
                'nik' => 'Ustadafrizal',
                'tgl_izin_dari' => '2025-05-04',
                'tgl_izin_sampai' => '2025-05-06',
                'status' => 's',
                'kode_cuti' => null,
                'keterangan' => 'Assalamuallaikum kepada sekolah smp rahman wahid izin untuk mengirimkan surat izin yang sudah saya buat di file suratizinustadrizal .pdf',
                'doc_sid' => 'IZ0525001.png',
                'status_approved' => '2'
            ],
            [
                'kode_izin' => 'IZ0525002',
                'nik' => 'Ustadafrizal',
                'tgl_izin_dari' => '2025-05-08',
                'tgl_izin_sampai' => '2025-05-09',
                'status' => 'i',
                'kode_cuti' => null,
                'keterangan' => 'sakit',
                'doc_sid' => null,
                'status_approved' => '2'
            ]
        ];

        DB::table('pengajuan_izin')->insert($pengajuan_izin);
    }
}

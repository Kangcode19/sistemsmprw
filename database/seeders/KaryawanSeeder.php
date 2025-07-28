<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            [
                'nik' => 'bucandy',
                'nama_lengkap' => 'candy alfa agustina,S.Pd',
                'jabatan' => 'Guru matematika',
                'no_hp' => '085852137454',
                'foto' => 'bucandy.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$1ERZBnStqEX1ksNcrutgsuPgYAyNaobg2CsNjZCK70XzeSd8KNNau',
                'remember_token' => null
            ],
            [
                'nik' => 'buifa',
                'nama_lengkap' => 'Ifa miftahul rifdah,S.Pd',
                'jabatan' => 'Guru pai dan ips',
                'no_hp' => '081976534889',
                'foto' => 'buifa.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$h8RUkAc8Q2tZ1LL3sqx7SeqfTbrZOR0v4yBUkoQrIe9eAopPyTWJm',
                'remember_token' => null
            ],
            [
                'nik' => 'bulailatul',
                'nama_lengkap' => 'Lailatul fitriyah,S.Fil',
                'jabatan' => 'Guru tik',
                'no_hp' => '086738039740',
                'foto' => 'bulailatul.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$0fpv4CslJj37ya.Qea7/M.Pjqc.LgWd/vnRrEM8Nz0nZ6rTxwRave',
                'remember_token' => null
            ],
            [
                'nik' => 'bulailiyatul',
                'nama_lengkap' => 'lailiyatul fadlilah,S.Pd',
                'jabatan' => 'Guru ips',
                'no_hp' => '081749293824',
                'foto' => 'bulailiyatul.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$zeyb30WAJyqQG1/H0QQ6p.Lad9McQi.KySUdvdxakCsJ7Nos.ifKK',
                'remember_token' => null
            ],
            [
                'nik' => 'burizki',
                'nama_lengkap' => 'rizki aminatut tazkiyah,S.Kep',
                'jabatan' => 'Ipa Terpadu',
                'no_hp' => '0858920848402',
                'foto' => 'burizki.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '2y$10$idvv.f.ALzbbkjsTS5uWO.U9..g.46XhwBU6dIVMNNkVG3DTX92sS',
                'remember_token' => null
            ],
            [
                'nik' => 'busiti',
                'nama_lengkap' => 'siti maimunah,S.Pd',
                'jabatan' => 'Guru bahasa inggris',
                'no_hp' => '081748273893',
                'foto' => 'busiti.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$BUmZ1HvcpT0hNoyF1h9VCeodyzBSmOjbEkIK7OY9jt/q0bpQNAcrS',
                'remember_token' => null
            ],
            [
                'nik' => 'butauqiyah',
                'nama_lengkap' => 'tauqiyah ridha adfina,S.Pd',
                'jabatan' => 'Guru pai',
                'no_hp' => '0859092847739',
                'foto' => 'butauqiyah.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$7Yu/Wo7bfBW60j.b3CCYpO16TFslo5nZzEvfr/sxSKPUTAZw92Ea2',
                'remember_token' => null
            ],
            [
                'nik' => 'Ustadbadrit',
                'nama_lengkap' => 'badrittamimi',
                'jabatan' => 'Staff tu',
                'no_hp' => '085852137454',
                'foto' => 'kangbadrit.jpg',
                'kode_dept' => 'TU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$p31UmTyiXvtRMRJWlhjfiu3MIRqP2TK78hvfjwU0XLRmlwqb70Lde',
                'remember_token' => null
            ],
            [
                'nik' => 'Ustadafrizal',
                'nama_lengkap' => 'Afrizal asyari S.Pd.i',
                'jabatan' => 'Guru aswaja',
                'no_hp' => '085852137545',
                'foto' => 'ustadafrizal.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$ywsDtXJY.AchY6h2gUCWR.oCXzKNxG.AG/HwhJmYfNoTzjUuADZ1q',
                'remember_token' => null
            ],
            [
                'nik' => 'Ustadmashuda',
                'nama_lengkap' => 'Mashuda,S.Pd',
                'jabatan' => 'Guru Matematika',
                'no_hp' => '085469738398',
                'foto' => 'Ustadmashuda.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$oURZPi5IRBKicjREzjEc8ePtlBn9rzWWn/3PZoJ34Hh.kdPh5cG8O',
                'remember_token' => null
            ],
            [
                'nik' => 'Ustadnasrudin',
                'nama_lengkap' => 'H.Agus nasrudin,S.Pd. i',
                'jabatan' => 'Guru pkn',
                'no_hp' => '085899038489',
                'foto' => 'Ustadnasrudin.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$7p6Lv0FA8t1fpVFhnubltOnWyI6iDLIw7w0oO8siZabDAc8iF0IQe',
                'remember_token' => null
            ],
            [
                'nik' => 'Ustadnur',
                'nama_lengkap' => 'Nur rohman,M.Pd',
                'jabatan' => 'Guru btq',
                'no_hp' => '085854673839',
                'foto' => 'Ustadnur.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$Aw30deJBG6BY7ov5tEh0IO6VVxEesYUaOcRb.CoyprRUxREhGv3Xy',
                'remember_token' => null
            ],
            [
                'nik' => 'Ustadwahyu',
                'nama_lengkap' => 'Wahyu agung ari susanto.S,Pd',
                'jabatan' => 'Gurubahasaindonesia',
                'no_hp' => '085854673839',
                'foto' => 'Ustadwahyu.jpg',
                'kode_dept' => 'GRU',
                'kode_cabang' => 'SMP',
                'status_location' => '1',
                'status_jam_kerja' => '1',
                'password' => '$2y$10$l7I9x5nx92M88S6BzW8B5e7D4NKxSv8e4fPv8v7xZqI3iJjxHGjGW',
                'remember_token' => null
            ]
        ];

        DB::table('karyawan')->insert($karyawan);
    }
}

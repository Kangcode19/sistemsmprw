<?php

namespace App\Http\Controllers;

use App\Models\KonfigurasiLokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonfigurasiLokasiController extends Controller
{
    public function index()
    {
            $konfigurasi_lokasi = DB::table('cabang as c')
                ->leftJoin('konfigurasi_lokasi as k',
                    'c.kode_cabang', '=', 'k.kode_cabang'
                )
                ->select('c.*', 'k.bebas_absen')
                ->get();

        return view('konfigurasi.lokasi', compact('konfigurasi_lokasi'));
    }

    public function update(Request $request)
    {
        $kode_cabang = $request->kode_cabang == '' ? 0 : $request->kode_cabang;
        $bebas_absen = $request->bebas_absen == 'true' ? 1 : 0;

        DB::beginTransaction();
        try {
            KonfigurasiLokasi::updateOrCreate(
                ['kode_cabang' => $kode_cabang],
                ['bebas_absen' => $bebas_absen]
            );
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Konfigurasi berhasil diperbarui.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Gagal memperbarui konfigurasi.'], 500);
        }
    }
}
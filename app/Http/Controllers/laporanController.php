<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class laporancontroller extends Controller
{
    public function index()
    {
        $months = range(1, 12);

        // Ambil data produksi per bulan dan tahun
        $produksiPerBulanTahun = DB::table('produksi')
            ->join('komoditas', 'produksi.komoditas_id', '=', 'komoditas.id')
            ->select(
                'komoditas.id',
                'komoditas.komoditas_nama',
                DB::raw('YEAR(produksi.tanggal_produksi) AS tahun'),
                DB::raw('MONTH(produksi.tanggal_produksi) AS bulan'),
                DB::raw('SUM(produksi.jumlah_produksi) AS total_produksi')
            )
            ->groupBy('komoditas.id', 'komoditas.komoditas_nama', DB::raw('YEAR(produksi.tanggal_produksi)'), DB::raw('MONTH(produksi.tanggal_produksi)'))
            ->orderBy('komoditas.komoditas_nama')
            ->orderBy(DB::raw('YEAR(produksi.tanggal_produksi)'))
            ->orderBy(DB::raw('MONTH(produksi.tanggal_produksi)'))
            ->get()
            ->groupBy(['tahun', 'komoditas_nama']);
    
        // Siapkan array hasil
        $results = [];
    
        // Iterasi setiap tahun dan komoditas
        foreach ($produksiPerBulanTahun as $tahun => $komoditasProduksi) {
            foreach ($komoditasProduksi as $komoditas => $produksi) {
                $row = ['tahun' => $tahun, 'komoditas_nama' => $komoditas];
                foreach ($months as $month) {
                    $row[$month] = $produksi->firstWhere('bulan', $month)->total_produksi ?? 0;
                }
                $results[] = $row;
            }
        }

    // kirim data ke view
    return view('laporan.laporan', compact('results'));
    }
}

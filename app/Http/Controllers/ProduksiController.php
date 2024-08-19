<?php

namespace App\Http\Controllers;

use App\Models\komoditas;
use App\Models\produksi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;

class ProduksiController extends Controller
{
    public function index()
    {
        $prod = produksi::all();
        // $prod = produksi::with('komoditas')->where('komoditas_id', $produksi)->get;
        // $katkris = kategori_kriteria::with('kriteria')->where('kri_id', $kriteria)->get();

        
        $produksi = DB::table('produksi as p')
            ->join('komoditas as k', 'p.komoditas_id', '=', 'k.id')
            ->select('p.id', 'k.komoditas_nama', 'p.jumlah_produksi', 'p.tanggal_produksi')
            ->get();

        // Kirim data ke view
        return view('produksi', compact('produksi'));


        // return view('produksi', compact(['prod']));
        return view('produksi', compact('prod'));



    }
    public function detail($id)
    {
        $pro = produksi::find($id);
        return view('detail.produksi', ['pro' => $pro]);
    }

    public function create()
    {
        $komoditas = Komoditas::all();
        
        return view('formtambah.produksi', compact('komoditas'));
    }

  
    public function store(Request $request){

    $request->validate([
        'tanggal' => 'required',
        'nama' => 'required',
        'jumlah' => 'required',

    ]);

    // Cek duplikasi data
        $cekduplikat = Produksi::where('komoditas_id', $request->nama)
            ->where('tanggal_produksi', $request->tanggal)
            ->first();

 
    if ($cekduplikat) {
        return redirect()->back()->withErrors(['duplicate' => 'Data produksi dengan komoditas dan tanggal tsb sudah ada.']);
    }


    // Simpan data baru
    $produksi = new Produksi;
    $produksi->komoditas_id = $request->nama;
    $produksi->jumlah_produksi = $request->jumlah;
    $produksi->tanggal_produksi = $request->tanggal;
            // dd($produksi);

    $produksi->save();
    return redirect('/produksi')->with('success', 'Data produksi berhasil disimpan.');
}


    public function edit($id)
    {
        $pro = produksi::find($id);
        return view('edit.produksi', ['pro' => $pro]);
    }

    use ValidatesRequests; 


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);

        $produksi = produksi::find($id);

        if (!$produksi) {
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }

        $produksi->jumlah_produksi = $request->jumlah;
        $produksi->tanggal_produksi = $request->tanggal;
        $produksi->save();

        return redirect('/produksi')->with('success', 'Data produksi berhasil diupdate.');
    }

   
    public function destroy($id)
    {
        $produksi = produksi::find($id);
        $produksi->delete();
        return redirect('/produksi');
    }
}

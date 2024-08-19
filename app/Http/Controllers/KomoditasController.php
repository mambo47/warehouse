<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\komoditas;
use App\Models\produksi;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;



class KomoditasController extends Controller
{
    public function index()
    {
        // $kom = komoditas::with('produksi')->get();
        $kom = komoditas::ALL();
        
        // dd($kom);
        return view('komoditas', compact(['kom']));

    }
    public function create()
    {
        return view('formtambah.komoditas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            

        ]);
        

        $komoditas = new komoditas;
        $komoditas->komoditas_nama = $request->nama;

        $komoditas->save();
        return redirect('/komoditas');
    }

    public function edit($id)
    {
        $kom = komoditas::find($id);
        return view('edit.komoditas', ['kom' => $kom]);
    }
    public function detail($id)
    {
        $kom = komoditas::find($id);
        return view('detail.komoditas', ['kom' => $kom]);
    }

    use ValidatesRequests; 


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
        ]);

        $komoditas = Komoditas::find($id);

        if (!$komoditas) {
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }

        $komoditas->komoditas_nama = $request->nama;
        $komoditas->save();

        return redirect('/komoditas')->with('success', 'Data komoditas berhasil diupdate.');
    }


    public function destroy($id)
    {
        $komoditas = komoditas::find($id);
        $komoditas->delete();
        return redirect('/komoditas');
    }

}

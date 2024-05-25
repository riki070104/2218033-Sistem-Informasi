<?php

namespace App\Http\Controllers;

use App\Models\stok;
use Illuminate\Http\Request;
use App\Models\data;

class stokController extends Controller
{
    public function index()
    {
        $tb_stok = stok::all();
        return view('stok.stok', compact('tb_stok'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_gudang' => 'required|integer',
            'nama_sepatu' => 'required',
            'merek' => 'required',
            'ukuran' => 'required|integer',
            'warna' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
        ]);

        $gudang = data::find($request->id_gudang);

        if (!$gudang) {
            return redirect()->back()->withErrors('Gudang tidak ditemukan');
        }

        stok::create([
            'id_gudang' => $request->id_gudang,
            'nama_gudang' => $gudang->nama_gudang,
            'nama_sepatu' => $request->nama_sepatu,
            'merek' => $request->merek,
            'ukuran' => $request->ukuran,
            'warna' => $request->warna,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect()->route('stok')->with('success', 'Stok berhasil ditambahkan');
    }
}

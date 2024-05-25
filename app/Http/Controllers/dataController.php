<?php

namespace App\Http\Controllers;

use App\Models\data;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DataController extends Controller
{
    public function index()
    {
        $gudangs = Data::all();
        return view('data.data', compact('gudangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_gudang' => 'required',
            'alamat' => 'required',
            'kapasitas' => 'required|integer',
            'kontak' => 'required'
        ]);

        Data::create($request->all());

        return redirect()->route('data')->with('success', 'Gudang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $gudang = Data::find($id);
        if (!$gudang) {
            return redirect()->route('data')->with('error', 'Gudang tidak ditemukan');
        }
        return view('data.data-edit', compact('gudang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_gudang' => 'required',
            'alamat' => 'required',
            'kapasitas' => 'required|integer',
            'kontak' => 'required'
        ]);

        $gudang = Data::find($id);
        if (!$gudang) {
            return redirect()->route('data')->with('error', 'Gudang tidak ditemukan');
        }

        $gudang->update($request->all());

        return redirect()->route('data')->with('success', 'Gudang berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gudang = Data::find($id);
        if (!$gudang) {
            return redirect()->route('data')->with('error', 'Gudang tidak ditemukan');
        }

        $gudang->delete();

        return redirect()->route('data')->with('success', 'Gudang berhasil dihapus');
    }
    public function exportpdf()
    {
        $gudangs = data::all();
        $pdf = Pdf::loadview('data.data-pdf', compact('gudangs'));
        return $pdf->stream('data-gudang.pdf');
    }
}

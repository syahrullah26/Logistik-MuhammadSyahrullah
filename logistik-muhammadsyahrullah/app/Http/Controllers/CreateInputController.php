<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\StokBarang;
use App\Models\BarangMasuk;

class CreateInputController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'tipe_catatan' => 'required|in:1,2',
            'kode_barang' => 'required|string',
            'nama_barang' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'origin' => 'required|string',
            'tanggal_masuk' => 'required|date',
        ]);

        $tipecatatan = $request->tipe_catatan;
        $quantity = $request->quantity;

        $stok = StokBarang::where('kode_barang', $request->kode_barang)->where('nama_barang', $request->nama_barang)->first();

        if ($tipecatatan == '1') { 
            BarangMasuk::create($request->all());
            if ($stok) {
                $stok->update(['quantity' => $stok->quantity + $quantity]);
            } else {
                StokBarang::create([
                    'kode_barang' => $request->kode_barang,
                    'nama_barang' => $request->nama_barang,
                    'quantity' => $quantity,
                ]);
            }
        } elseif ($tipecatatan == '2') { 
            if (!$stok || $stok->quantity < $quantity) {
                return back()->withErrors(['quantity' => 'Jumlah barang keluar melebihi stok yang tersedia.']);
            }
            $data = $request->all();
            $data['destination'] = $request->origin;
            $data['tanggal_keluar'] = $request->tanggal_masuk;
            BarangKeluar::create($data);
            $stok->update(['quantity' => $stok->quantity - $quantity]);
        }

        return redirect()->route('landing_page.index')->with('success', 'Data berhasil disimpan.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\StokBarang;


class BarangKeluarController extends Controller
{
    public function index()
{
    $dataKeluar = BarangKeluar::all();
    return view('barang_keluar.index', compact('dataKeluar'));
}

public function create()
{
    return view('barang_keluar.create');
}

public function store(Request $request)
{
    BarangKeluar::create($request->all());
    $stok = StokBarang::where('kode_barang', $request->kode_barang)->first();
    if ($stok) {
        $stok->update(['quantity' => $stok->quantity + $request->quantity]);
    } else {
        StokBarang::create([
            'kode_barang' => $request->kode_barang,
            'quantity' => $request->quantity
        ]);
    }
    return redirect('/barang-masuk');
}

}

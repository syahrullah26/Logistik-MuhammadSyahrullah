<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\StokBarang;

class BarangMasukController extends Controller
{
    public function index()
{
    $dataMasuk = BarangMasuk::all();
    return view('barang_masuk.index', compact('dataMasuk'));
}

public function create()
{
    return view('barang_masuk.create');
}

public function store(Request $request)
{
    BarangMasuk::create($request->all());
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

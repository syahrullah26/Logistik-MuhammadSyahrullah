<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\StokBarang;

class LandingPageController extends Controller
{
    public function index()
{
    $dataKeluar = BarangKeluar::all();
    $dataMasuk = BarangMasuk::all();
    $data = StokBarang::all();
    return view('landing_page.index', compact('dataKeluar', 'dataMasuk', 'data'));

}
    public function history()
    {
    $dataKeluar = BarangKeluar::all();
    $dataMasuk = BarangMasuk::all();
    $data = StokBarang::all();
    return view('landing_page.history', compact('dataKeluar', 'dataMasuk', 'data'));
    }
}

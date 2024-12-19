<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokBarang;

class StokBarangController extends Controller
{
    public function index()
{
    $data = StokBarang::all();
    return view('landing_page.index', compact('data'));
}

}

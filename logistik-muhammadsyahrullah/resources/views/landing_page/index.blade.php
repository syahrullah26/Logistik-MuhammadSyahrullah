@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
    <main id="full-width-main" class="full-width-main">
        <div class="pagetitle">
            <h1>@yield('title')</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?page=beranda">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="container mt-4">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <div class="card-title">
                        <h1>STOK BARANG</h1>
                    </div>
                    <p>Berikut Ini Merupakan Informasi Barang Yang Tersedia Di Gudang Logistik, Menu <span><strong><a href="history">History</a></strong></span> Untuk Melihat Catatan Keluar & Masuk Barang</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover datatable" id="data">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td data-label='kode barang'>{{ $item->kode_barang }}</td>
                                        <td data-label='quantity'>{{ $item->nama_barang }}</td>
                                        <td data-label='quantity'>{{ $item->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">INPUT</h5>
                            <p class="card-text">Halaman Form Untuk Mencatat Barang Masuk dan Keluar</p>
                            <div class="d-flex align-items-center">
                                <div class="col-md-12">
                                    <form action="/input-catatan/store" method="POST">
                                        @csrf
                                        <label for="tipe_catatan">Tipe Catatan</label>
                                        <select name="tipe_catatan" class="form-control">
                                            <option value="1">Masuk</option>
                                            <option value="2">Keluar</option>
                                        </select>
                                        <label for="kode_barang">Kode Barang</label>
                                        <input class="form-control" type="text" name="kode_barang" required>
                                        <label for="nama_barang">Nama Barang</label>
                                        <input class="form-control" type="text" name="nama_barang" required>
                                        <label for="quantity">Quantity</label>
                                        <input class="form-control" type="number" name="quantity" required>
                                        <label for="origin">Origin</label>
                                        <input class="form-control" type="text" name="origin" required>
                                        <label for="tanggal_masuk">Tanggal Masuk</label>
                                        <input class="form-control" type="date" name="tanggal_masuk" required>
                                        <center><button class="btn btn-primary mt-3" type="submit">Simpan</button></center>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </main>

@endsection

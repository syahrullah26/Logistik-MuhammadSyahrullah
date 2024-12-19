@extends('layouts.app')

@section('title', 'History')

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
                        <h1>History Barang</h1>
                    </div>
                    <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-justified" type="button" role="tab" aria-controls="home"
                                aria-selected="true">Barang Masuk</button>
                        </li>
                        <li class="nav-item flex-fill" role="presentation">
                            <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Barang Keluar</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2" id="myTabjustifiedContent">
                        <div class="tab-pane fade show active" id="home-justified" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="table-responsive">
                                <p class="mt-3">Berikut Ini Merupakan Catatan Dari Barang <strong>Masuk</strong></p>
                                <table class="table table-striped table-sm table-hover datatable" id="data">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kode Barang</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Origin</th>
                                            <th scope="col">Tanggal Masuk</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataMasuk as $item)
                                            <tr>
                                                <td data-label='kode barang'>{{ $item->kode_barang }}</td>
                                                <td data-label='nama barang'>{{ $item->nama_barang }}</td>
                                                <td data-label='quantity'>{{ $item->quantity }}</td>
                                                <td data-label='origin'>{{ $item->origin }}</td>
                                                <td data-label='tanggal masuk'>{{ $item->tanggal_masuk }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-hover datatable" id="data">
                                <p class="mt-3">Berikut Ini Merupakan Catatan Dari Barang <strong>Keluar</strong></p>
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Origin</th>
                                        <th scope="col">Tanggal Masuk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataKeluar as $item)
                                        <tr>
                                            <td data-label='kode barang'>{{ $item->kode_barang }}</td>
                                            <td data-label='nama barang'>{{ $item->nama_barang }}</td>
                                            <td data-label='quantity'>{{ $item->quantity }}</td>
                                            <td data-label='origin'>{{ $item->destination}}</td>
                                            <td data-label='tanggal masuk'>{{ $item->tanggal_keluar }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
    </main>

@endsection

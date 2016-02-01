@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Pembelian')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pembelian</a></li>
        <li class="active">Lihat Pembelian</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pembelian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Pembelian</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Supplaier</th>
                                <th>Tanggal</th><th>Barang</th>
                                <th>Jumlah</th>
                                <th>Stok Barang</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pembelian->pembelian_id }}</td>
                                <td> {{ $pembelian->supplaier->nama }} </td>
                                <td> {{ $pembelian->tanggal }} </td>
                                <td> {{ $pembelian->barang->nama }} </td>
                                <td> {{ $pembelian->jumlah }} </td>
                                <td> {{ $pembelian->barang->stok }} </td>
                                <td> {{ $pembelian->harga }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

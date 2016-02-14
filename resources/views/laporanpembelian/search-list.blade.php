@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Laporan Pembelian')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Laporan Pembelian</a></li>
        <li class="active">Here</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Pembelian Barang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Stok Awal</th>
                                <th>Stok Akhir</th>
                                <th>Barang Masuk</th>
                                <th>Barang Keluar</th>
                                <th>Sisa Barang</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($laporanstoks as $laporanstok)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td>{{ $laporanstok->stokawal }}</td>
                                <td>{{ $laporanstok->stokakhir }}</td>
                                <td>{{ $laporanstok->masuk }}</td>
                                <td>{{ $laporanstok->keluar }}</td>
                                <td>{{ $laporanstok->sisa }} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

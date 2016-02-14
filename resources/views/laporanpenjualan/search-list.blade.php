@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Laporan Penjualan Barang')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Laporan Penjualan</a></li>
        <li class="active">Here</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Penjualan </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Tanggal</th>
                                <th>Total Penjualan</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($laporanpenjualans as $laporanpenjualan)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td>{{ $laporanpenjualan->jumlah }}</td>
                                <td>{{ $laporanpenjualan->harga }}</td>
                                <td>{{ $laporanpenjualan->tanggal }}</td>
                                <td>{{ $laporanpenjualan->total }}</td>
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

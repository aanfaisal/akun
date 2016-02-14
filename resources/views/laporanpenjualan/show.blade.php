@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Jurnal Penjualan')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jurnal Penjualan</a></li>
        <li class="active">Lihat Jurnal Penjualan</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jurnal Penjualan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Jurnal Penjualan</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>ID Penjualan </th><th>No.nota </th><th>Tanggal Jurnal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $jurnalpenjualan->jurnalpenjualan_id }}</td> <td> {{ $jurnalpenjualan->penjualan_id }} </td><td> {{ $jurnalpenjualan->nonota_id }} </td><td> {{ $jurnalpenjualan->tgl_jurnal }} </td>
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

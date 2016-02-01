@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data %%crudName%%')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Penjualan</a></li>
        <li class="active">Lihat Penjualan</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Penjualan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Penjualan</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>No.nota</th><th>Nama Barang</th><th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $penjualan->penjualan_id }}</td> <td> {{ $penjualan->nonota_id }} </td><td> {{ $penjualan->barang_id }} </td><td> {{ $penjualan->jumlah }} </td>
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

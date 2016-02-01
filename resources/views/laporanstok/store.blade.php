@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Kartu Stok')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kartu Stok</a></li>
        <li class="active">Lihat Kartu Stok</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kartu Stok</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kartustok</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>ID Barang</th><th>Tanggal</th><th>Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kartustok->kartustok_id }}</td>
                                <td> {{ $kartustok->barang_id }} </td>
                                <td> {{ $kartustok->tgl }} </td>
                                <td> {{ $kartustok->jenis }} </td>

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

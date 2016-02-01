@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data %%crudName%%')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jurnal Pembelian</a></li>
        <li class="active">Lihat Jurnal Pembelian</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jurnal Pembelian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Jurnal Pembelian</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>ID Pembelian</th><th>ID Supplaier</th><th>Tanggal Jurnal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $jurnalpembelian->jurnalpembelian_id }}</td> <td> {{ $jurnalpembelian->pembelian_id }} </td><td> {{ $jurnalpembelian->supplaier_id }} </td><td> {{ $jurnalpembelian->tgl_jurnal }} </td>
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

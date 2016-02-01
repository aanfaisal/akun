@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Jurnal Pembelian')
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
                                <th>No. </th>
                                <th>Nomor Pembelian</th>
                                <th>Nama Supplaier</th>
                                <th>Tanggal Jurnal</th>
                                <th>Nomor Akun</th>
                                <th>Debet</th>
                                <th>Kredit</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $jurnalpembelian->jurnalpembelian_id }}</td> <td> {{ $jurnalpembelian->pembelian_id }} </td>
                                <td> {{ $jurnalpembelian->supplaier->nama }} </td>
                                <td> {{ $jurnalpembelian->tgl_jurnal }} </td>
                                <td> {{ $jurnalpembelian->akun->keterangan }} </td>
                                <td> {{ $jurnalpembelian->debet }} </td>
                                <td> {{ $jurnalpembelian->kredit }} </td>
                                <td> {{ $jurnalpembelian->ket_jurnal }} </td>
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

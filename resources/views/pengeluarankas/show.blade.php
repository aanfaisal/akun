@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Pengeluaran Kas')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pengeluaran Kas</a></li>
        <li class="active">Lihat Pengeluaran Kas</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengeluaran Kas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Pengeluarankas</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>No. Pembelian </th>
                                <th>Nama Supplaier</th>
                                <th>Tanggal Jurnal</th>
                                <th>Debet Utang</th>
                                <th>Debet Pembelian</th>
                                <th>Kredit Kas</th>
                                <th>Keterangan Jurnal </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pengeluaranka->pengeluarankas_id }}</td> <td> {{ $pengeluaranka->pembelian_id }} </td><td> {{ $pengeluaranka->supplaier->nama }} </td>
                                <td> {{ $pengeluaranka->tgl_jurnal }} </td>
                                <td> {{ $pengeluaranka->debet_utang}} </td>
                                <td> {{ $pengeluaranka->debet_pembelian}} </td>
                                <td> {{ $pengeluaranka->kreditkas }} </td>
                                <td> {{ $pengeluaranka->ket_jurnal }} </td>
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

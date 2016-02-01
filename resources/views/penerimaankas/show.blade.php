@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Penerimaan Kas')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Penerimaan Kas</a></li>
        <li class="active">Lihat Penerimaan Kas</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Penerimaan Kas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>PenerimaanKas</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>No Penjualan</th>
                                <th>Nomor Nota</th>
                                <th>Tanggal Jurnal</th>
                                <th>Debet Kas</th>
                                <th>Keterangan Jurnal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $penerimaanka->penerimaankas_id }} </td>
                                <td> {{ $penerimaanka->penjualan_id }} </td>
                                <td> {{ $penerimaanka->nonota->nama }} </td>
                                <td> {{ $penerimaanka->tgl_jurnal }} </td>
                                <td> {{ $penerimaanka->debetkas }} </td>
                                <td> {{ $penerimaanka->ket_jurnal }} </td>
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

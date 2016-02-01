@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Jurnal Umum')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jurnal Umum</a></li>
        <li class="active">Lihat Jurnal Umum</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jurnal Umum</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Jurnal Umum</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th><th>Keterangan</th> <th>Tanggal Jurnal</th><th>ID Akun</th><th>Debet</th><th>Kredit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $jurnalumum->jurnalumum_id }}</td>
                                <td>{{ $jurnalumum->ket_jurnal }} </td>
                                <td> {{ $jurnalumum->tgl_jurnal }} </td>
                                <td> {{ $jurnalumum->akun->keterangan }} </td>
                                <td> {{ $jurnalumum->debet }} </td>
                                <td> {{ $jurnalumum->kredit }} </td>
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

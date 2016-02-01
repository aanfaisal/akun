@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Barang')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Barang</a></li>
        <li class="active">Lihat Barang</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Barang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Lihat Data Barang</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th><th>Nama</th><th>Kategori</th><th>Jenis Id</th><th>Merk Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $barang->barang_id }}</td>
                                <td>{{ $barang->nama}}</td>
                                <td> {{ $barang->kategori->kategori }} </td>
                                <td> {{ $barang->jenis->nama_jenis }} </td>
                                <td> {{ $barang->merk->namamerk }} </td>
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

@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Jurnalpembelian')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jurnal Pembelian</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jurnalpembelian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Jurnalpembelian <a href="{{ url('jurnalpembelian/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Jurnal Pembelian</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nomor Pembelian</th>
                                <th>Nama Supplaier</th><th>Tanggal Jurnal</th>
                                <th>Akun COA </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($jurnalpembelian as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('jurnalpembelian', $item->jurnalpembelian_id) }}">{{ $item->pembelian_id }}</a></td>
                                <td>{{ $item->supplaier->nama }}</td>
                                <td>{{ $item->tgl_jurnal }}</td>
                                <td>{{ $item->akun->keterangan }}</td>
                                <td>
                                    <a href="{{ url('jurnalpembelian/' . $item->jurnalpembelian_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['jurnalpembelian', $item->jurnalpembelian_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $jurnalpembelian->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

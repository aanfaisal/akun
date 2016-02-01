@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Penerimaan Kas')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Penerimaan Kas</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Penerimaankas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Penerimaankas <a href="{{ url('penerimaankas/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Penerimaan Kas</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>No.Penjualan</th>
                                <th> Nomor Nota </th>
                                <th> Tanggal Jurnal </th>
                                <th> Debet Kas </th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($penerimaankas as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('penerimaankas', $item->penerimaankas_id) }}">
                                {{ $item->penjualan_id }}</a></td>
                                <td>{{ $item->nonota->nama }}</td>
                                <td>{{ $item->tgl_jurnal }}</td>
                                <td>{{ $item->debetkas }} </td>
                                <td>
                                    <a href="{{ url('penerimaankas/' . $item->penerimaankas_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['penerimaankas', $item->penerimaankas_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $penerimaankas->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

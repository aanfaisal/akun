@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Jurnal Umum')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jurnal Umum</a></li>
        <li class="active">Here</li>
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

                <h1>Jurnal Umum <a href="{{ url('jurnalumum/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Jurnal Umum</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Tanggal Jurnal</th><th>ID Akun COA</th><th>Debet</th><th>Kredit</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($jurnalumum as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('jurnalumum', $item->jurnalumum_id) }}">
                                {{ $item->tgl_jurnal }}</a></td>
                                <td>{{ $item->akun->keterangan }}</td>
                                <td>{{ $item->debet }}</td>
                                <td>{{ $item->kredit }}</td>
                                <td>
                                    <a href="{{ url('jurnalumum/' . $item->jurnalumum_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['jurnalumum', $item->jurnalumum_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $jurnalumum->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Laporan pembelian')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Laporan Pembelian</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Pembelian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

            {!! Form::open() !!}


            <div class="form-group {{ $errors->has('tgl_pembelianstart') ? 'has-error' : ''}}">
                {!! Form::label('tgl_pembelianstart', 'Tanggal Start: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl_pembelianstart', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tgl_jurnal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br>
            <center><h3>Sampai</h3></center>
            <br>
            <div class="form-group {{ $errors->has('tgl_pembelianover') ? 'has-error' : ''}}">
                {!! Form::label('tgl_pembelianover', 'Tanggal End: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl_pembelianover', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tgl_pembelianover', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br>
            <br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Cari Data', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                </div>
                </div>
                </div>
        </div>
</section>
@endsection

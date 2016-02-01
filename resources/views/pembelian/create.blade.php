@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data Pembelian')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pembelian</a></li>
        <li class="active">Tambah Pembelian</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pembelian</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Pembelian</h1>
                    <hr/>

                    {!! Form::open(['url' => 'pembelian', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('supplaier_id') ? 'has-error' : ''}}">
                {!! Form::label('supplaier_id', 'Nama Supplaier : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('supplaier_id',$supplaiers, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('supplaier_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : ''}}">
                {!! Form::label('tanggal', 'Tanggal : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tanggal', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('barang_id') ? 'has-error' : ''}}">
                {!! Form::label('barang_id', 'Nama Barang: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('barang_id', $barangs,  null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
                {!! Form::label('jumlah', 'Jumlah: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jumlah', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
                {!! Form::label('harga', 'Harga: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('harga', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status Pembelian : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('status', array('Tunai'=>'Tunai','Kredit'=>'Kredit') ,null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl_jatuhtempo') ? 'has-error' : ''}}">
                {!! Form::label('tgl_jatuhtempo', 'Tanggal Jatuh Tempo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl_jatuhtempo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tgl_jatuhtempo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('totalpembelian') ? 'has-error' : ''}}">
                {!! Form::label('totalpembelian', 'Total Pembelian: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('totalpembelian', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('totalpembelian', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('statusutang') ? 'has-error' : ''}}">
                {!! Form::label('statusutang', 'Status Hutang: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('statusutang', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('statusutang', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Tambah Data', ['class' => 'btn btn-primary form-control']) !!}
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

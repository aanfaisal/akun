@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data Kartu Stok')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kartu Stok</a></li>
        <li class="active">Tambah Kartu Stok</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kartu Stok</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Kartu Stok</h1>
                    <hr/>

                {!! Form::open(['url' => 'kartustok', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama Barang: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('nama', $nama , null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl') ? 'has-error' : ''}}">
                {!! Form::label('tgl', 'Tanggal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jenis') ? 'has-error' : ''}}">
                {!! Form::label('jenis', 'Jenis: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('jenis', $jenis, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jenis', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('transaksi_id') ? 'has-error' : ''}}">
                {!! Form::label('transaksi_id', 'ID Transaksi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('transaksi_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('transaksi_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('stokawal') ? 'has-error' : ''}}">
                {!! Form::label('stokawal', 'Stok Awal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('stokawal', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('stokawal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('masuk') ? 'has-error' : ''}}">
                {!! Form::label('masuk', 'Masuk: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('masuk', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('masuk', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('keluar') ? 'has-error' : ''}}">
                {!! Form::label('keluar', 'Keluar: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('keluar', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('keluar', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('stokakhir') ? 'has-error' : ''}}">
                {!! Form::label('stokakhir', 'Stok Akhir: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('stokakhir', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('stokakhir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sisa') ? 'has-error' : ''}}">
                {!! Form::label('sisa', 'Sisa : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('sisa', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('sisa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
                {!! Form::label('harga', 'Harga : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('harga', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hargabeli') ? 'has-error' : ''}}">
                {!! Form::label('hargabeli', 'Harga Beli: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('hargabeli', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('hargabeli', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('laba') ? 'has-error' : ''}}">
                {!! Form::label('laba', 'Laba: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('laba', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('laba', '<p class="help-block">:message</p>') !!}
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

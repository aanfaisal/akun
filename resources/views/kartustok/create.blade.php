@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data kartustok')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>kartustok</a></li>
        <li class="active">Tambah kartustok</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kartustok</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Kartustok</h1>
                    <hr/>

                    {!! Form::open(['url' => 'kartustok', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('barang_id') ? 'has-error' : ''}}">
                {!! Form::label('barang_id', 'Nama Barang : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('barang_id', $barang, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl') ? 'has-error' : ''}}">
                {!! Form::label('tgl', 'Tgl: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tgl', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jenis_id') ? 'has-error' : ''}}">
                {!! Form::label('jenis_id', 'Jenis Barang : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('jenis_id',$jenis, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jenis_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('stokawal') ? 'has-error' : ''}}">
                {!! Form::label('stokawal', 'Stokawal: ', ['class' => 'col-sm-3 control-label']) !!}
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
                {!! Form::label('stokakhir', 'Stokakhir: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('stokakhir', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('stokakhir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('sisa') ? 'has-error' : ''}}">
                {!! Form::label('sisa', 'Sisa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('sisa', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('sisa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
                {!! Form::label('harga', 'Harga: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('harga', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('hargabeli') ? 'has-error' : ''}}">
                {!! Form::label('hargabeli', 'Hargabeli: ', ['class' => 'col-sm-3 control-label']) !!}
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
                            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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

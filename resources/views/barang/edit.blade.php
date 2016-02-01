@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data barang')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Barang</a></li>
        <li class="active">Edit barang</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit Data Barang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Barang</h1>
                <hr/>

                {!! Form::model($barang, [
                    'method' => 'PATCH',
                    'url' => ['barang', $barang->barang_id],
                    'class' => 'form-horizontal'
                ]) !!}

            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('kategori_id') ? 'has-error' : ''}}">
                {!! Form::label('kategori_id', 'Kategori: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('kategori_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('kategori_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jenis_id') ? 'has-error' : ''}}">
                {!! Form::label('jenis_id', 'Jenis : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jenis_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jenis_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('merk_id') ? 'has-error' : ''}}">
                {!! Form::label('merk_id', 'Merk : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('merk_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('merk_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('satuan_id') ? 'has-error' : ''}}">
                {!! Form::label('satuan_id', 'Satuan : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('satuan_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('satuan_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('harga_beli') ? 'has-error' : ''}}">
                {!! Form::label('harga_beli', 'Harga Beli: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('harga_beli', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('harga_beli', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('harga_jual') ? 'has-error' : ''}}">
                {!! Form::label('harga_jual', 'Harga Jual: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('harga_jual', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('harga_jual', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('stok') ? 'has-error' : ''}}">
                {!! Form::label('stok', 'Stok: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('stok', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('konversi') ? 'has-error' : ''}}">
                {!! Form::label('konversi', 'Konversi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('konversi', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('konversi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('minstok') ? 'has-error' : ''}}">
                {!! Form::label('minstok', 'Minstok: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('minstok', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('minstok', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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

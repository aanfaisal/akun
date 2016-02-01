@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data Penjualan')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Penjualan</a></li>
        <li class="active">Edit Data Penjualan</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Penjualan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Penjualan</h1>
                <hr/>

                {!! Form::model($penjualan, [
                    'method' => 'PATCH',
                    'url' => ['penjualan', $penjualan->penjualan_id],
                    'class' => 'form-horizontal'
                ]) !!}

            <div class="form-group {{ $errors->has('nonota_id') ? 'has-error' : ''}}">
                {!! Form::label('nonota_id', 'No.nota : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('nonota_id', $nonota, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nonota_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('barang_id') ? 'has-error' : ''}}">
                {!! Form::label('barang_id', 'Nama Barang : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('barang_id', $barangs, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
                {!! Form::label('jumlah', 'Jumlah: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('jumlah', null, ['class' => 'form-control', 'required' => 'required']) !!}
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
            <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : ''}}">
                {!! Form::label('tanggal', 'Tanggal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tanggal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
                {!! Form::label('total', 'Total Harga : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Update Data', ['class' => 'btn btn-primary form-control']) !!}
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

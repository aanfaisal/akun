@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data pengeluarankas')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Pengeluaran Kas</a></li>
        <li class="active">Tambah Pengeluaran Kas</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pengeluaran Kas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Pengeluaran Kas</h1>
                    <hr/>

                {!! Form::open(['url' => 'pengeluarankas', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('pembelian_id') ? 'has-error' : ''}}">
                {!! Form::label('pembelian_id', 'Nomor Pembelian : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('pembelian_id',$pembelians, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pembelian_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('supplaier_id') ? 'has-error' : ''}}">
                {!! Form::label('supplaier_id', 'Nama Supplaier : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('supplaier_id',$supplaiers, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('supplaier_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl_jurnal') ? 'has-error' : ''}}">
                {!! Form::label('tgl_jurnal', 'Tanggal Jurnal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl_jurnal', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tgl_jurnal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('debet_utang') ? 'has-error' : ''}}">
                {!! Form::label('debet_utang', 'Debet Utang: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('debet_utang', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('debet_utang', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('debet_pembelian') ? 'has-error' : ''}}">
                {!! Form::label('debet_pembelian', 'Debet Pembelian: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('debet_pembelian', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('debet_pembelian', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('kreditkas') ? 'has-error' : ''}}">
                {!! Form::label('kreditkas', 'Kredit Kas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('kreditkas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('kreditkas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ket_jurnal') ? 'has-error' : ''}}">
                {!! Form::label('ket_jurnal', 'Keterangan Jurnal : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('ket_jurnal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ket_jurnal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ref') ? 'has-error' : ''}}">
                {!! Form::label('ref', 'Referensi : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ref', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ref', '<p class="help-block">:message</p>') !!}
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

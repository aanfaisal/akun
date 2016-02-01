@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data Penerimaan Kas')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Penerimaan Kas</a></li>
        <li class="active">Tambah Penerimaan Kas</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jurnal Penerimaan Kas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Penerimaanka</h1>
                    <hr/>

                    {!! Form::open(['url' => 'penerimaankas', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('penjualan_id') ? 'has-error' : ''}}">
                {!! Form::label('penjualan_id', 'Nomor Penjualan : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('penjualan_id',$penjualans, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('penjualan_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nonota_id') ? 'has-error' : ''}}">
                {!! Form::label('nonota_id', 'No.nota : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::select('nonota_id',$nonota, null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nonota_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgl_jurnal') ? 'has-error' : ''}}">
                {!! Form::label('tgl_jurnal', 'Tanggal Jurnal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgl_jurnal', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tgl_jurnal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('debetkas') ? 'has-error' : ''}}">
                {!! Form::label('debetkas', 'Debet Kas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('debetkas', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('debetkas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ket_jurnal') ? 'has-error' : ''}}">
                {!! Form::label('ket_jurnal', 'Keterangan Jurnal: ', ['class' => 'col-sm-3 control-label']) !!}
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

@extends('layouts.admin')

@section('breadcrump', 'Order')

@section('action')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    {!! Form::open(['action' => 'TransaksiController@store', 'method' => 'POST', 'files' => true]) !!}
                        
                        {{Form::hidden('id_customer', '1')}}
                        
                        <div class="form-group">
                            <label class="col-md-12">Barang</label>
                            <div class="col-md-12">
                                {{Form::select('id_barang', $barangs->pluck('nama', 'id'), null, ['class' => 'form-control form-control-line', 'placeholder' => 'Nama Barang'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Jumlah</label>
                            <div class="col-md-12">
                                {{Form::text('jumlah', '', ['class' => 'form-control form-control-line', 'placeholder' => 'Jumlah'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">File Desain</label>
                            <div class="col-md-12">
                                {{Form::file('file')}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Keterangan</label>
                            <div class="col-md-12">
                                {{Form::textarea('keterangan', '', ['class' => 'form-control form-control-line', 'placeholder' => 'Keterangan'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::submit('Create', ['class' => 'btn btn-success'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
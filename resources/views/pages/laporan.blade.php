@extends('layouts.admin')

@section('breadcrump', 'Laporan')

@section('action')
  <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"><i class="fa fa-cloud-download m-r-10" aria-hidden="true"></i>Download Laporan</a>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-block">
          <h4 class="card-title">Data Penjualan</h4>
          <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Pesanan</th>
                      <th>Warna</th>
                      <th>Desain</th>
                      <th>Ket.</th>
                      <th>Qty</th>
                      <th>Harga</th>
                      <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Fauzan</td>
                    <td>Kaos</td>
                    <td>Merah</td>
                    <td>
                      <div class="col-md-8 col-8 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
                    </div>
                    </td>
                    <td>-</td>
                    <td>1</td>
                    <td>Rp. 50.000</td>
                    <td>Rp. 50.000</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Deshmukh</td>
                    <td>Kaos</td>
                    <td>Merah</td>
                    <td>
                      <div class="col-md-8 col-8 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"><i class="fa fa-cloud-upload" aria-hidden="true"></i></a>
                      </div>
                    </td>
                    <td>-</td>
                    <td>1</td>
                    <td>Rp. 50.000</td>
                    <td>Rp. 50.000</td>
                  </tr>    
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
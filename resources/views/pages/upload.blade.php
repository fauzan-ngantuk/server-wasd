@extends('layouts.admin')

@section('breadcrump', 'upload')

@section('action')
@endsection

@section('content')
  <div class="row">
    
  <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-10"> <img src="{{ url('/img/users/baju.jpg') }}"  width="150" />

                        <br> </br>
                        <div class="form-group">
                            <div class="col-sm-10 ">
                                <button class="btn btn-success"><i class="fa fa-cloud-upload m-r-5" aria-hidden="true"></i>Upload</button>
                            </div>
                        </div>
                    </center>

                </div>
            </div>
        </div>
                       
                   
                    <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-block">
                            <form class="form-horizontal form-material">

                                
                                <div class="form-group">
                                    <label class="col-md-12">Nama</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Kaos" class="form-control form-control-line">
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label class="col-sm-12">Bahan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Catton 30S</option>
                                            <option>Catton 20s</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Bahan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Warna</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line">
                                            <option>Hitam</option>
                                            <option>Putih</option>
                                            <option>Merah</option>
                                            <option>Gray</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Harga</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Rp. 50.000,-" class="form-control form-control-line">
                                    </div>
                                </div>
                                   

                                     <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <center>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success"><i class="fa fa-refresh m-r-10" aria-hidden="true"></i>Update Produk</button>
                                    </div>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Produk</h3>  
            </div>
        </div>

        <!-- Column -->

        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-block">
                        <center class="m-t-10"> <img src="{{ url('/img/users/baju.jpg') }}"  width="150" />
                                <br> </br>
                                <div class="form-group">
                                    <div class="col-sm-10 ">
                                        <button class="btn btn-success"><i class="fa fa-trash-o m-r-5" aria-hidden="true"></i>Delete
                                        </button>
                                    </div>
                                </div>
                                <h3 class="font-normal">Kaos Polos Merah</h3>
                                <span class="bold" itemprop="priceCurrency" content="IDR">Rp </span>
                                <span class="bold" itemprop="price">50.000</span>

                        </center>
                    </div>
                </div>
            </div>
         </div>
@endsection
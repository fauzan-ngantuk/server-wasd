@extends('layouts.admin')

@section('breadcrump', 'Dashboard')

@section('action')
@endsection

@section('content')
  <div class="row">
    <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Total Transaksi : {{ $count }}</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i>{{ $count }}</h2>
                        <span class="text-muted">Income</span>
                    </div>
                    <span class="text-success">75%</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Column -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Produksi Saat Ini : {{ $on_progress }}</h4>
                    <div class="text-right">
                        <h2 class="font-light m-b-0"><i class="ti-arrow-down text-info"></i> 1</h2>
                        <span class="text-muted">Income</span>
                    </div>
                    <span class="text-info">35%</span>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Column -->
    </div>
<!-- Row -->
<!-- Row -->
    <div class="row">
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Revenue Statistics</h4>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
<!-- Row -->
<!-- Row -->
@endsection

@section('js')
     <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="{{ url('/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ url('/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ url('js/flot-data.js') }}"></script>
@endsection
@extends('layouts.dashboard')

@section('title', 'Dashboard | phonhadat.com.vn')

@section('content')
    <div class="grid wide">
        {!! html_page_title('fa-solid fa-chart-simple', 'Dashboard') !!}
        <div class="row">
            <div class="col l-6 m-12 c-12">
                <div class="chart">
                    <h2 class="chart-heading">Sales Analytics</h2>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col l-6 m-12 c-12">
                <div class="chart">
                    <h2 class="chart-heading">Sales Analytics</h2>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
            <div class="col l-6 m-12 c-12">
                <div class="chart">
                    <h2 class="chart-heading">Sales Analytics</h2>
                    <canvas id="myChart3"></canvas>
                </div>
            </div>
            <div class="col l-6 m-12 c-12">
                <div class="chart">
                    <h2 class="chart-heading">Sales Analytics</h2>
                    <canvas id="myChart4"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard/chart.js') }}"></script>
@endsection

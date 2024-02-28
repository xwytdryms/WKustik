@extends('dashboard.layouts.main')

@section('css')
<script src="https://cdn.plot.ly/plotly-2.24.1.min.js" charset="utf-8"></script>
@endsection

@section('container')
    <h1>Ini Halaman Monitoring PA</h1>

    <div class="containera">
        <div class="card">
            <div id="message" style="color:black;  font-size: 100%;text-align: center;"></div>
            <div id="state" style="margin:0 auto;width:100px; height:100px;"></div>
            <div id="tester" style="width:600px;height:250px;"></div>
        </div>
    </div>

@endsection

@section('javascript')
    <script src="/js/monitoringpa.js"></script>
    
@endsection
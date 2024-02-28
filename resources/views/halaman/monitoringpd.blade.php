 @extends('dashboard.layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/monitoringpd.css">
@endsection
    
@section('container')

    <h1 style="text-align: center">Halaman Monitoring PD</h1> 

    {{-- Severity Level Indicator --}}
    
       <div class="containera">
        <h3><b>Status:</b></h3>
        <div id="message" style="color:black; font-weight:bold; font-size: 200%;text-align: center; line-height: 10%;">
        </div>
        <br>
        <div id="box1" class="box1"></div>
        <div id="box2" class="box2"></div>
        <div id="box3" class="box3"></div>
    </div>
    
    <div class="containera">
        <div class="wrapper1">
        <h3><b>Data 1 menit terakhir:</b></h3>
        <div id="boxb" class="boxb"><br>
            <p>Rata-rata dB:</p>
            <div id="average_dB"></div>
        </div>
        <div id="boxb" class="boxb"><br>
            <p>Arc Counter:</p>
            <div id="countVolt"></div>
        </div>
    </div>
    
    <div class="wrapper1">
        <div id="boxb" class="boxb"><br>
            <p>dB min:</p>
            <div id="dB_min"></div>
        </div>
        <div id="boxb" class="boxb"><br>
            <p>dB max: {{ $values->dB_max }}</p>
            <div id="dB_max"></div>
        </div>
    </div>
    
    <div class="container2">
        <div id="boxe" class="boxe"> <br>
            <p>Time:</p>
            <div id="durasi"></div>
        </div>
        <a class="btn btn-danger mt-3" href="/monitoringpa">Lihat Detail Arc Counter</a>
    </div>
@endsection

@section('javascript')
    <script src="/js/monitoringpd.js"></script>
@endsection
  

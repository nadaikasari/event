@extends('layouts.app')
@section('title', 'SKKM')

@section('content')
<div class="row">
    <div class="col">
        <button class="btn btn-primary" id="button-cam-front">Buka Kamera Depan</button>
        <button class="btn btn-primary" id="button-cam-back">Buka Kamera Belakang</button>
    </div>        
</div>

<div class="row">
    <div class="col">
        <style>
        #preview{
        width:500px;
        height: 500px;
        }
        </style>
        <video id="preview"></video>
        {{-- <div id="reader" width="600px"></div> --}}
    </div>
</div>
<br>

@endsection


@section('script')
<script type="text/javascript" src="instascan.min.js"></script>
    <script>
        // function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        // console.log(`Code matched = ${decodedText}`, decodedResult);
        // html5QrcodeScanner.clear();
        //     window.location.href = decodedText;
        // }

        // function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        // console.warn(`Code scan error = ${error}`);
        // }

        // var html5QrcodeScanner = new Html5QrcodeScanner(
        //     "reader", { fps: 10, qrbox: 250 });
        // html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>


<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
<script type="text/javascript">
    var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: true });
    scanner.addListener('scan',function(content){
        window.location.href=content;
    });

    $("#button-cam-front").click(function() {
        Instascan.Camera.getCameras().then(function (cameras){
            if(cameras.length>0){
                scanner.start(cameras[0]);
            }else{
                console.error('No cameras found.');
                alert('No cameras found.');
            }
            }).catch(function(e){
                console.error(e);
                alert(e);
        });
    });

    $("#button-cam-back").click(function() {
        Instascan.Camera.getCameras().then(function (cameras){
            if(cameras.length>0){
                // scanner.start(cameras[0]);
                scanner.start(cameras[2])
            }else{
                console.error('No cameras found.');
                alert('No cameras found.');
            }
            }).catch(function(e){
                console.error(e);
                alert(e);
        });
    });
</script>

@endsection

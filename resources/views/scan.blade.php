@extends('layouts.app')
@section('title', 'SKKM')

@section('content')
<div class="row">
    <div class="col">
        <div id="reader" width="600px"></div>
    </div>
</div>
<br>

@endsection



@section('script')
    
<script src="https://unpkg.com/html5-qrcode" type="text/javascript">
    function onScanSuccess(decodedText, decodedResult) {
    // handle the scanned code as you like, for example:
    // console.log(`Code matched = ${decodedText}`, decodedResult);
    html5QrcodeScanner.clear();
        window.location.href = decodedText;
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);
</script>

@endsection
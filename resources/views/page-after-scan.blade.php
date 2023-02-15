@extends('layouts.app')
@section('title', 'Status Absensi')

@section('content')
    <br><br><br><br><br>
    <div class="container">
        <div class="d-flex mt-5 align-items-center justify-content-center" style="height: 250px;">
            <div class="row text-center">
                <div class="row">
                    <div class="col">
                        @if ($bodyResponse['status'] == "1")
                            <img src="{{url('img/success.png')}}" alt="Status Success" width="250" height="250">
                        @else 
                            <img src="{{url('img/failed.png')}}" alt="Status Failed" width="250" height="250">
                        @endif
                        <br><br>
                        <h1>{{$bodyResponse['message']}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
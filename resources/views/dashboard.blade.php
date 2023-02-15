@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<style>
    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        /* here */
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    #mydiv>.btn-default {
        background: transparent;
    }

    .bg-proposal {
        background: #D7D0F6;
    }

    .bg-terbuka {
        background: #C8E8FF;
    }

    .bg-skripsi {
        background: #E0FFE3;
    }

    .bg-yudisium {
        background: #FFEBB0;
    }

    .bg-kp {
        background: #FFDCDB;
    }

    .bg-kelas {
        background: #E0FFE3;
    }

    .bg-surat {
        background: #C8E8FF;
    }

    .btn-lihat {
        background: #FFC53B;
        text-align: center;
        color: black;
    }

    .stretch-card {
        display: -webkit-flex;
        display: flex;
        -webkit-align-items: stretch;
        align-items: stretch;
        -webkit-justify-content: stretch;
        justify-content: stretch;
    }

    .stretch-card > .card {
        width: 100%;
        min-width: 100%;
    }

    #matriksEvent {
        height: 500px;
    }

</style>

<div class="container-fluid p-0">

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3>Selamat datang kembali!</h3>
        </div>

    </div>

@endsection

@section('script')
    <script type="text/javascript"> 

    </script>
@endsection

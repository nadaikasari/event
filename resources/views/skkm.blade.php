@extends('layouts.app')
@section('title', 'SKKM')

@section('content')
<div class="row">
    <div class="col-1">
        <h1 style="text-color:powderblue;">SKKM</h1>
    </div>
    <div class="col">
        <a href="/scanqr" type="button" class="btn btn-primary">Scan QR</a>
    </div>
</div>
<br>

<div class="row">
    <div class="card-header w-100">
        @if (session('successMessage'))
        <strong id="successMessage" hidden>{{ session('successMessage') }}</strong>
        @elseif(session('errorMessage'))
        <strong id="errorMessage" hidden>{{ session('errorMessage') }}</strong>
        @endif
        <div class="row ml-0 mt-2">
            <div class="col-md-6">
                <h3 class="h3">Data Kegiatan</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card flex">
            <div class="card-body py-4">
                <div class="media">
                    <div class="media-body">
                        <h6 class="mb-0">Total SKKM yang telah ditempuh</h6>
                        <h1 class="mb-1 mt-2">{{$response['total_point_skkm']}}</h1>
                    </div>
                    <div class="d-inline-block ml-2">
                        <div class="stat bg-proposal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card flex">
            <div class="card-body py-4">
                <div class="media">
                    <div class="media-body">
                        <h6 class="mb-0">Sisa SKKM yang masih harus ditempuh</h6>
                        <h1 class="mb-1 mt-2">{{$response['rest_skkm']}}</h1>
                    </div>
                    <div class="d-inline-block ml-2">
                        <div class="stat bg-terbuka">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card flex">
            <div class="card-body py-4">
                <div class="media">
                    <div class="media-body">
                        <h6 class="mb-0">Jumlah kegiatan yang telah diikuti</h6>
                        <h1 class="mb-1 mt-2">{{$response['total_attendance_event']}}</h1>
                    </div>
                    <div class="d-inline-block ml-2">
                        <div class="stat bg-skripsi">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header w-100">
                @if (session('successMessage'))
                <strong id="successMessage" hidden>{{ session('successMessage') }}</strong>
                @elseif(session('errorMessage'))
                <strong id="errorMessage" hidden>{{ session('errorMessage') }}</strong>
                @endif
                <div class="row ml-0 mt-2">
                    <div class="col-md-6">
                        <h3 class="h3">Data Kegiatan</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <input type="hidden" class="current-tab-id">
                <div class="tab"> 
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-1" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th width="5%">Nama Kegiatan</th>
                                            <th width="5%">Level Kegiatan</th>
                                            <th width="5%">Tanggal</th>
                                            <th width="5%">Partisipan</th>
                                            <th width="5%">SKKM</th>
                                            <th width="5%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"> </script>
    <script type="text/javascript">
        loadTable();

        function loadTable() {
            let url = "{{ url('getListEvent') }}";
            let table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                language: {
                    zeroRecords: "Tidak ada data"
                },
                ajax: url,
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'event_name',
                        name: 'event_name'
                    },
                    {
                        data: 'event_level',
                        name: 'event_level'
                    },
                    {
                        data: 'implementation_time',
                        name: 'implementation_time'
                    },
                    {
                        data: 'participant_type',
                        name: 'participant_type'
                    },
                    {
                        data: 'skkm',
                        name: 'skkm'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });
        }

        const codeReader = new ZXing.BrowserQRCodeReader();
  
        codeReader.getVideoInputDevices()
            .then((videoInputDevices) => {
            const source = videoInputDevices[0];
            codeReader.decodeFromInputVideoDevice(source.deviceId, 'qrreader')
                .then((result) => {
                console.log(result.text);
                })
                .catch((err) => {
                console.error(err);
                });
            })
            .catch((err) => {
            console.error(err);
            });
    </script>
@endsection
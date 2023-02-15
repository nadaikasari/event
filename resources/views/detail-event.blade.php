@extends('layouts.app')
@section('title', 'Detail Event')

@section('content')
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
                        <div class="col-md-12">
                            <h3 class="h3">{{$response['event_name']}}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                          <div class="col-3">
                            <img src="data:image/png;base64,{{$response['photo_url']}}" alt="Image Poster" class="img-thumbnail">
                          </div>
                          <div class="col-9">
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Tingkatan</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" value="{{$response['level_name']}}">
                                </div>
                            </div>
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Penyelenggara</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" value="{{$response['organizer_name']}}">
                                </div>
                            </div>
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Pembicara</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" value="{{$response['speaker']}}">
                                </div>
                            </div>
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Tanggal Pelaksanaan</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" value="{{$response['implementation_time']}}">
                                </div>
                            </div>
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Poin SKKM</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" value="{{$response['point_skkm']}}">
                                </div>
                            </div>
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Detail Event</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" readonly>{{$response['detail_event']}}</textarea>
                                </div>
                            </div>
                            <div class="mb-3 row ml-0 mt-2">
                                <label class="col-sm-2 col-form-label">Link Meeting</label>
                                <div class="col-sm-10">
                                  <input type="text" readonly class="form-control" value="{{$response['url']}}">
                                </div>
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
    <script type="text/javascript">
        
    </script>
@endsection
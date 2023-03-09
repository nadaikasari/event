@extends('layouts.app')
@section('title', 'Kegiatan')

@section('content')
    <h1>Daftar Kegiatan</h1>
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
        @foreach ($response as $data)
        <a href="/events/detail/{{$data['event_name_url']}}">
            <div class="col-4">
                <div class="card" style="width:400px">
                    <br>
                    <div class="container text-center">
                        @if ($data['photo_url'] != NULL)    
                            <img class="card-img-top" alt="Card image" src="data:image/png;base64,{{$data['photo_url']}}" style="height: 350px; width: 270px;">
                        @else
                            <img class="card-img-top" alt="Card image" src="{{$data['photo_dummy']}}" style="height: 350px; width: 270px;">
                        @endif
                    </div>
                    @if ($data['registration_status'] == 1)    
                        <form action="/events/register/{{$data['event_id']}}/s4SOOyuFmlqEfYnExhs+jQ==/Nada Ika Sari" method="post">
                            @csrf
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title" style="text-align: center;">{{$data['event_name']}}</h4>
                                <button type="submit" class="btn btn-primary mt-auto" style="justify-content: flex-end;" >Daftar</button>
                            </div>
                        </form>
                    @else
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title" style="text-align: center;">{{$data['event_name']}}</h4>
                            <button type="submit" class="btn btn-secondary mt-auto" style="justify-content: flex-end;" disabled>Pendaftaran Ditutup</button>
                        </div>
                    @endif
                </div>
            </div>
        </a>
        @endforeach
    </div>

@endsection

@section('script')
    <script type="text/javascript">

        //delete function
        $('body').on('click', '.btnDelete', function() {
            var firstUrl = "{{ url('article') }}";
            var secondUrl = $(this).attr('data-url');
            var url = firstUrl + secondUrl;

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: firstUrl + secondUrl,
                        success: function (data) {
                            Swal.fire(
                                "Artikel berhasil dihapus"
                            )
                            location.reload();
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            alert('Error : Gagal mengambil data');
                        }
                    })
                }
            })

        });
    </script>
@endsection


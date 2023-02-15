<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistem Satuan Kredit Kegiatan Mahasiswa">
    <meta name="author" content="Bootlab">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (View::hasSection('title'))
        @yield('title') -
        @endif
        Sistem Event STT Bandung
    </title>

    <link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
    <link rel="shortcut icon" href="/img/icon-sttb.png">
    <link rel="stylesheet" href="/css/style-custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <link class="stylesheet" href="/css/light.css" rel="stylesheet">
    <link class="stylesheet" href="/css/signature.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    {{-- select2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link href=”path/to/css/style.css” rel=’stylesheet’ type=’text/css’ />
    <script src="path/to/js/jquery-1.11.1.min.js"></script>
    <script src="path/to/js/Chart.js"></script>
    <link href=’//fonts.googleapis.com/css?family=Montserrat:400,700′ rel=’stylesheet’ type=’text/css’>

</head>

<body data-theme="light" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand">
                    <img src="{{ url('img/logo-menyamping.png') }}" width="200" height="40">
                </a>
                {{-- sidebar --}}
                <ul class="sidebar-nav">
                    <li class='sidebar-item'>
                        <a href='#' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='home'></i> <span class='align-middle'>Dashboard</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='#' data-toggle='collapse' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='file-plus'></i> <span class='align-middle'>Perwalian</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='#' data-toggle='collapse' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='book-open'></i> <span class='align-middle'>Perkuliahan</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='#' data-toggle='collapse' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='dollar-sign'></i> <span class='align-middle'>Keuangan</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='/events' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='user-check'></i> <span class='align-middle'>Kegiatan</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='/skkm' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='star'></i> <span class='align-middle'>SKKM</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='#' data-toggle='collapse' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='file-text'></i> <span class='align-middle'>Pengajuan</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='#' data-toggle='collapse' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='paperclip'></i> <span class='align-middle'>Pendaftaran</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='/registration' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='paperclip'></i> <span class='align-middle'>Pendaftaran Sidang</span>
                        </a>
                    </li>
                    <li class='sidebar-item'>
                        <a href='#' class='sidebar-link collapsed'>
                            <i class='align-middle' data-feather='settings'></i> <span class='align-middle'>Pemutahiran Data</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            {{-- start navbar --}}
            @include('components.navbar')
            {{-- end navbar --}}

            {{-- main content --}}
            <main class="content">
                @yield('content')
            </main>
            {{-- end main content --}}

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-12 text-center">
                            <p class="mb-0">
                                &copy; 2022 STTBandung <b>.</b> By Nada Ika Sari</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
    <script src="/js/signature.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- select2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $("#datetimepicker-dashboard").datetimepicker({
                inline: true,
                sideBySide: false,
                format: "L"
            });
        });
    
    <script type="text/javascript" src="instascan.min.js"></script>

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $(".table-data").DataTable({
                pageLength: 10,
                lengthChange: false,
                bFilter: true,
                autoWidth: true
            });
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('.btnDelete').click(function () {
                $('.btnDelete').attr('disabled', true)
                var url = $(this).attr('data-url');
                Swal.fire({
                    title: 'Apakah anda yakin ingin menghapus data?',
                    text: "Kamu tidak akan bisa mengembalikan data ini setelah dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya. Hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'GET',
                            url: url,
                            success: function (data) {
                                if (result.isConfirmed) {
                                    Swal.fire(
                                        'Terhapus!',
                                        'Data Berhasil Dihapus.',
                                        'success'
                                    ).then(() => {
                                        location.reload()
                                    })
                                }
                            },
                            error: function (XMLHttpRequest, textStatus,
                                errorThrown) {
                                Swal.fire(
                                    'Gagal!',
                                    'Gagal menghapus data.',
                                    'error'
                                );
                            }
                        });
                    }
                })
            });
        });

    </script>

    {{-- notification show --}}
    <script>
        var notyfSuccess = new Notyf({
            duration: 5000,
            position: {
                x: 'right',
                y: 'top'
            }
        });
        var notyfError = new Notyf({
            duration: 0,
            dismissible: true,
            position: {
                x: 'right',
                y: 'top'
            }
        });
        var msgSuccess = $('#successMessage').html()
        if (msgSuccess !== undefined) {
            notyfSuccess.success(msgSuccess)
        }
        var msgError = $('#errorMessage').html()
        if (msgError !== undefined) {
            notyfError.error(msgError)
        }

    </script>

    {{-- logout   --}}

    <script>
        $('.logout').click(function () {
            $('.logout').attr('disabled', true)
            var url = $(this).attr('data-url');
            Swal.fire({
                title: 'Apakah anda yakin ingin Logout ?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya. Logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'GET',
                        url: url,
                        success: function (data) {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Berhasil!',
                                    'Berhasil Logout.',
                                    'success'
                                ).then(() => {
                                    location.reload()
                                })
                            }
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            Swal.fire(
                                'Gagal!',
                                'Gagal Logout.',
                                'error'
                            );
                        }
                    });
                }
            })
        });

    </script>
    <script>
        // summernote 
        $(document).ready(function () {
            $('.summernote').summernote();

        });

        // choose file
        $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

    </script>


    @yield('script')

</body>

</html>

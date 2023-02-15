@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="container d-flex flex-column">
    <div class="row h-100 p-3">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">

                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
                                <img src="img/LOGOSKKM.png" width="420" height="80" />
                            </div>
                            <br>
                            @if (session('error'))
                            <div class="alert alert-danger text-center p-2 mt-4">
                                <small class="text-danger">{{ session('error') }}</small>
                            </div>
                            @endif
                            <form action="{{ url('do_login') }}" method="post" autocomplete="off" id="loginForm">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-lg" type="text" name="user_email"
                                        id="user_email" placeholder="Masukan Email" minlength="6" />
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input class="form-control form-control-lg " type="password" name="password"
                                        id="password" placeholder="********" />
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-lg btn-primary form-control form-control-lg">Masuk</button>
                                </div>
                            </form>
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
    // function for disable key shortcut
    $(window).on('keydown', function (event) {
        if (event.keyCode == 123) {
            return false; //Prevent from f12
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
            return false; //Prevent from ctrl+shift+i
        } else if (event.ctrlKey &&
            event.keyCode === 117) {
            return false;
            /*
            117 = f6
            */
        }
    });

    $("#loginForm").validate({
        rules: {
            user_username: "required",
            password: "required",
        },
        messages: {
            user_username: "Username minimal 6 karakter dan tidak boleh kosong",
            password: "Password tidak boleh kosong",
        },
        errorElement: "em",
        errorClass: "invalid-feedback",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            $(element).parents('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });

</script>
@endsection

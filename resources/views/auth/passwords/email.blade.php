<!------- Include head file -------->
@include('frontend.head')
<!------- Include head file -------->

<body>

    <!-- register form area start -->
    <div class="register-form-area-wrapper">
        <div class="register-bg"
            style="background-image: url({{ asset('frontend/assets/img/image1634455326.jpg') }});">
        </div>
        <div class="custom-container-1720 container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-top">
                        <div class="left">
                            <div class="logo-wrapper">
                                <a href="{{ url('/') }}" class="logo">
                                    <img src="{{ asset('frontend/assets/img/logo1634455321.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <div class="register-form-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active">Forget Password</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!------ Forget pass ----->
                            <div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}" class="register-form"
                                    id="forgot_password_form">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="forgot_password_email">Email<span
                                                    class="ex">*</span></label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="btn-wrapper btn-top">
                                        <button class="default-btn" type="submit" class="btn btn-primary">
                                            Send Reset Mail
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------- Include Script file -------->
    @include('frontend.script')
    <!------- Include Script file -------->

<!------- Include head file -------->
@include('frontend.head')
<!------- Include head file -------->

<body>
    <div class="preloader-inner">
        <ul class="preloader-main">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <body>
        <div class="preloader-inner">
            <ul class="preloader-main">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
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
                                    <a class="nav-link active">sign up</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div>
                                    <form method="POST" action="{{ route('register') }}" class="register-form">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="address_amaila">Name<span
                                                        class="ex">*</span></label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="form-group col-12">
                                                <label for="address_amailaw">Email<span
                                                        class="ex">*</span></label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="form-group col-lg-6 col-12">
                                                <label for="exampleInputPassword16">Password<span
                                                        class="ex">*</span></label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group col-lg-6 col-12">
                                                <label for="exampleInputPassword15">Confirmed Password<span
                                                        class="ex">*</span></label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>

                                        </div>
                                        <div class="btn-wrapper btn-top">
                                            <input type="submit" value="register" class="default-btn">
                                        </div>
                                        <div class="btn-wrapper btn-top mt-5">
                                            <a href="{{ route('login') }}" class="default-btn">
                                                ALREADY USER.......
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- register form area end -->

        <!------- Include Script file -------->
        @include('frontend.script')
        <!------- Include Script file -------->
    </body>

    </html>

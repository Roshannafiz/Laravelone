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
                                <a class="nav-link  active  " id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">sign up</a>
                            </li>
                        </ul>


                        <!------ Login Area ------>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade  show active  " id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <form action="{{ url('user_login') }}" method="post" class="register-form"
                                    id="login_form_order_page">
                                    @csrf
                                    <div class="error-wrap"></div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="login_email">Username
                                                <span class="ex">*</span></label>
                                            <input type="text" name="username" id="login_email" required />
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="login_password">Password<span
                                                    class="ex">*</span></label>
                                            <input type="password" name="password" class="form-control"
                                                id="login_password" required />
                                        </div>

                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" name="remember" class="form-check-input"
                                                id="login_remember">
                                            <label class="form-check-label" for="remember">Remember me </label>
                                        </div>
                                    </div>
                                    <div class="btn-pair">
                                        <a id="forgot-password" data-toggle="tab" href="#forgot_password" role="tab"
                                            aria-controls="forgot_password" aria-selected="false"
                                            class="forgot-btn">
                                            forgot password?
                                        </a>

                                        <div class="btn-wrapper">
                                            <button type="button" class="default-btn" id="login_btn">SIGN IN</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bar-wrap">
                                    <span class="bar"></span>
                                    <p class="or">or</p>
                                    <span class="bar"></span>
                                </div>
                                <div class="sin-in-with">
                                    <a href="https://bytesed.com/laravel/zaika/google/redirect" class="sign-in-btn">
                                        <img src="https://bytesed.com/laravel/zaika/assets/frontend/img/icon/google-icon.svg"
                                            alt="icon">
                                        Sign in with Google
                                    </a>
                                    <a href="https://bytesed.com/laravel/zaika/facebook/redirect"
                                        class="sign-in-btn">
                                        <img src="https://bytesed.com/laravel/zaika/assets/frontend/img/icon/Facebook-icon.svg"
                                            alt="icon">
                                        Sign in with Facebook
                                    </a>
                                </div>
                            </div>


                            <!--------------- Register Area --------->
                            <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="{{ url('user_register') }}" method="POST" class="register-form">
                                    @csrf
                                    <input type="hidden" name="_token" value="OmNYF8qp9SaeQrbltQA2ur4hUGn9GZyczJRgPlJm">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="address_amaila">Full Name<span
                                                    class="ex">*</span></label>
                                            <input type="text" name="name" id="address_amaila">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="l-name">Username<span class="ex">*</span></label>
                                            <input type="text" name="username" id="l-name" value="">
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="address_amailaw">Email<span
                                                    class="ex">*</span></label>
                                            <input type="email" name="email" id="address_amailaw" />
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="address_phone">City<span class="ex">*</span></label>
                                            <input type="text" name="city" id="address_city" />
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <label for="exampleInputPassword16">Password<span
                                                    class="ex">*</span></label>
                                            <input type="password" name="password" class="form-control"
                                                id="exampleInputPassword16">
                                        </div>
                                        <div class="form-group col-lg-6 col-12">
                                            <label for="exampleInputPassword15">Confirmed Password<span
                                                    class="ex">*</span></label>
                                            <input type="password" name="confrim_password" class="form-control"
                                                id="exampleInputPassword15">
                                        </div>
                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" class="form-check-input" name="agree_terms"
                                                id="Check11">
                                            <label class="form-check-label" for="Check11">
                                                By creating an account, you agree to the
                                                <a href="https://bytesed.com/laravel/zaika/p/terms-and-conditions/1">terms
                                                    of service and
                                                    Conditions,</a> and
                                                <a href="https://bytesed.com/laravel/zaika/p/privacy-policy/2">privacy
                                                    policy</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper btn-top">
                                        <input type="submit" value="register" class="default-btn">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="forgot_password" role="tabpanel"
                                aria-labelledby="forgot_password">
                                <form action="https://bytesed.com/laravel/zaika/login/forget-password" method="post"
                                    class="register-form" id="forgot_password_form">
                                    <input type="hidden" name="_token" value="OmNYF8qp9SaeQrbltQA2ur4hUGn9GZyczJRgPlJm">
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="forgot_password_username">Username<span
                                                    class="ex">*</span></label>
                                            <input type="text" name="username" id="forgot_password_username">
                                        </div>
                                    </div>
                                    <div class="btn-wrapper btn-top">
                                        <input type="submit" value="Send Reset Mail" class="default-btn">
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

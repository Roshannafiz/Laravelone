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

    <!------- Include navbar file -------->
    @include('frontend.include.navbar')
    <!------- Include navbar file -------->

    <div class="breadcrumb-area"
        style="background-image: url(https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/bg1632034097.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> Contact
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us-area-wrapper" data-padding-top="100" data-padding-bottom="100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="address-wrapper">
                        <ul class="address-list">
                            <li class="single-address-item">
                                <div class="icon-box">
                                    <i class="las la-home"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Address</h5>
                                    <p class="info">2779 Rubaiyat Road, Traverse City,
                                    </p>
                                    <p class="info">MI 49684</p>
                                </div>
                            </li>
                            <li class="single-address-item">
                                <div class="icon-box">
                                    <i class="las la-mobile"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Phone</h5>
                                    <p class="info">+012 789654321
                                    </p>
                                    <p class="info">
                                    </p>
                                    <p class="info">+969 123456789</p>
                                </div>
                            </li>
                            <li class="single-address-item">
                                <div class="icon-box">
                                    <i class="lar la-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Email</h5>
                                    <p class="info">company@mail.com
                                    </p>
                                    <p class="info">
                                    </p>
                                    <p class="info">contact@mail.com</p>
                                </div>
                            </li>
                            <li class="single-address-item">
                                <div class="icon-box">
                                    <i class="las la-clock"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">BUSINESS HOUR</h5>
                                    <p class="info">10.00 am - 08.00 pm
                                    </p>
                                    <p class="info">
                                    </p>
                                    <p class="info">Online 24/7</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="get-in-touch-wrapper">
                        <h3 class="title">Get in Touch</h3>
                        <form action="https://bytesed.com/laravel/zaika/submit-custom-form" method="post"
                            id="custom_form_builder_0yRgy4zsxb" class="custom-form-builder-form "
                            enctype="multipart/form-data">
                            <input type="hidden" name="custom_form_id" value="1">
                            <div class="error-message"></div>
                            <div class="form-group"><label for="your-name">Your Name</label> <input type="text"
                                    id="your-name" name="your-name" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group"> <label for="your-mail">Your Email</label> <input type="email"
                                    id="your-mail" name="your-mail" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group"><label for="your-subject">Your Subject</label> <input
                                    type="text" id="your-subject" name="your-subject" class="form-control"
                                    placeholder="Your Subject"></div>
                            <div class="form-group textarea"><label for="your-message">Your Message</label> <textarea
                                    name="your-message" id="your-message" cols="30" rows="5" class="form-control"
                                    placeholder="Your Message"></textarea></div>
                            <div class="form-group">
                                <button type="submit" class="default-btn boxed-btn">Submit</button>
                                <div class="ajax-loading-wrap hide">
                                    <div class="sk-fading-circle">
                                        <div class="sk-circle1 sk-circle"></div>
                                        <div class="sk-circle2 sk-circle"></div>
                                        <div class="sk-circle3 sk-circle"></div>
                                        <div class="sk-circle4 sk-circle"></div>
                                        <div class="sk-circle5 sk-circle"></div>
                                        <div class="sk-circle6 sk-circle"></div>
                                        <div class="sk-circle7 sk-circle"></div>
                                        <div class="sk-circle8 sk-circle"></div>
                                        <div class="sk-circle9 sk-circle"></div>
                                        <div class="sk-circle10 sk-circle"></div>
                                        <div class="sk-circle11 sk-circle"></div>
                                        <div class="sk-circle12 sk-circle"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="google-map-area" data-padding-top="0" data-padding-bottom="0">
        <div class="elementor-custom-embed"><iframe width="1080" height="500" frameborder="0" scrolling="no"
                marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?q=xgenious&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                aria-label="xgenious"></iframe></div>
    </div>


    <!------- Include footer file -------->
    @include('frontend.include.footer')
    <!------- Include footer file -------->


    <!------- Include product model file -------->
    @include('frontend.include.product-model')
    <!------- Include product model file -------->


    <!-- back to top area start -->
    <div class="scroll-to-top">
        <i class="las la-angle-up"></i>
    </div>
    <!-- back to top area end -->

    <!------- Include Script file -------->
    @include('frontend.script')
    <!------- Include Script file -------->


</body>

</html>

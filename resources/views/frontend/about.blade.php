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
                        <h2 class="page-title"> About
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item">About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us-stylish-blog-wrapper" data-padding-top="100" data-padding-bottom="0">
        <div class="container about-us-stylish-blog-inner">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="img-box">
                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/about-us1634732019.jpg"
                            alt="" />
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 ml-auto left-content">
                    <div class="content">
                        <span class="topic-title">About Us</span>
                        <h3 class="title">WE PROVIDE LUXURY &amp; COMFORTABLE DRESSES</h3>
                        <p class="info">
                        <p><span style="font-weight:400;">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some form, by injected humour,
                                or randomised words which don't look even slightly believable. If you are going to use a
                                passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                the middle of text.</span></p>
                        </p>
                        <div class="btn-wrapper"><a href="#" class="borderless-btn">Contact Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-feedback-area-wrapper" data-padding-top="100" data-padding-bottom="100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title-wrapper">
                        <h2 class="main-title">Customer <span class="ex">Feedback</span></h2>
                        <p class="sub-title">
                        <p><span style="font-weight:normal;">A wonderful serenity has taken possession of my entire
                                soul, like these sweet mornings of spring</span></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row feedback-slider-main">
                <div class="col-lg-12">
                    <div class="single-cust-feedback-item">
                        <div class="content">
                            <span class="quote">
                                <i class="las la-quote-left icon"></i>
                            </span>
                            <p class="feedback-info">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.</p>
                            <span class="customer-name">John Doe</span>
                        </div>
                        <div class="img-box">
                            <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/031634735087.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-cust-feedback-item">
                        <div class="content">
                            <span class="quote">
                                <i class="las la-quote-left icon"></i>
                            </span>
                            <p class="feedback-info">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.</p>
                            <span class="customer-name">John Doe</span>
                        </div>
                        <div class="img-box">
                            <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/021634735087.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-cust-feedback-item">
                        <div class="content">
                            <span class="quote">
                                <i class="las la-quote-left icon"></i>
                            </span>
                            <p class="feedback-info">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.</p>
                            <span class="customer-name">John Doe</span>
                        </div>
                        <div class="img-box">
                            <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/011634735087.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-update-area-wrapper" data-padding-top="0" data-padding-bottom="100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="section-title-wrapper">
                        <h2 class="main-title">News <span class="ex">Updates</span></h2>
                        <p class="sub-title">
                        <p><span style="font-weight:normal;">A wonderful serenity has taken possession of my entire
                                soul, like these sweet mornings of spring</span></p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-news-update-item">
                        <div class="img-box">
                            <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/pexels-andrea-piacquadio-3791664-min1614257478.jpg"
                                alt="" />
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li class="meta-item">
                                    <a
                                        href="https://bytesed.com/laravel/zaika/blog/new-organization-are-continually-added-and-seal-there-single">
                                        <i class="las la-calendar icon"></i>
                                        08 Jun 2020
                                    </a>
                                </li>
                                <li class="meta-item">
                                    <a href="https://bytesed.com/laravel/zaika/blog-category/1?name=Startup%20Business">
                                        <i class="las la-tag icon"></i>
                                        Startup Business
                                    </a>
                                </li>
                            </ul>
                            <h4 class="blog-title">
                                <a
                                    href="https://bytesed.com/laravel/zaika/blog/new-organization-are-continually-added-and-seal-there-single">New
                                    organization are added seal there</a>
                            </h4>
                            <p class="info">
                            <p style="text-align: justify;">Was drawing natural fat respect husband. An as noisy an
                                offer drawn blush place. These tried for way...</p>
                            <div class="btn-wrapper">
                                <a href="https://bytesed.com/laravel/zaika/blog/new-organization-are-continually-added-and-seal-there-single"
                                    class="borderless-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-news-update-item">
                        <div class="img-box">
                            <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/pexels-luis-quintero-2014775-min1614257453.jpg"
                                alt="" />
                        </div>
                        <div class="content">
                            <ul class="post-meta">
                                <li class="meta-item">
                                    <a
                                        href="https://bytesed.com/laravel/zaika/blog/was-drawing-natural-fat-respect-husband">
                                        <i class="las la-calendar icon"></i>
                                        12 Jun 2020
                                    </a>
                                </li>
                                <li class="meta-item">
                                    <a href="https://bytesed.com/laravel/zaika/blog-category/2?name=Ecommerce">
                                        <i class="las la-tag icon"></i>
                                        Ecommerce
                                    </a>
                                </li>
                            </ul>
                            <h4 class="blog-title">
                                <a
                                    href="https://bytesed.com/laravel/zaika/blog/was-drawing-natural-fat-respect-husband">Was
                                    drawing natural fat respect husband</a>
                            </h4>
                            <p class="info">
                            <p style="text-align: justify;">Was drawing natural fat respect husband. An as noisy an
                                offer drawn blush place. These tried for way...</p>
                            <div class="btn-wrapper">
                                <a href="https://bytesed.com/laravel/zaika/blog/was-drawing-natural-fat-respect-husband"
                                    class="borderless-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

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

    @if ($userCartItems)
        <div class="breadcrumb-area"
            style="background-image: url({{ asset('frontend/assets/img/cart-banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner">
                            <h2 class="page-title"> Cart
                            </h2>
                            <ul class="page-list">
                                <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="list-item"><a href="{{ url('/product') }}">product</a>
                                </li>
                                <li class="list-item">
                                    <a>Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cart-container">
            <div class="cart-area-wrapper">
                <div class="container">
                    <div id="AppendCartItems">
                        <!----- Include Cart Items ----->
                        @include('frontend.cart_items')
                    </div>
                </div>
            </div>
        </div>
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    @else
        <div class="breadcrumb-area"
            style="background-image: url({{ asset('frontend/assets/img/cart-banner.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner">
                            <h2 class="page-title"> Cart
                            </h2>
                            <ul class="page-list">
                                <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="list-item"><a href="{{ url('/product') }}">product</a></li>
                                <li class="list-item"><a> Cart
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="only-img-page-wrapper cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img-box">

                        </div>
                        <div class="content">
                            <p class="info">Empty Cart</p>
                            <div class="btn-wrapper">
                                <a href="{{ url('/product') }}" class="default-btn">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

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

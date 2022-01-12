<div class="flash-sale-area-wrapper" data-padding-top="105" data-padding-bottom="44">
    <div class="container">
        <div class="row position-relative">
            <div class="col-lg-7">
                <div class="section-title-wrapper">
                    <h2 class="main-title">Flash <span class="ex">Sale</span></h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="btn-wrapper see-all">
                    <a href="https://bytesed.com/laravel/zaika/product/campaign/22" class="see-all-btn">see all
                        <i class="las la-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($products_tendy as $product)
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="single-flash-item single-product-item">
                        <div class="sale-product-img-box"
                            style="background-image: url({{ asset('admin/upload-product/' . $product->product_image) }});">
                            <a href="#">
                                <!--  -->
                            </a>
                        </div>
                        <div class="flash-countdown-1 flash-countdown" data-date="2021-12-31 23:59:59">
                            <div class="single-box">
                                <span class="counter-days item"></span>
                                <span class="label item">Days</span>
                            </div>
                            <div class="single-box">
                                <span class="counter-hours item"></span>
                                <span class="label item">Hour</span>
                            </div>
                            <div class="single-box">
                                <span class="counter-minutes item"></span>
                                <span class="label item">Min</span>
                            </div>
                            <div class="single-box">
                                <span class="counter-seconds item"></span>
                                <span class="label item">Sec</span>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title">
                                <a href="{{ url('view-product/' . $product->id) }}">{{ $product->name }}</a>
                            </h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">${{ $product->seal_price }}</li>
                                    <li class="price">
                                        <del>${{ $product->regular_price }}</del>
                                    </li>
                                </ul>
                                <div class="hover">
                                    <ul class="list">
                                        <li>
                                            <!------ Include Cart Button ---->
                                            @include('frontend.product_btn.cart_button')
                                            <!------ Include Cart Button ---->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span class="sale">-27%</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

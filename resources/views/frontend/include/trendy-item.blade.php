<div class="trendy-item-wrapper" data-padding-top="100" data-padding-bottom="0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="add-img-box">
                    <a href="https://bytesed.com/laravel/zaika/product/campaign/22"><img
                            src="{{ asset('frontend/assets/uploads/media-uploader/big-011632919087.jpg') }}"
                            alt="" /></a>
                    <div class="content">
                        <p class="catg">MONDAY OFFER</p>
                        <h3 class="offer-title">70% OFF</h3>
                        <div class="btn-wrapper">
                            <a href="https://bytesed.com/laravel/zaika/product/campaign/22" class="borderless-btn">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-7">
                        <div class="section-title-wrapper">
                            <h2 class="main-title">TRENDY <span class="ex">ITEM</span></h2>
                            <p class="sub-title">A wonderful serenity has taken possession of my entire soul,
                                like
                                these sweet mornings of spring</p>
                        </div>
                    </div>
                </div>
                <div class="row product-row">
                    @foreach ($products_tendy as $product)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="single-product-item">
                                <div class="product-img-box">
                                    <a href="{{ url('view-product/' . $product->id) }}">
                                        <img src="{{ asset('admin/upload-product/' . $product->product_image) }}"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li>
                                                <!------ Include Wishlist Button ---->
                                                @include('frontend.product_btn.wishlist_button')
                                                <!------ Include Wishlist Button ---->
                                            </li>
                                            <li>
                                                <!------ Include Compare Button ---->
                                                @include('frontend.product_btn.compare_button')
                                                <!------ Include Compare Button ---->
                                            </li>
                                            <li>
                                                <!------ Include Cart Button ---->
                                                @include('frontend.product_btn.cart_button')
                                                <!------ Include Cart Button ---->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a href="{{ url('view-product/' . $product->id) }}">{{ $product->name }}</a></h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">${{ $product->seal_price }}</li>
                                            <li class="price"><del>${{ $product->regular_price }}</del>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="sale">On Sale</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

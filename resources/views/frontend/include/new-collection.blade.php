<div class="new-collection-area-wrapper" data-padding-top="100" data-padding-bottom="70">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title-wrapper">
                    <h2 class="main-title">NEW <span class="ex">COLLECTION</span></h2>
                </div>
            </div>
        </div>
        <div class="row new-collection-slider product_data">
            @csrf
            @foreach ($products as $product)
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href='{{ url('view-product/' . $product->id) }}'><img
                                    src="{{ asset('admin/upload-product/' . $product->product_image) }}" alt="" /></a>
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
                                    <li>
                                        <a href="#" class="quick-view call-modal" data-title='Blue Denim Ladies'
                                            data-slug='blue-denim-ladies'
                                            data-summary='Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats!'
                                            data-price='$15.00' data-sale-price='$12.00' data-attributes='[]'
                                            data-category='Women&#039;s Style' data-subcategory='[]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='{{ asset('frontend/assets/uploads/media-uploader/appealing-young-woma-pp5ig1638249594.jpg') }}'
                                            data-rating='' data-inventory='SKU-PBXYZ3' data-in-stock='149' }>Quickview
                                            <i class="lar la-eye icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class='product-title'>
                                <a href='{{ url('view-product' . $product->id) }}'>
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">${{ $product->seal_price }}</li>
                                    <li class="price"><del>${{ $product->regular_price }}</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="new-collection-area-wrapper" data-padding-top="30" data-padding-bottom="1">
    <div class="container">
        <div class="row new-collection-highlight">
            <div class="col-md-6 col-lg-6">
                <div class="single-item left">
                    <a href="#">
                        <img src="{{ asset('frontend/assets/uploads/media-uploader/big-011632136152.jpg') }}"
                            alt="" />
                    </a>
                    <div class="info-box">
                        <p class="catg">Hot Item</p>
                        <h4 class="offer-title">BUY ONE GET 1</h4>
                        <div class="btn-wrapper">
                            <a href="https://bytesed.com/laravel/zaika/product/campaign/22" class="borderless-btn">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single-item right">
                    <a href="https://bytesed.com/laravel/zaika/product/campaign/22">
                        <img src="{{ asset('frontend/assets/uploads/media-uploader/big-021632136152.jpg') }}"
                            alt="" />
                    </a>
                    <div class="info-box">
                        <p class="catg">Sale Item</p>
                        <h4 class="offer-title">UP TO 70% OFF</h4>
                        <div class="btn-wrapper">
                            <a href="https://bytesed.com/laravel/zaika/product/campaign/22" class="borderless-btn">SHOP
                                NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

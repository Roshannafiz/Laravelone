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
                        <h2 class="page-title"> Red Tops
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item"><a href="{{ url('/product') }}">product</a>
                            </li>
                            <li class="list-item">Red Tops</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-details-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-view-wrap">
                        <div class="shop-details-gallery-slider" id="myTabContent">
                            <!---------------- It's Up Single Active Image ------------->
                            <div class="single-main-image slick-slide">
                                <a href="javascript:void(0)" class="long-img">
                                    <figure class="zoom zoom-js-handle"
                                        data-src="{{ asset('admin/upload-product/' . $product->product_image) }}">
                                        <img src="{{ asset('admin/upload-product/' . $product->product_image) }}"
                                            class="img-fluid" alt="" />
                                    </figure>
                                </a>
                            </div>
                            <!---------------- It's Up Single Active Image ------------->

                            <!--- Multiple Image Saparation ----->
                            @php
                                $product['gallery_image'] = explode('|', $product->gallery_image);
                            @endphp
                            <!------------ Start For Click To Show Currect Image --------------->
                            @foreach ($product->gallery_image as $item => $gallery_images)
                                <div class="single-main-image" data-slick-index="{{ $item + 1 }}">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom zoom-js-handle"
                                            data-src="{{ asset('admin/upload-product/gallery/' . $gallery_images) }}">
                                            <img src="{{ asset('admin/upload-product/gallery/' . $gallery_images) }}"
                                                class="img-fluid" alt="" />
                                        </figure>
                                    </a>
                                </div>
                            @endforeach
                            <!--------- End For Click To Show Currect Image --------------->
                        </div>


                        <div class="thumb-wrap gallery_image">
                            <ul class="shop-details-gallery-nav">
                                <!---------------- It's Up Single Active Image ------------->
                                <div class="single-main-image slick-slide">
                                    <a href="javascript:void(0)" class="long-img">
                                        <figure class="zoom zoom-js-handle"
                                            data-src="{{ asset('admin/upload-product/' . $product->product_image) }}">
                                            <img src="{{ asset('admin/upload-product/' . $product->product_image) }}"
                                                class="img-fluid" alt="" />
                                        </figure>
                                    </a>
                                </div>
                                <!---------------- It's Up Single Active Image ------------->

                                <!----------------- It's All Down Gallery Images ------------>
                                @foreach ($product->gallery_image as $item => $gallery_images)
                                    <li class="single-thumb" data-slick-index="{{ $item + 1 }}">
                                        <a class="thumb-link" data-toggle="tab" href="" role="tab">
                                            <img src="{{ asset('admin/upload-product/gallery/' . $gallery_images) }}"
                                                alt="" />
                                        </a>
                                    </li>
                                @endforeach
                                <!----------------- It's All Down Gallery Images ------------>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-summery">
                        <div class="price-wrap">
                            <span class="price" data-main-price="35"
                                id="price">${{ $product->seal_price }}</span>
                            <del class="del-price">${{ $product->regular_price }}</del>
                        </div>
                        <div class="short-description">
                            <p class="info">
                                {!! $product->short_description !!}
                            </p>
                        </div>
                        <div class="user-select-option">

                            <div class="product_related_info mt-5">
                                <div class="text-success"><small>
                                        @php
                                            if ($product->quantity > 0) {
                                                echo $product->quantity . ' ' . 'items available in stock';
                                            } else {
                                                echo '(Not available in stock)';
                                            }
                                        @endphp
                                    </small></div>
                            </div>

                            <div class="quantity-add-cart">
                                <div class="quantity">
                                    <div class="input-group">
                                        <input class="quantity form-control" id="quantity" type="number" min="1"
                                            max="10000000" value="1">
                                    </div>
                                </div>
                                <div class="cart-option">
                                    <a href="#" data-id="2" class="cart add_to_cart">add to cart</a>
                                    <a href="#" data-id="2" class="cart add_to_wishlist">wishlist</a>
                                    <a href="#" data-id="2" class="cart add_to_compare_ajax">Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-attr-container">
                            <div class="product-attr">
                                Category:
                                <a href="{{ $product->category->id }}">
                                    {{ $product->category->name }}
                                </a>
                            </div>

                            <div class="product-attr">
                                Subcategory:
                                <a href="{{ $product->subcategory->id }}">
                                    {{ $product->subcategory->name }}
                                </a>
                            </div>
                            <div class="product-attr">
                                SKU: {{ $product->SKU }}
                            </div>
                        </div>
                        <div class="social-link">
                            <ul class="list">
                                <li class="list-item"><a target="_blank"
                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbytesed.com%2Flaravel%2Fzaika%2Fproduct%2Fred-tops"><i
                                            class="lab la-facebook-f icon"></i></a></li>
                                <li class="list-item"><a target="_blank"
                                        href="https://twitter.com/intent/tweet?text=Red%20Tops&amp;url=https%3A%2F%2Fbytesed.com%2Flaravel%2Fzaika%2Fproduct%2Fred-tops&amp;via=Zaika"><i
                                            class="lab la-twitter icon"></i></a></li>
                                <li class="list-item"><a target="_blank"
                                        href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fbytesed.com%2Flaravel%2Fzaika%2Fproduct%2Fred-tops&amp;title=Red%20Tops"><i
                                            class="lab la-linkedin-in icon"></i></a></li>
                                <li class="list-item"><a target="_blank"
                                        href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fbytesed.com%2Flaravel%2Fzaika%2Fproduct%2Fred-tops&amp;media=https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/full-length-portrait-ipb7u1638271011.jpg&amp;description=Red%20Tops"><i
                                            class="lab la-pinterest-p icon"></i></a></li>
                                <li class="list-item"><a target="_blank"
                                        href="https://api.whatsapp.com/send?text=*Red%20Tops https%3A%2F%2Fbytesed.com%2Flaravel%2Fzaika%2Fproduct%2Fred-tops"><i
                                            class="lab la-whatsapp icon"></i></a></li>
                                <li class="list-item"><a target="_blank"
                                        href="https://reddit.com/submit?url=https%3A%2F%2Fbytesed.com%2Flaravel%2Fzaika%2Fproduct%2Fred-tops&title=Red%20Tops"><i
                                            class="lab la-reddit icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                    href="#pills-profile" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Additional Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                    href="#pills-contact" role="tab" aria-controls="pills-contact"
                                    aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="description">
                                    <h4 class="title">Description </h4>
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="aditional-info">
                                    <h4 class="title">Additional Information</h4>
                                    <div class="table-wrap">
                                        <table class="add-info">
                                            <tbody>

                                                <tr>
                                                    <th>Brand Name</th>
                                                    <td>
                                                        <p>{{ $product->brand->name }}</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Total Quantity</th>
                                                    <td>
                                                        <p>{{ $product->quantity }}</p>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>Expires At</th>
                                                    <td>
                                                        <p>31 October 2021</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <!-- feedback area start -->
                                <div class="feedback-section">
                                    <div class="feedback">
                                        <h4 class="feedback-title">Customer Review</h4>
                                        <div class="row">
                                            <div class="col-sm-6 ">
                                                <form action="https://bytesed.com/laravel/zaika/login" method="post"
                                                    class="register-form" id="login_form_order_page">
                                                    <input type="hidden" name="_token"
                                                        value="cjYKt2NJHtIxvSFLAj7nFR7roLCUHFtprkswVwP9">
                                                    <div class="error-wrap"></div>
                                                    <div class="row">
                                                        <div class="form-group col-12">
                                                            <label for="login_email">Username
                                                                <span class="ex">*</span></label>
                                                            <input class="form-control" type="text" name="username"
                                                                id="login_email" required />
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label for="login_password">Password<span
                                                                    class="ex">*</span></label>
                                                            <input class="form-control" type="password"
                                                                name="password" id="login_password" required />
                                                        </div>
                                                        <div class="form-group form-check col-12">
                                                            <input type="checkbox" name="remember"
                                                                class="form-check-input" id="login_remember">
                                                            <label class="form-check-label" for="remember">Remember me
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="btn-pair">
                                                        <div class="btn-wrapper">
                                                            <button type="button" class="default-btn"
                                                                id="login_btn">SIGN IN</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="client-feedback">
                                            <ul class="client-feedbck-list">
                                                <h4 class="text-secondary">No rating to show yet</h4>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- feedback area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop details area start -->

    <!-- related item area start -->
    <div class="related-item-area-wrapper new-collection-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title-wrapper">
                        <h2 class="main-title">Related <span class="ex">item</span></h2>
                    </div>
                </div>
            </div>
            <div class="row related-item-slider-main-full">
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/blue-denim-ladies">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-appealing-young-woma-pp5ig1638249594.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view"
                                            data-title='Blue Denim Ladies' data-slug='blue-denim-ladies'
                                            data-summary='Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats!'
                                            data-price='$15.00' data-sale-price='$12.00' data-attributes='[]'
                                            data-category='Women&#039;s Style' data-subcategory='[]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/appealing-young-woma-pp5ig1638249594.jpg'
                                            data-rating='' data-inventory='SKU-PBXYZ3' data-in-stock='148'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>
                                    <li><a href="#" data-attributes="[]" data-id="2" class="add_to_wishlist_ajax">Add
                                            to Wish List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="2" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="#" data-attributes="[]" data-id="2" class="add_to_cart_ajax">Add to
                                            Cart <i class="las la-shopping-cart icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/blue-denim-ladies">Blue Denim
                                    Ladies</a></h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$12.00</li>
                                    <li class="price"><del>$15.00</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/casual-shirt">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-glad-young-woman-vin-wxnbt1638271100.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view" data-title='Casual Shirt'
                                            data-slug='casual-shirt'
                                            data-summary='I never spend much time in school but I taught ladies plenty. It&rsquo;s true I hire my body out for pay, hey hey. I&rsquo;ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it&rsquo;s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. &rsquo;Cause I&rsquo;m the unknown stuntman that makes Eastwood look so fine.'
                                            data-price='$35.00' data-sale-price='$30.00' data-attributes='[]'
                                            data-category='Women&#039;s Style'
                                            data-subcategory='[{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Beverages&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/4&quot;}]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/glad-young-woman-vin-wxnbt1638271100.jpg'
                                            data-rating='' data-inventory='SKU-PBXYZ2' data-in-stock='0'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>
                                    <li><a href="#" data-attributes="[]" data-id="3" class="add_to_wishlist_ajax">Add
                                            to Wish List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="3" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="#" data-attributes="[]" data-id="3" class="add_to_cart_ajax">Add to
                                            Cart <i class="las la-shopping-cart icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/casual-shirt">Casual Shirt</a></h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$30.00</li>
                                    <li class="price"><del>$35.00</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/black-tops">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-woman-suglasses-with-1k0bj1638270968.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view" data-title='Black Tops'
                                            data-slug='black-tops'
                                            data-summary='One for all and all for one, Muskehounds are always ready. One for all and all for one, helping everybody. One for all and all for one, it&rsquo;s a pretty story.'
                                            data-price='$40.00' data-sale-price='$35.00' data-attributes='[]'
                                            data-category='Women&#039;s Style' data-subcategory='[]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/woman-suglasses-with-1k0bj1638270968.jpg'
                                            data-rating='' data-inventory='2CGo6Qaf6U' data-in-stock='162'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>
                                    <li><a href="#" data-attributes="[]" data-id="4" class="add_to_wishlist_ajax">Add
                                            to Wish List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="4" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="#" data-attributes="[]" data-id="4" class="add_to_cart_ajax">Add to
                                            Cart <i class="las la-shopping-cart icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/black-tops">Black Tops</a></h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$35.00</li>
                                    <li class="price"><del>$40.00</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/flowery-frock">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-portrait-beautiful-d-i6ezw1638271057.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view" data-title='Flowery Frock'
                                            data-slug='flowery-frock'
                                            data-summary='One for all and all for one, Muskehounds are always ready. One for all and all for one, helping everybody. One for all and all for one, it&rsquo;s a pretty story.'
                                            data-price='$40.00' data-sale-price='$35.00'
                                            data-attributes='{&quot;2&quot;:[{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;M&quot;,&quot;additional_price&quot;:&quot;12&quot;},{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;XL&quot;,&quot;additional_price&quot;:&quot;11&quot;}]}'
                                            data-category='Women&#039;s Style'
                                            data-subcategory='[{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Beverages&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/4&quot;}]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/portrait-beautiful-d-i6ezw1638271057.jpg'
                                            data-rating='' data-inventory='Mm2zc3ipUJ' data-in-stock='4'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>

                                    <li><a href="https://bytesed.com/laravel/zaika/product/flowery-frock">Add to Wish
                                            List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="18" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="https://bytesed.com/laravel/zaika/product/flowery-frock">View Options
                                            <i class="las la-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/flowery-frock">Flowery Frock</a>
                            </h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$35.00</li>
                                    <li class="price"><del>$40.00</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-portrait-pretty-lady-ejkko1638270922.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view" data-title='Tinted Sunglass'
                                            data-slug='tinted-sunglass'
                                            data-summary='Knight Rider, a shadowy flight into the dangerous world of a man who does not exist. Michael Knight, a young loner on a crusade to champion the cause of the innocent, the helpless in a world of criminals who operate above the law.'
                                            data-price='$42.00' data-sale-price='$35.00' data-attributes='[]'
                                            data-category='Women&#039;s Style' data-subcategory='[]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/portrait-pretty-lady-ejkko1638270922.jpg'
                                            data-rating='' data-inventory='qKo3xSLF3b' data-in-stock='6'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>
                                    <li><a href="#" data-attributes="[]" data-id="25" class="add_to_wishlist_ajax">Add
                                            to Wish List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="25" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="#" data-attributes="[]" data-id="25" class="add_to_cart_ajax">Add to
                                            Cart <i class="las la-shopping-cart icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">Tinted Sunglass</a>
                            </h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$35.00</li>
                                    <li class="price"><del>$42.00</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/womens-sunglass">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-appealing-young-woma-pp5ig1638249594.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view"
                                            data-title='Women&#039;s Sunglass' data-slug='womens-sunglass'
                                            data-summary='Knight Rider, a shadowy flight into the dangerous world of a man who does not exist. Michael Knight, a young loner on a crusade to champion the cause of the innocent, the helpless in a world of criminals who operate above the law.'
                                            data-price='$42.00' data-sale-price='$35.00' data-attributes='[]'
                                            data-category='Women&#039;s Style'
                                            data-subcategory='[{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Beverages&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/4&quot;},{&quot;name&quot;:&quot;Breakfast&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/5&quot;}]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/appealing-young-woma-pp5ig1638249594.jpg'
                                            data-rating='' data-inventory='FSjPuWMIf1' data-in-stock='0'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>
                                    <li><a href="#" data-attributes="[]" data-id="26" class="add_to_wishlist_ajax">Add
                                            to Wish List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="26" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="#" data-attributes="[]" data-id="26" class="add_to_cart_ajax">Add to
                                            Cart <i class="las la-shopping-cart icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/womens-sunglass">Women&#039;s
                                    Sunglass</a></h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$35.00</li>
                                    <li class="price"><del>$42.00</del></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-new-collection-item single-product-item">
                        <div class="product-img-box">
                            <a href="https://bytesed.com/laravel/zaika/product/stylish-glass-for-women">
                                <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-stunning-curly-femal-ae4nx1638249534.jpg"
                                    alt="" />
                            </a>
                            <div class="hover">
                                <ul class="list">
                                    <li><a href="#" id="quickview" class="quick-view"
                                            data-title='Stylish Glass For Women' data-slug='stylish-glass-for-women'
                                            data-summary='I never spend much time in school but I taught ladies plenty. It&rsquo;s true I hire my body out for pay, hey hey. I&rsquo;ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it&rsquo;s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. &rsquo;Cause I&rsquo;m the unknown stuntman that makes Eastwood look so fine.'
                                            data-price='$35.00' data-sale-price='$30.00' data-attributes='[]'
                                            data-category='Women&#039;s Style' data-subcategory='[]'
                                            data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                            data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/stunning-curly-femal-ae4nx1638249534.jpg'
                                            data-rating='' data-inventory='WFY-002' data-in-stock='0'>Quickview <i
                                                class="lar la-eye icon"></i></a></li>
                                    <li><a href="#" data-attributes="[]" data-id="30" class="add_to_wishlist_ajax">Add
                                            to Wish List <i class="lar la-heart icon"></i></a></li>

                                    <li><a href="#" data-id="30" class="add_to_compare_ajax">Compare <i
                                                class="las la-retweet icon"></i></a></li>

                                    <li><a href="#" data-attributes="[]" data-id="30" class="add_to_cart_ajax">Add to
                                            Cart <i class="las la-shopping-cart icon"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-wrap">
                            <h3 class="product-title"><a
                                    href="https://bytesed.com/laravel/zaika/product/stylish-glass-for-women">Stylish
                                    Glass For Women</a></h3>
                            <div class="product-price-details">
                                <ul class="list">
                                    <li class="price">$30.00</li>
                                    <li class="price"><del>$35.00</del></li>
                                </ul>
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

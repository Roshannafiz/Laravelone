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
                        <h2 class="page-title"> All Products
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item">All Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area-wrapper grid-only" id="shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 1">
                    <div class="toolbox-wrapper">
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-layout">
                                <ul class="layout-list">
                                    <li class="layout-item">
                                        <a href="{{ url('/product') }}" data-style="grid"
                                            class="grid-layout  current ">
                                            <i class="las la-border-all icon"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show">
                                <label for="set_item_to_show">show:</label>
                                <select id="set_item_to_show" class="select-box">
                                    <option value="8">8</option>
                                    <option value="12">12</option>
                                    <option value="16">16</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                            <div class="toolbox-item toolbox-sort">
                                <label for="set_item_sort_by">sort by:</label>
                                <select id="set_item_sort_by" class="select-box">
                                    <option value="default" selected>Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="latest">Sort by latest</option>
                                    <option value="price_low">Sort by pric: low to high</option>
                                    <option value="price_high">Sort by pric: high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-sm-6 col-md-4">
                                <div class="single-new-collection-item single-product-item">
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
                                        <h3 class="product-title"><a
                                                href="{{ url('view-product/' . $product->id) }}">{{ $product->name }}</a>
                                        </h3>
                                        <div class="product-price-details">
                                            <ul class="list">
                                                <li class="price">${{ $product->seal_price }}</li>
                                                <li class="price"><del>${{ $product->regular_price }}</del>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="pagination-default">
                                <nav>
                                    <ul class="pagination">

                                        <li class="page-item disabled" aria-disabled="true"
                                            aria-label="&laquo; Previous">
                                            <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                        </li>

                                        <li class="page-item active" aria-current="page"><span
                                                class="page-link">1</span></li>
                                        <li class="page-item"><a class="page-link"
                                                href="javascript:avoid(0)">2</a></li>


                                        <li class="page-item">
                                            <a class="page-link" href="javascript:avoid(0)" rel="next"
                                                aria-label="Next &raquo;">&rsaquo;</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget-area-wrapper">
                        <div class="widget widget-search">
                            <h5 class="widget-title">Product Search</h5>
                            <form class="form-inline" id="search_form">
                                <div class="form-group">
                                    <input type="search" class="form-control" id="search_query" name="search_query"
                                        placeholder="search..." value="">
                                </div>
                                <button type="submit" class="form-btn-1"><i class="las la-search"></i></button>
                            </form>
                        </div>

                        <div class="widget widget-range">
                            <h5 class="widget-title">filter by price</h5>
                            <div id="slider-range"></div>
                            <div class="range">
                                <div class="range-details">
                                    <span class="min_filter_price min">$12</span>
                                    <span class="max_filter_price max">$42</span>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-category">
                            <h5 class="widget-title">category</h5>
                            <div class="widget-check-box checkbox-catagory">
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="product_cat" class="radio" value="1">
                                        <span class="checkmark">Men&#039;s Fashion</span>
                                    </label>
                                    <div class="widget-check-box checkbox-catagory ml-4">
                                        <div class="single-checkbox-wrap">
                                            <label>
                                                <input type="radio" name="product_subcat" class="radio"
                                                    value="1">
                                                <span class="checkmark">Fruits &amp; Vegetables</span>
                                            </label>
                                        </div>
                                        <div class="single-checkbox-wrap">
                                            <label>
                                                <input type="radio" name="product_subcat" class="radio"
                                                    value="3">
                                                <span class="checkmark">Snacks</span>
                                            </label>
                                        </div>
                                        <div class="single-checkbox-wrap">
                                            <label>
                                                <input type="radio" name="product_subcat" class="radio"
                                                    value="4">
                                                <span class="checkmark">Beverages</span>
                                            </label>
                                        </div>
                                        <div class="single-checkbox-wrap">
                                            <label>
                                                <input type="radio" name="product_subcat" class="radio"
                                                    value="5">
                                                <span class="checkmark">Breakfast</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="product_cat" class="radio" value="3">
                                        <span class="checkmark">Women&#039;s Style</span>
                                    </label>
                                    <div class="widget-check-box checkbox-catagory ml-4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-color">
                            <h5 class="widget-title">Color</h5>
                            <div class="checkbox-size">
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Color" class="checkbox attribute_item"
                                            data-attr-type="1" value="Red">
                                        <span class="size-code">Red</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Color" class="checkbox attribute_item"
                                            data-attr-type="1" value="Green">
                                        <span class="size-code">Green</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Color" class="checkbox attribute_item"
                                            data-attr-type="1" value="Blue">
                                        <span class="size-code">Blue</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Color" class="checkbox attribute_item"
                                            data-attr-type="1" value="Cyan">
                                        <span class="size-code">Cyan</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-color">
                            <h5 class="widget-title">Size</h5>
                            <div class="checkbox-size">
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Size" class="checkbox attribute_item"
                                            data-attr-type="2" value="S">
                                        <span class="size-code">S</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Size" class="checkbox attribute_item"
                                            data-attr-type="2" value="M">
                                        <span class="size-code">M</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Size" class="checkbox attribute_item"
                                            data-attr-type="2" value="L">
                                        <span class="size-code">L</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Size" class="checkbox attribute_item"
                                            data-attr-type="2" value="XL">
                                        <span class="size-code">XL</span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap attribute">
                                    <label>
                                        <input type="radio" name="Size" class="checkbox attribute_item"
                                            data-attr-type="2" value="XXL">
                                        <span class="size-code">XXL</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-rating">
                            <h5 class="widget-title">Average Rating</h5>
                            <div class="widget-check-box checkbox-rating">
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="filter_rating" data-value="5"
                                            class="checkbox filter_rating">
                                        <span class="checkmark">
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="filter_rating" data-value="4"
                                            class="checkbox filter_rating">
                                        <span class="checkmark">
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="lar la-star"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="filter_rating" data-value="3"
                                            class="checkbox filter_rating">
                                        <span class="checkmark">
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="lar la-star"></i>
                                            <i class="lar la-star"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="filter_rating" data-value="2"
                                            class="checkbox filter_rating">
                                        <span class="checkmark">
                                            <i class="las la-star"></i>
                                            <i class="las la-star"></i>
                                            <i class="lar la-star"></i>
                                            <i class="lar la-star"></i>
                                            <i class="lar la-star"></i>
                                        </span>
                                    </label>
                                </div>
                                <div class="single-checkbox-wrap">
                                    <label>
                                        <input type="radio" name="filter_rating" data-value="1"
                                            class="checkbox filter_rating">
                                        <span class="checkmark">
                                            <i class="las la-star"></i>
                                            <i class="lar la-star"></i>
                                            <i class="lar la-star"></i>
                                            <i class="lar la-star"></i>
                                            <i class="lar la-star"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-tag">
                            <h5 class="widget-title">tags</h5>
                            <div class="tag">
                                <a href="#" class="tag-btn ">T-Shirt</a>
                                <a href="#" class="tag-btn ">Healty</a>
                                <a href="#" class="tag-btn ">comfortable</a>
                                <a href="#" class="tag-btn ">yellow</a>
                                <a href="#" class="tag-btn ">frock</a>
                                <a href="#" class="tag-btn ">kameez</a>
                                <a href="#" class="tag-btn ">denim</a>
                                <a href="#" class="tag-btn ">shirt</a>
                                <a href="#" class="tag-btn ">winter</a>
                                <a href="#" class="tag-btn ">men</a>
                                <a href="#" class="tag-btn ">mens</a>
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

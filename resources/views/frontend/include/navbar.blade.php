<!-- nav area start -->
<nav class="navbar navbar-area navbar-expand-lg has-topbar nav-style-01">
    <div class="container nav-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('frontend/assets/uploads/media-uploader/logo-011632034209.png') }}"
                        alt="Logo" />
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav">

                <li class="{{ request()->is('/') ? 'current-menu-item' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ request()->is('about') ? 'current-menu-item' : '' }}">
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li class="menu-item-has-mega-menu {{ request()->is('product') ? 'current-menu-item' : '' }}">
                    <a href="{{ url('/product') }}">Product</a>
                    <div class="xg_mega_menu_wrapper">
                        <div class="xg-mega-menu-container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail">
                                                    <a href=""><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/glad-young-woman-vin-wxnbt1638271100.jpg') }}"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="content"><a href="#">
                                                        <h4 class="title">Casual Shirt</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$30.00</span><del>$30.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a href="#"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-woman-suglasses-with-1k0bj1638270968.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/black-tops">
                                                        <h4 class="title">Black Tops</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$35.00</span><del>$35.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a href="#"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-portrait-beautiful-d-i6ezw1638271057.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/flowery-frock">
                                                        <h4 class="title">Flowery Frock</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$35.00</span><del>$35.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a href="#"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-full-length-portrait-ipb7u1638271011.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/red-tops">
                                                        <h4 class="title">Red Tops</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$35.00</span><del>$35.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a href="#"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-portrait-pretty-lady-ejkko1638270922.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">
                                                        <h4 class="title">Tinted Sunglass</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$35.00</span><del>$35.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a href="#"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-appealing-young-woma-pp5ig1638249594.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/womens-sunglass">
                                                        <h4 class="title">Women's Sunglass</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$35.00</span><del>$35.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a href="#"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-stunning-curly-femal-ae4nx1638249534.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/stylish-glass-for-women">
                                                        <h4 class="title">Stylish Glass For Women</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$30.00</span><del>$30.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/blue-denim-for-gents"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-attractive-laughing-qgrkp1638249024.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/blue-denim-for-gents">
                                                        <h4 class="title">Blue Denim For Gents</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$15.00</span><del>$15.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/polo-shirt"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-handsome-confident-s-2apxz1638248814.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/polo-shirt">
                                                        <h4 class="title">Polo Shirt</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$12.00</span><del>$12.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/full-sleeve-hoodie"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-handsome-attractive-363kb1638248933.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/full-sleeve-hoodie">
                                                        <h4 class="title">Full Sleeve Hoodie</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$12.00</span><del>$12.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/vivid-checked-shirt"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-isolated-smiling-han-smvny1638248869.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/vivid-checked-shirt">
                                                        <h4 class="title">Vivid Checked Shirt</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$12.00</span><del>$12.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/casual-blue-shirt-for-summer"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-waist-up-portrait-ha-rytwx1638248725.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/casual-blue-shirt-for-summer">
                                                        <h4 class="title">Casual Blue Shirt For Summer
                                                        </h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$10.00</span><del>$10.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/casual-blue-shirt-for-winter"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-satisfied-handsome-g-0q2ry1638248725.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/casual-blue-shirt-for-winter">
                                                        <h4 class="title">Casual Blue Shirt For Winter
                                                        </h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$14.00</span><del>$14.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="xg-mega-menu-single-column-wrap">
                                        <ul>
                                            <li class="single-mega-menu-product-item">
                                                <div class="thumbnail"><a
                                                        href="https://bytesed.com/laravel/zaika/blog/navy-blue-suit-for-gents"><img
                                                            src="{{ asset('frontend/assets/uploads/media-uploader/thumb-serious-looking-sass-5y20z1638248680.jpg') }}"
                                                            alt="" /></a></div>
                                                <div class="content"><a
                                                        href="https://bytesed.com/laravel/zaika/product/navy-blue-suit-for-gents">
                                                        <h4 class="title">Navy Blue Suit For Gents</h4>
                                                    </a>
                                                    <div class="price-wrap"><span
                                                            class="price">$28.00</span><del>$28.00</del>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=" menu-item-has-children ">
                    <a>Pages</a>
                    <ul class="sub-menu">

                        <li>
                            <a href="{{ url('/terms') }}">Terms &
                                Conditions</a>
                        </li>
                        <li>
                            <a href="{{ url('/privacy') }}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{ url('/faq') }}">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('blog') ? 'current-menu-item' : '' }}">
                    <a href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="{{ request()->is('contact') ? 'current-menu-item' : '' }}">
                    <a href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="nav-right-content">
            <ul>
                <li class="search position-relative">
                    <div class="search-open">
                        <i class="las la-search icon"></i>
                    </div>

                    <div class="search-bar">
                        <form class="menu-search-form" id="product_search_form"
                            action="https://bytesed.com/laravel/zaika/product">
                            <div class="search-close"> <i class="las la-times"></i> </div>
                            <input class="item-search" name="q" type="text" placeholder="Search Here.....">
                            <button type="submit"> Search Now </button>
                        </form>
                    </div>
                </li>
                <li class="favicon pr-0">
                    <a href="https://bytesed.com/laravel/zaika/product/compare/all">
                        <i class="las la-retweet icon"></i>
                    </a>
                </li>
                <li class="favicon">
                    <a href="https://bytesed.com/laravel/zaika/product/wishlist/all">
                        <i class="lar la-heart icon"></i>
                        <span class="cart-badge" id="wishlist_badge">587</span>
                    </a>
                </li>
                <li class="cart position-relative">
                    <a href="{{ url('/cart') }}">
                        <i class="las la-cart-plus icon"></i>
                        <span class="cart-badge" id="cart_badge">587</span>
                    </a>
                    <div class="quick-cart">
                        <div class="arrow-up"></div>
                        <div id="top_minicart_container">
                            <div id="top_cart_item_box"></div>
                            <div class="total-pricing">
                                <div class="total">
                                    <span class="total">SUB TOTAL:</span>
                                    <span class="amount" id="top_cart_subtotal">00.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ url('/checkout') }}" class="default-btn">checkout</a>
                            <a href="{{ url('/cart') }}" class="default-btn">view
                                cart</a>
                        </div>
                    </div>
                </li>
                <li class="account account-option">
                    <a href="https://bytesed.com/laravel/zaika/login">
                        <span class="text"> account</span>
                        <i class="lar la-user icon"></i>
                    </a>
                    <div class="name-list">
                        <span class="lists"><a
                                href="https://bytesed.com/laravel/zaika/login?type=login">Login</a></span>
                        <span class="lists"><a
                                href="https://bytesed.com/laravel/zaika/register">Register</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar area end -->

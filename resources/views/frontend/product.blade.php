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
                        <div class="col-sm-6 col-md-4">
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
                                                    data-rating='4.6667' data-inventory='SKU-PBXYZ3'
                                                    data-in-stock='149'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="2"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="2" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="2"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/blue-denim-ladies">Blue
                                            Denim Ladies</a></h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">$12.00</li>
                                            <li class="price"><del>$15.00</del></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/casual-shirt">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-glad-young-woman-vin-wxnbt1638271100.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Casual Shirt' data-slug='casual-shirt'
                                                    data-summary='I never spend much time in school but I taught ladies plenty. It&rsquo;s true I hire my body out for pay, hey hey. I&rsquo;ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it&rsquo;s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. &rsquo;Cause I&rsquo;m the unknown stuntman that makes Eastwood look so fine.'
                                                    data-price='$35.00' data-sale-price='$30.00' data-attributes='[]'
                                                    data-category='Women&#039;s Style'
                                                    data-subcategory='[{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Beverages&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/4&quot;}]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/glad-young-woman-vin-wxnbt1638271100.jpg'
                                                    data-rating='' data-inventory='SKU-PBXYZ2'
                                                    data-in-stock='0'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="3"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="3" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="3"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/casual-shirt">Casual
                                            Shirt</a></h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">$30.00</li>
                                            <li class="price"><del>$35.00</del></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/black-tops">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-woman-suglasses-with-1k0bj1638270968.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Black Tops' data-slug='black-tops'
                                                    data-summary='One for all and all for one, Muskehounds are always ready. One for all and all for one, helping everybody. One for all and all for one, it&rsquo;s a pretty story.'
                                                    data-price='$40.00' data-sale-price='$35.00' data-attributes='[]'
                                                    data-category='Women&#039;s Style' data-subcategory='[]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/woman-suglasses-with-1k0bj1638270968.jpg'
                                                    data-rating='' data-inventory='2CGo6Qaf6U'
                                                    data-in-stock='162'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="4"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="4" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="4"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/black-tops">Black Tops</a>
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
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/flowery-frock">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-portrait-beautiful-d-i6ezw1638271057.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Flowery Frock' data-slug='flowery-frock'
                                                    data-summary='One for all and all for one, Muskehounds are always ready. One for all and all for one, helping everybody. One for all and all for one, it&rsquo;s a pretty story.'
                                                    data-price='$40.00' data-sale-price='$35.00'
                                                    data-attributes='{&quot;2&quot;:[{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;M&quot;,&quot;additional_price&quot;:&quot;12&quot;},{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;XL&quot;,&quot;additional_price&quot;:&quot;11&quot;}]}'
                                                    data-category='Women&#039;s Style'
                                                    data-subcategory='[{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Beverages&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/4&quot;}]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/portrait-beautiful-d-i6ezw1638271057.jpg'
                                                    data-rating='' data-inventory='Mm2zc3ipUJ'
                                                    data-in-stock='6'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>


                                            <li><a href="https://bytesed.com/laravel/zaika/product/flowery-frock">Add to
                                                    Wish List <i class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="18" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="https://bytesed.com/laravel/zaika/product/flowery-frock">View
                                                    Options <i class="las la-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/flowery-frock">Flowery
                                            Frock</a></h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">$35.00</li>
                                            <li class="price"><del>$40.00</del></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/red-tops">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-full-length-portrait-ipb7u1638271011.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view" data-title='Red Tops'
                                                    data-slug='red-tops'
                                                    data-summary='One for all and all for one, Muskehounds are always ready. One for all and all for one, helping everybody. One for all and all for one, it&rsquo;s a pretty story.'
                                                    data-price='$40.00' data-sale-price='$35.00' data-attributes='[]'
                                                    data-category='Women&#039;s Style'
                                                    data-subcategory='[{&quot;name&quot;:&quot;Fruits &amp; Vegetables&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/1&quot;},{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Breakfast&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/5&quot;}]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/full-length-portrait-ipb7u1638271011.jpg'
                                                    data-rating='' data-inventory='REDT-54581'
                                                    data-in-stock='0'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="21"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="21" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="21"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/red-tops">Red Tops</a></h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">$35.00</li>
                                            <li class="price"><del>$40.00</del></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-portrait-pretty-lady-ejkko1638270922.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Tinted Sunglass' data-slug='tinted-sunglass'
                                                    data-summary='Knight Rider, a shadowy flight into the dangerous world of a man who does not exist. Michael Knight, a young loner on a crusade to champion the cause of the innocent, the helpless in a world of criminals who operate above the law.'
                                                    data-price='$42.00' data-sale-price='$35.00' data-attributes='[]'
                                                    data-category='Women&#039;s Style' data-subcategory='[]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/portrait-pretty-lady-ejkko1638270922.jpg'
                                                    data-rating='' data-inventory='qKo3xSLF3b'
                                                    data-in-stock='8'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="25"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="25" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="25"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">Tinted
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
                        <div class="col-sm-6 col-md-4">
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
                                                    data-rating='' data-inventory='FSjPuWMIf1'
                                                    data-in-stock='0'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="26"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="26" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="26"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
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
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/stylish-glass-for-women">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-stunning-curly-femal-ae4nx1638249534.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Stylish Glass For Women'
                                                    data-slug='stylish-glass-for-women'
                                                    data-summary='I never spend much time in school but I taught ladies plenty. It&rsquo;s true I hire my body out for pay, hey hey. I&rsquo;ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it&rsquo;s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. &rsquo;Cause I&rsquo;m the unknown stuntman that makes Eastwood look so fine.'
                                                    data-price='$35.00' data-sale-price='$30.00' data-attributes='[]'
                                                    data-category='Women&#039;s Style' data-subcategory='[]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/3'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/stunning-curly-femal-ae4nx1638249534.jpg'
                                                    data-rating='' data-inventory='WFY-002' data-in-stock='0'>Quickview
                                                    <i class="lar la-eye icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="30"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="30" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="30"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
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
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/blue-denim-for-gents">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-attractive-laughing-qgrkp1638249024.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Blue Denim For Gents' data-slug='blue-denim-for-gents'
                                                    data-summary='Mutley, you snickering, floppy eared hound. When courage is needed, you&rsquo;re never around. Those medals you wear on your moth-eaten chest should be there for bungling at which you are best.'
                                                    data-price='$17.00' data-sale-price='$15.00'
                                                    data-attributes='{&quot;1&quot;:[{&quot;type&quot;:&quot;Color&quot;,&quot;name&quot;:&quot;Blue&quot;,&quot;additional_price&quot;:&quot;0&quot;},{&quot;type&quot;:&quot;Color&quot;,&quot;name&quot;:&quot;Cyan&quot;,&quot;additional_price&quot;:&quot;3&quot;}],&quot;2&quot;:[{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;S&quot;,&quot;additional_price&quot;:&quot;0&quot;},{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;M&quot;,&quot;additional_price&quot;:&quot;0&quot;},{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;L&quot;,&quot;additional_price&quot;:&quot;0&quot;},{&quot;type&quot;:&quot;Size&quot;,&quot;name&quot;:&quot;XL&quot;,&quot;additional_price&quot;:&quot;2&quot;}]}'
                                                    data-category='Men&#039;s Fashion'
                                                    data-subcategory='[{&quot;name&quot;:&quot;Snacks&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/3&quot;},{&quot;name&quot;:&quot;Beverages&quot;,&quot;url&quot;:&quot;https:\/\/bytesed.com\/laravel\/zaika\/product\/subcategory\/4&quot;}]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/1'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/attractive-laughing-qgrkp1638249024.jpg'
                                                    data-rating='' data-inventory='SKU-BDM-asbjkas'
                                                    data-in-stock='7'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>


                                            <li><a
                                                    href="https://bytesed.com/laravel/zaika/product/blue-denim-for-gents">Add
                                                    to Wish List <i class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="33" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a
                                                    href="https://bytesed.com/laravel/zaika/product/blue-denim-for-gents">View
                                                    Options <i class="las la-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/blue-denim-for-gents">Blue
                                            Denim For Gents</a></h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">$15.00</li>
                                            <li class="price"><del>$17.00</del></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-new-collection-item single-product-item">
                                <div class="product-img-box">
                                    <a href="https://bytesed.com/laravel/zaika/product/polo-shirt">
                                        <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-handsome-confident-s-2apxz1638248814.jpg"
                                            alt="" />
                                    </a>
                                    <div class="hover">
                                        <ul class="list">
                                            <li><a href="#" id="quickview" class="quick-view"
                                                    data-title='Polo Shirt' data-slug='polo-shirt'
                                                    data-summary='Thundercats are on the move, Thundercats are loose. Feel the magic, hear the roar, Thundercats are loose. Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thunder, thunder, thunder, Thundercats! Thundercats!'
                                                    data-price='$15.00' data-sale-price='$12.00' data-attributes='[]'
                                                    data-category='Men&#039;s Fashion' data-subcategory='[]'
                                                    data-category-url='https://bytesed.com/laravel/zaika/product/category/1'
                                                    data-image='https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/handsome-confident-s-2apxz1638248814.jpg'
                                                    data-rating='' data-inventory='PLSH-521785'
                                                    data-in-stock='245'>Quickview <i class="lar la-eye icon"></i></a>
                                            </li>

                                            <li><a href="#" data-attributes="[]" data-id="35"
                                                    class="add_to_wishlist_ajax">Add to Wish List <i
                                                        class="lar la-heart icon"></i></a></li>

                                            <li><a href="#" data-id="35" class="add_to_compare_ajax">Compare <i
                                                        class="las la-retweet icon"></i></a></li>

                                            <li><a href="#" data-attributes="[]" data-id="35"
                                                    class="add_to_cart_ajax">Add to Cart <i
                                                        class="las la-shopping-cart icon"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details-wrap">
                                    <h3 class="product-title"><a
                                            href="https://bytesed.com/laravel/zaika/product/polo-shirt">Polo Shirt</a>
                                    </h3>
                                    <div class="product-price-details">
                                        <ul class="list">
                                            <li class="price">$12.00</li>
                                            <li class="price"><del>$15.00</del></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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

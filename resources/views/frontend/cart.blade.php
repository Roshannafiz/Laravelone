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
                        <h2 class="page-title"> Cart
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="https://bytesed.com/laravel/zaika">Home</a></li>
                            <li class="list-item"><a href="https://bytesed.com/laravel/zaika/product">product</a>
                            </li>
                            <li class="list-item"><a href="#"> Cart
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cart-container">
        <div class="cart-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-box">
                            <table>
                                <thead>
                                    <tr>
                                        <th>product name</th>
                                        <th>unit price</th>
                                        <th>quantity</th>
                                        <th>total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="thumb">
                                                <a href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">
                                                    <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-portrait-pretty-lady-ejkko1638270922.jpg"
                                                        alt="" />
                                                </a>
                                                <a href="https://bytesed.com/laravel/zaika/product/tinted-sunglass"
                                                    class="product-name">Tinted
                                                    Sunglass (Campaign Product)</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price-box">
                                                <span class="price">$35.00</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input class="quantity form-control item_quantity_info" type="number"
                                                    min="1" max="10000000" data-id="25"
                                                    data-attr="{&quot;type&quot;:&quot;Campaign Product&quot;,&quot;price&quot;:35}"
                                                    value="1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="total">
                                                <span class="price">$35.00</span>
                                                <a href="#" class="remove_cart_item" data-id="25"
                                                    data-attr="{&quot;type&quot;:&quot;Campaign Product&quot;,&quot;price&quot;:35}">
                                                    <i class="las la-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="thumb">
                                                <a href="https://bytesed.com/laravel/zaika/product/tinted-sunglass">
                                                    <img src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/grid-portrait-pretty-lady-ejkko1638270922.jpg"
                                                        alt="" />
                                                </a>
                                                <a href="https://bytesed.com/laravel/zaika/product/tinted-sunglass"
                                                    class="product-name">Tinted
                                                    Sunglass</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price-box">
                                                <span class="price">$35.00</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group">
                                                <input class="quantity form-control item_quantity_info" type="number"
                                                    min="1" max="10000000" data-id="25" data-attr="[]" value="1">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="total">
                                                <span class="price">$35.00</span>
                                                <a href="#" class="remove_cart_item" data-id="25" data-attr="[]">
                                                    <i class="las la-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-btn-wrapper one">
                            <div class="left">
                                <a href="#" class="default-btn clear_cart">Clear Cart</a>
                                <a href="#" class="default-btn update_cart">Update Cart</a>
                            </div>
                            <div class="right">
                                <a href="https://bytesed.com/laravel/zaika/product" class="default-btn">Continue
                                    Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <!-- discount coupon area -->
                        <div class="discount-coupon-area">
                            <h4 class="title">Coupon Discount </h4>
                            <p class="info">There are many variations of passages of Lorem Ipsum available,
                                but the majority have
                                suffered alteration in some.</p>
                            <form action="https://bytesed.com/laravel/zaika/product/cart/ajax/coupon" method="POST"
                                class="discount-coupon">
                                <input type="hidden" name="_token" value="fRqxRHEGp3UxoFWfI7TNso2npmpp5ErTgBHApklZ">
                                <div class="form-group">
                                    <input type="text" name="coupon" id="coupon_input" class="form-control"
                                        placeholder="enter coupon code" value="">
                                </div>
                                <button type="submit">Apply Coupon</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="cart-total">
                            <h4 class="title">Cart Total</h4>
                            <div class="cost-name-amount">
                                <span class="same sub">sub total:</span>
                                <span class="same sub-amount">$70.00</span>
                            </div>
                            <div class="btn-wrapper">
                                <form action="https://bytesed.com/laravel/zaika/checkout">
                                    <input type="hidden" name="coupon" class="form-control"
                                        placeholder="Enter your coupon code" value="">
                                    <button class="default-btn">Process to Checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
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

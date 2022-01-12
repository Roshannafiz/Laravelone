<?php use App\Models\Product; ?>
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
                    @foreach ($userCartItems as $item)
                        <tr>
                            <td>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('admin/upload-product/' . $item['product']['product_image']) }}"
                                            alt="Product Image" />
                                    </a>
                                    <a href="#" class="product-name">{{ $item['product']['name'] }}</a>
                                </div>
                            </td>
                            <td>
                                <div class="price-box">
                                    <span class="price">
                                        {{ $item['product']['seal_price'] }}
                                        <input type="hidden" class="iprice"
                                            value="{{ $item['product']['seal_price'] }}">
                                    </span>
                                </div>
                            </td>

                            <div class="input-group">
                                <td class="cart-product-quantity" width="150px">
                                    <div class="input-group quantity">
                                        <!----- Quantity ----->
                                        <input onchange="subTotal()" type="number" min="1" max="10"
                                            class="qty-input iquantity form-control" value="{{ $item['quantity'] }}">
                                    </div>
                                </td>
                            </div>

                            <td>
                                <div class="total">
                                    <span class="price itotal">
                                        <!--- Sub Total Price
                                            Came To Ajax......
                                        Sub Total Price ------>
                                    </span>
                                    <a href="{{ url('delete_cart/' . $item['id']) }}" class="remove_cart_item">
                                        <i class="las la-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="cart-btn-wrapper one">
            <div class="left">
                <a href="#" class="default-btn clear_cart">Clear Cart</a>
                <a href="#" class="default-btn update_cart">Update Cart</a>
            </div>
            <div class="right">
                <a href="{{ url('/product') }}" class="default-btn">Continue
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
            <p class="info">There are many variations of passages of Lorem Ipsum
                available,
                but the majority have
                suffered alteration in some.</p>
            <form action="https://bytesed.com/laravel/zaika/product/cart/ajax/coupon" method="POST"
                class="discount-coupon">
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
                <span class="same total">total:</span>
                <span class="same total-amount" id="gtotal">
                    <!----- Total Price
                        Came To Ajax...
                        ------------>
                </span>
            </div>
            <div class="btn-wrapper">
                <form action="#">
                    @if ($user = Auth::user())
                        <a href="{{ url('/checkout') }}" class="default-btn">Process to Checkout</a>
                    @else
                        <a href="{{ url('/login') }}" class="default-btn">Process to Checkout</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Manage Showing Cart Details Usign Ajax
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal() {
        gt = 0;
        for (i = 0; i < iprice.length; i++) {
            itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
            gt = gt + (iprice[i].value) * (iquantity[i].value)
        }
        gtotal.innerText = gt;
    }

    subTotal();
</script>

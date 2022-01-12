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
                        <h2 class="page-title"> Checkout
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item"> Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-area-wrapper widt-coupon">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="checkout-inner-content">

                        <!-- discount coupon area -->
                        <div class="discount-coupon-area margin-bottom-50 margin-top-20 coupon_section d-none">
                            <form action="" class="discount-coupon">
                                <div class="form-group">
                                    <input type="text" name="coupon" class="form-control"
                                        placeholder="Enter your coupon code" value="">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="default-btn" type="submit">apply coupon </button>
                                </div>
                            </form>
                        </div>

                        <!-- Shepping details area -->
                        <div class="billing-details-area-wrapper">
                            <h3 class="title">Shipping detail</h3>
                            <form action="{{ url('place_order') }}" method="POST" id="billing_info"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="country">Country</label>
                                        <select name="country" id="country">
                                            <option value="{{ Auth::user()->country }}">{{ Auth::user()->country }}
                                            </option>
                                            <option value="new zealand">New Zealand</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="f-name">Full name</label>
                                        <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group col-lg-12 col-12">
                                        <label for="address_amail">Email</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ Auth::user()->email }}" />
                                    </div>
                                    <div class="form-group col-lg-12 col-12">
                                        <label for="address_phone">Phone</label>
                                        <input type="text" id="phone" name="mobile"
                                            value="{{ Auth::user()->mobile }}" />
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" name="address"
                                            value="{{ Auth::user()->address }}">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="address_03">City/Town</label>
                                        <input type="text" id="city" name="city" value="{{ Auth::user()->city }}">
                                    </div>
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="address_province_ship">State</label>
                                        <select id="state" name="state">
                                            <option value="{{ Auth::user()->state }}">{{ Auth::user()->state }}
                                            </option>
                                            <option value="dhaka">Dhaka</option>
                                            <option value="rajshahi">Rajshahi</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="address_zip_ship_2">Zip Code</label>
                                        <input type="text" id="pincode" name="pincode"
                                            value="{{ Auth::user()->pincode }}" />
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="order_note">Order Note(Optinal)</label>
                                        <textarea class="form-control" id="order_note" name="order_note"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" id="checkout_total_container">
                    <div class="order cart-total">

                        <!--------- User Order Items --------->
                        <h4 class="title" style="text-align: left !important">your order</h4>
                        <div class="sum-bar"></div>
                        <?php $total = 0; ?>
                        @foreach ($userCartItems as $item)
                            @php
                                $sub_total = $item['product']['seal_price'] * $item['quantity'];
                                $total += $sub_total;
                            @endphp
                            <div class="cost-name-amount">
                                <a href="#">
                                    <img style="width: 70px; height: 70px;"
                                        src="{{ asset('admin/upload-product/' . $item['product']['product_image']) }}"
                                        alt="Product Image" />
                                </a>
                                <span class="same sub">{{ $item['product']['name'] }}
                                    <span class="details">{{ $item['quantity'] }} PCS *
                                        ${{ $item['product']['seal_price'] }}</span>
                                </span>
                                <span class="same sub-amount">${{ $item['product']['seal_price'] }}</span>
                            </div>

                            <!------ Hidden Flied ------>
                            <input type="hidden" name="total" value="{{ $total }}">
                            <input type="hidden" name="subtotal" value="{{ $total }}">
                            <!------ Hidden Flied ------>
                        @endforeach
                        <div class="sum-bar"></div>
                        <div class="cost-name-amount sub-total-wrap">
                            <span class="total">sub total:</span>
                            <span class="total-amount" id="subtotal"
                                data-amount="{{ $total }}">${{ $total }}</span>
                        </div>
                        <div class="sum-bar"></div>
                        <div class="cost-name-amount sub-total-wrap shipping-container">
                            <div class="shipping-option-container">
                                <div class="cost-name-amount all-shipping-options">
                                    <span class="same sub">
                                        <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option"
                                            name="selected_shipping_option" value="3">
                                        Free Shipping
                                    </span>
                                    <span class="same sub-amount">${{ $total }}</span>
                                </div>
                            </div>
                            <div class="shipping-cost">
                                <span class="total shipping">shipping:</span>
                                <span class="total-amount" id="shipping_charge">$0.00</span>
                            </div>
                        </div>
                        <div class="sum-bar"></div>
                        <div class="cost-name-amount sub-total-wrap">
                            <span class="total vat">vat:</span>
                            <span class="total-amount">(+)<span id="tax_amount">$0.00</span></span>
                        </div>
                        <div class="sum-bar"></div>
                        <div class="cost-name-amount sub-total-wrap">
                            <span class="total discount">discount <span class="ex">(coupon)</span></span>
                            <span class="total-amount" id="coupon_amount">(-)$0.00</span>
                        </div>
                        <div class="sum-bar"></div>
                        <div class="cost-name-amount total-wrap">
                            <span class="total"> total:</span>
                            <span class="total-amount">
                                <span class="ex" id="total_amount">${{ $total }}</span>
                            </span>
                        </div>
                        <div class="sum-bar"></div>
                        <div id="payment_method_input">
                            <div class="payment-gateway-wrapper"><input type="hidden" name="payment_type"
                                    value="paypal">
                                <ul>
                                    <li data-gateway="paypal" class="selected">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/paypal1615321225.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="manual_payment">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/79412a34ea6a84ad988a7141aa7299be1615322824.jpeg"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="mollie">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/mollie1615321921.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="paytm">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/paytm-logo-630x3361615321747.jpeg"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="stripe">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/stripe1615321788.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="razorpay">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/216-2164303-razorpay-logo-png1615321852.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="flutterwave">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/flutterwave-logo-vector1615321957.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="paystack">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/paystack1615321887.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="bank_transfer">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/png-transparent-computer-icons-bank-payment-money-wire-transfer-bank-transfer1634029472.png"
                                                alt="" /></div>
                                    </li>
                                    <li data-gateway="cheque_payment">
                                        <div class="img-select"><img
                                                src="https://bytesed.com/laravel/zaika/assets/uploads/media-uploader/2828543-2001634029618.png"
                                                alt="" /></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group manual_payment_transaction_field" style="display: none">
                                <div class="label">Transaction ID</div>
                                <input type="text" name="transaction_id" placeholder="Transaction ID"
                                    class="form-control">
                                <span class="help-info">Manual payment gateway description</span>
                            </div>
                            <div class="form-group bank_transfer_transaction_field" style="display: none">
                                <div class="label">Bank Transfer Image</div>
                                <input type="file" name="bank_transfer_input" class="form-control-file">
                                <span class="help-info">Bank Transfer Description</span>
                            </div>
                            <div class="form-group cheque_payment_transaction_field" style="display: none">
                                <div class="label">Cheque Payment Image</div>
                                <input type="file" name="cheque_payment_input" class="form-control-file">
                                <span class="help-info">Cheque Payment Description</span>
                            </div>
                        </div>

                        <div class="btn-wrapper btn-top">
                            <button type="submit" class="default-btn">Proceed to checkout</button>
                        </div>
                        <div class="btn-wrapper ">
                            <a href="{{ url('/cart') }}" class="default-btn reverse">Return to
                                cart</a>
                        </div>
                    </div>

                </div>
                </form>
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

    <script>
        let site_currency_symbol = '$';

        (function($) {
            'use strict'
            $(document).ready(function() {
                if ($('input[name=coupon]').val().length) {
                    $('.coupon_section').removeClass('d-none');
                }

                $('.toggle_coupon').on('click', function(e) {
                    e.preventDefault();
                    if ($('.coupon_section').hasClass('d-none')) {
                        $('.coupon_section').removeClass('d-none').hide().slideDown(500);
                    } else {
                        $('.coupon_section').slideUp(500);
                        setTimeout(function() {
                            $('.coupon_section').addClass('d-none');
                            $('input[name=coupon]').val('');
                        }, 600);
                    }
                });

                $('#toggle_login').on('click', function(e) {
                    e.preventDefault();
                    if ($('#login_container').hasClass('d-none')) {
                        $('#login_container').removeClass('d-none').hide().slideDown(500);
                    } else {
                        $('#login_container').slideUp(500);
                        setTimeout(function() {
                            $('#login_container').addClass('d-none');
                        }, 600);
                    }
                });

                $('#create_account').on('change', function() {
                    if ($(this).is(':checked')) {
                        $('#username').parent().fadeIn(500);
                        $('#password').parent().fadeIn(500);
                        $('#confirm_password').parent().fadeIn(500);
                    } else {
                        $('#username').parent().fadeOut(500);
                        $('#password').parent().fadeOut(500);
                        $('#confirm_password').parent().fadeOut(500);
                    }
                });

                $('#country').on('change', function() {
                    let id = $(this).val();
                    // let defaul_
                    $.get('https://bytesed.com/laravel/zaika/country-info', {
                        id: id
                    }).then(function(data) {
                        $('#state').html('<option value="">Select State</option>');
                        data.states.map(function(e) {
                            $('#state').append('<option value="' + e.id + '">' + e
                                .name + '</option>');
                        });
                        $('#tax_amount').text(site_currency_symbol + Number(data.tax).toFixed(
                            2));

                        $('.shipping-option-container').html('');

                        let default_shipping_id = undefined;
                        let default_shipping_select = '';
                        if (data.default_shipping.id) {
                            let default_shipping = data.default_shipping;
                            default_shipping_id = default_shipping['id'];
                            default_shipping_select =
                                '<div class="cost-name-amount all-shipping-options">\
                                                                                            <span class="same sub">\
                                                                                                <input type="radio" checked class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                                                        data-minimum-amt="' +
                                default_shipping[
                                    'available_options']
                                [
                                    'minimum_order_amount'
                                ] + '" \
                                                                                                        data-amount="' +
                                default_shipping[
                                    'available_options'][
                                    'cost'
                                ] +
                                '" \
                                                                                                        name="selected_shipping_option" value="' +
                                default_shipping[
                                    'id'] +
                                '">' +
                                default_shipping['name'] +
                                '\
                                                                                            </span>\
                                                                                            <span class="same sub-amount">' +
                                site_currency_symbol +
                                default_shipping[
                                    'available_options']['cost'] + '</span>\
                                                                                        </div>';
                            $('.shipping-option-container').append(default_shipping_select);
                            $('#shipping_charge').text(site_currency_symbol + default_shipping[
                                'available_options']['cost']);
                        }
                        // set shipping options
                        if (data.shipping_options.length) {
                            data.shipping_options.map(function(shipping_data) {
                                if (shipping_data['id'] != default_shipping_id) {
                                    let option =
                                        '<div class="cost-name-amount all-shipping-options">\
                                                                                                <span class="same sub">\
                                                                                                    <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                                                            data-minimum-amt="' +
                                        shipping_data[
                                            'available_options'][
                                            'minimum_order_amount'
                                        ] +
                                        '" \
                                                                                                            data-amount="' +
                                        shipping_data[
                                            'available_options'][
                                            'cost'
                                        ] +
                                        '" \
                                                                                                            name="selected_shipping_option" value="' +
                                        shipping_data[
                                            'id'] +
                                        '">' +
                                        shipping_data['name'] +
                                        '\
                                                                                                </span>\
                                                                                                <span class="same sub-amount">' +
                                        site_currency_symbol +
                                        shipping_data[
                                            'available_options']['cost'] + '</span>\
                                                                                            </div>';
                                    $('.shipping-option-container').append(option);
                                }
                            });
                        } else {
                            $('#shipping_charge').text(site_currency_symbol + Number(data
                                .default_shipping_cost));
                        }

                        calculateTotal();
                    });
                });

                $(document).on('change', '.shipping-option', function() {
                    let amount = $(this).data('amount');
                    $('#shipping_charge').text(site_currency_symbol + amount);
                });

                $(document).on('change', 'input[name=selected_shipping_option]', function() {
                    let subtotal = Number($('#subtotal').data('amount'));
                    let min_order_amt = Number($(this).data('minimumAmt'));
                    if (subtotal == min_order_amt) {
                        $('#shipping_charge').text(site_currency_symbol + Number($(this).data(
                            'amount')));
                    }
                    calculateTotal();
                });

                $('#state').on('change', function() {
                    let id = $(this).val();
                    $.get('https://bytesed.com/laravel/zaika/state-info', {
                        id: id
                    }).then(function(data) {
                        $('#tax_amount').text(site_currency_symbol + Number(data.tax).toFixed(
                            2));

                        $('.shipping-option-container').html('');

                        let default_shipping_id = undefined;
                        let default_shipping_select = '';
                        if (data.default_shipping.id) {
                            let default_shipping = data.default_shipping;
                            default_shipping_id = default_shipping['id'];
                            default_shipping_select =
                                '<div class="cost-name-amount all-shipping-options">\
                                                                                            <span class="same sub">\
                                                                                                <input type="radio" checked class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                                                        data-minimum-amt="' +
                                default_shipping[
                                    'available_options']
                                [
                                    'minimum_order_amount'
                                ] + '" \
                                                                                                        data-amount="' +
                                default_shipping[
                                    'available_options'][
                                    'cost'
                                ] +
                                '" \
                                                                                                        name="selected_shipping_option" value="' +
                                default_shipping[
                                    'id'] +
                                '">' +
                                default_shipping['name'] +
                                '\
                                                                                            </span>\
                                                                                            <span class="same sub-amount">' +
                                site_currency_symbol +
                                default_shipping[
                                    'available_options']['cost'] + '</span>\
                                                                                        </div>';
                            $('.shipping-option-container').append(default_shipping_select);
                            $('#shipping_charge').text(site_currency_symbol + default_shipping[
                                'available_options']['cost']);
                        }
                        // set shipping options
                        if (data.shipping_options.length) {
                            data.shipping_options.map(function(shipping_data) {
                                if (shipping_data['id'] != default_shipping_id) {
                                    let option =
                                        '<div class="cost-name-amount all-shipping-options">\
                                                                                                <span class="same sub">\
                                                                                                    <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                                                            data-minimum-amt="' +
                                        shipping_data[
                                            'available_options'][
                                            'minimum_order_amount'
                                        ] +
                                        '" \
                                                                                                            data-amount="' +
                                        shipping_data[
                                            'available_options'][
                                            'cost'
                                        ] +
                                        '" \
                                                                                                            name="selected_shipping_option" value="' +
                                        shipping_data[
                                            'id'] +
                                        '">' +
                                        shipping_data['name'] +
                                        '\
                                                                                                </span>\
                                                                                                <span class="same sub-amount">' +
                                        site_currency_symbol +
                                        shipping_data[
                                            'available_options']['cost'] + '</span>\
                                                                                            </div>';
                                    $('.shipping-option-container').append(option);
                                }
                            });
                        } else {
                            $('#shipping_charge').text(site_currency_symbol + Number(data
                                .default_shipping_cost));
                        }

                        calculateTotal();
                    });
                });

                $(document).on('click', '#login_btn', function(e) {
                    e.preventDefault();
                    var formContainer = $('#login_form_order_page');
                    var el = $(this);
                    var username = formContainer.find('input[name="username"]').val();
                    var password = formContainer.find('input[name="password"]').val();
                    var remember = formContainer.find('input[name="remember"]').val();

                    el.text('Please Wait');

                    $.ajax({
                        type: 'post',
                        url: "https://bytesed.com/laravel/zaika/ajax-login",
                        data: {
                            _token: "fRqxRHEGp3UxoFWfI7TNso2npmpp5ErTgBHApklZ",
                            username: username,
                            password: password,
                            remember: remember,
                        },
                        success: function(data) {
                            if (data.status == 'invalid') {
                                el.text('Login')
                                formContainer.find('.error-wrap').html(
                                    '<div class="alert alert-danger">' + data.msg +
                                    '</div>');
                            } else {
                                formContainer.find('.error-wrap').html('');
                                el.text('Login Success.. Redirecting ..');
                                location.reload();
                            }
                        },
                        error: function(data) {
                            var response = data.responseJSON.errors;
                            formContainer.find('.error-wrap').html(
                                '<ul class="alert alert-danger"></ul>');
                            $.each(response, function(value, index) {
                                formContainer.find('.error-wrap ul').append('<li>' +
                                    index + '</li>');
                            });
                            el.text('Login');
                        }
                    });
                });

                $(document).on('click', '.payment-gateway-wrapper > ul > li', function(e) {
                    e.preventDefault();
                    var gateway = $(this).data('gateway');

                    $('.manual_payment_transaction_field').hide();
                    $('.bank_transfer_transaction_field').hide();
                    $('.cheque_payment_transaction_field').hide();

                    if (gateway == 'manual_payment') {
                        $('.manual_payment_transaction_field').show();
                    } else if (gateway == 'bank_transfer') {
                        $('.bank_transfer_transaction_field').show();
                    } else if (gateway == 'cheque_payment') {
                        $('.cheque_payment_transaction_field').show();
                    }

                    $(this).addClass('selected').siblings().removeClass('selected');
                    $('.payment-gateway-wrapper').find(('input')).val(gateway);
                });




            });
        })(jQuery)
    </script>

</body>

</html>

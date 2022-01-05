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
                        <p class="query">
                            <i class="las la-circle icon"></i>
                            Returning customer?
                            <a href="#" id="toggle_login">Click here to login</a>
                        </p>

                        <div class="discount-coupon-area margin-bottom-30 d-none" id="login_container">
                            <h4 class="title">sign in</h4>
                            <p class="info">
                                Login to buy the product as user
                            </p>
                            <form class="form-wrapper" id="login_form_order_page">
                                <div class="error-wrap text-center"></div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-12">
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            name="username" aria-describedby="emailHelp"
                                            placeholder="User Name or Email">
                                    </div>
                                    <div class="form-group col-lg-6 col-12">
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                    <div class="box-wrap">
                                        <div class="left">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                name="remember">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit" id="login_btn" class="default-btn">sign in</button>
                                </div>
                                <div class="sign-in-with">
                                    <a href="https://bytesed.com/laravel/zaika/google/redirect" class="special-account">
                                        <img src="https://bytesed.com/laravel/zaika/assets/frontend/img/icon/google-icon.svg"
                                            alt="icon">
                                    </a>
                                    <a href="https://bytesed.com/laravel/zaika/facebook/redirect"
                                        class="special-account">
                                        <img src="https://bytesed.com/laravel/zaika/assets/frontend/img/icon/Facebook-icon.svg"
                                            alt="icon">
                                    </a>
                                </div>
                            </form>
                        </div>

                        <p class="query">
                            <i class="las la-circle icon"></i>
                            Have a coupon?
                            <a href="#" class="toggle_coupon">Click here to enter your code</a>
                        </p>

                        <!-- discount coupon area -->
                        <div class="discount-coupon-area margin-bottom-50 margin-top-20 coupon_section d-none">
                            <h4 class="title">coupon discount</h4>
                            <p class="info">
                                There are many variations of passages of Lorem Ipsum available, but the
                                majority have suffered alteration in some.
                            </p>

                            <form action="https://bytesed.com/laravel/zaika/checkout-apply-coupon"
                                class="discount-coupon">
                                <div class="form-group">
                                    <input type="text" name="coupon" class="form-control"
                                        placeholder="Enter your coupon code" value="">
                                </div>
                                <div class="btn-wrapper">
                                    <button class="default-btn" type="submit">apply coupon </button>
                                </div>
                            </form>
                        </div>

                        <!-- billing details area -->
                        <div class="billing-details-area-wrapper">
                            <h3 class="title">Billing detail</h3>
                            <form action="https://bytesed.com/laravel/zaika/checkout" method="POST" id="billing_info"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="fRqxRHEGp3UxoFWfI7TNso2npmpp5ErTgBHApklZ">
                                <input type="hidden" name="coupon_code" value="">
                                <input type="hidden" name="tax_amount">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="country">Country</label>
                                        <select name="country" id="country">
                                            <option value="">Select Country</option>
                                            <option value="1">Bangladesh</option>
                                            <option value="2">USA</option>
                                            <option value="5">Australia</option>
                                            <option value="6">New Zealand</option>
                                            <option value="7">Switzerland</option>
                                            <option value="8">Turkey</option>
                                            <option value="9">Afghanistan</option>
                                            <option value="10">Albania</option>
                                            <option value="11">Algeria</option>
                                            <option value="12">Andorra</option>
                                            <option value="13">Angola</option>
                                            <option value="14">Anguilla</option>
                                            <option value="15">Antigua &amp;amp; Barbuda</option>
                                            <option value="16">Argentina</option>
                                            <option value="17">Armenia</option>
                                            <option value="18">Aruba</option>
                                            <option value="19">Australia</option>
                                            <option value="20">Austria</option>
                                            <option value="21">Azerbaijan</option>
                                            <option value="22">Bahamas</option>
                                            <option value="23">Bahrain</option>
                                            <option value="24">Bangladesh</option>
                                            <option value="25">Barbados</option>
                                            <option value="26">Belarus</option>
                                            <option value="27">Belgium</option>
                                            <option value="28">Belize</option>
                                            <option value="29">Benin</option>
                                            <option value="30">Bermuda</option>
                                            <option value="31">Bhutan</option>
                                            <option value="32">Bolivia</option>
                                            <option value="33">Bosnia &amp;amp; Herzegovina</option>
                                            <option value="34">Botswana</option>
                                            <option value="35">Brazil</option>
                                            <option value="36">British Virgin Islands</option>
                                            <option value="37">Brunei</option>
                                            <option value="38">Bulgaria</option>
                                            <option value="39">Burkina Faso</option>
                                            <option value="40">Burundi</option>
                                            <option value="41">Cambodia</option>
                                            <option value="42">Cameroon</option>
                                            <option value="43">Cape Verde</option>
                                            <option value="44">Cayman Islands</option>
                                            <option value="45">Chad</option>
                                            <option value="46">Chile</option>
                                            <option value="47">China</option>
                                            <option value="48">Colombia</option>
                                            <option value="49">Congo</option>
                                            <option value="50">Cook Islands</option>
                                            <option value="51">Costa Rica</option>
                                            <option value="52">Cote D Ivoire</option>
                                            <option value="53">Croatia</option>
                                            <option value="54">Cruise Ship</option>
                                            <option value="55">Cuba</option>
                                            <option value="56">Cyprus</option>
                                            <option value="57">Czech Republic</option>
                                            <option value="58">Denmark</option>
                                            <option value="59">Djibouti</option>
                                            <option value="60">Dominica</option>
                                            <option value="61">Dominican Republic</option>
                                            <option value="62">Ecuador</option>
                                            <option value="63">Egypt</option>
                                            <option value="64">El Salvador</option>
                                            <option value="65">Equatorial Guinea</option>
                                            <option value="66">Estonia</option>
                                            <option value="67">Ethiopia</option>
                                            <option value="68">Falkland Islands</option>
                                            <option value="69">Faroe Islands</option>
                                            <option value="70">Fiji</option>
                                            <option value="71">Finland</option>
                                            <option value="72">France</option>
                                            <option value="73">French Polynesia</option>
                                            <option value="74">French West Indies</option>
                                            <option value="75">Gabon</option>
                                            <option value="76">Gambia</option>
                                            <option value="77">Georgia</option>
                                            <option value="78">Germany</option>
                                            <option value="79">Ghana</option>
                                            <option value="80">Gibraltar</option>
                                            <option value="81">Greece</option>
                                            <option value="82">Greenland</option>
                                            <option value="83">Grenada</option>
                                            <option value="84">Guam</option>
                                            <option value="85">Guatemala</option>
                                            <option value="86">Guernsey</option>
                                            <option value="87">Guinea</option>
                                            <option value="88">Guinea Bissau</option>
                                            <option value="89">Guyana</option>
                                            <option value="90">Haiti</option>
                                            <option value="91">Honduras</option>
                                            <option value="92">Hong Kong</option>
                                            <option value="93">Hungary</option>
                                            <option value="94">Iceland</option>
                                            <option value="95">India</option>
                                            <option value="96">Indonesia</option>
                                            <option value="97">Iran</option>
                                            <option value="98">Iraq</option>
                                            <option value="99">Ireland</option>
                                            <option value="100">Isle of Man</option>
                                            <option value="101">Israel</option>
                                            <option value="102">Italy</option>
                                            <option value="103">Jamaica</option>
                                            <option value="104">Japan</option>
                                            <option value="105">Jersey</option>
                                            <option value="106">Jordan</option>
                                            <option value="107">Kazakhstan</option>
                                            <option value="108">Kenya</option>
                                            <option value="109">Kuwait</option>
                                            <option value="110">Kyrgyz Republic</option>
                                            <option value="111">Laos</option>
                                            <option value="112">Latvia</option>
                                            <option value="113">Lebanon</option>
                                            <option value="114">Lesotho</option>
                                            <option value="115">Liberia</option>
                                            <option value="116">Libya</option>
                                            <option value="117">Liechtenstein</option>
                                            <option value="118">Lithuania</option>
                                            <option value="119">Luxembourg</option>
                                            <option value="120">Macau</option>
                                            <option value="121">Macedonia</option>
                                            <option value="122">Madagascar</option>
                                            <option value="123">Malawi</option>
                                            <option value="124">Malaysia</option>
                                            <option value="125">Maldives</option>
                                            <option value="126">Mali</option>
                                            <option value="127">Malta</option>
                                            <option value="128">Mauritania</option>
                                            <option value="129">Mauritius</option>
                                            <option value="130">Mexico</option>
                                            <option value="131">Moldova</option>
                                            <option value="132">Monaco</option>
                                            <option value="133">Mongolia</option>
                                            <option value="134">Montenegro</option>
                                            <option value="135">Montserrat</option>
                                            <option value="136">Morocco</option>
                                            <option value="137">Mozambique</option>
                                            <option value="138">Namibia</option>
                                            <option value="139">Nepal</option>
                                            <option value="140">Netherlands</option>
                                            <option value="141">Netherlands Antilles</option>
                                            <option value="142">New Caledonia</option>
                                            <option value="143">New Zealand</option>
                                            <option value="144">Nicaragua</option>
                                            <option value="145">Niger</option>
                                            <option value="146">Nigeria</option>
                                            <option value="147">Norway</option>
                                            <option value="148">Oman</option>
                                            <option value="149">Pakistan</option>
                                            <option value="150">Palestine</option>
                                            <option value="151">Panama</option>
                                            <option value="152">Papua New Guinea</option>
                                            <option value="153">Paraguay</option>
                                            <option value="154">Peru</option>
                                            <option value="155">Philippines</option>
                                            <option value="156">Poland</option>
                                            <option value="157">Portugal</option>
                                            <option value="158">Puerto Rico</option>
                                            <option value="159">Qatar</option>
                                            <option value="160">Reunion</option>
                                            <option value="161">Romania</option>
                                            <option value="162">Russia</option>
                                            <option value="163">Rwanda</option>
                                            <option value="164">Saint Pierre &amp;amp; Miquelon</option>
                                            <option value="165">Samoa</option>
                                            <option value="166">San Marino</option>
                                            <option value="167">Satellite</option>
                                            <option value="168">Saudi Arabia</option>
                                            <option value="169">Senegal</option>
                                            <option value="170">Serbia</option>
                                            <option value="171">Seychelles</option>
                                            <option value="172">Sierra Leone</option>
                                            <option value="173">Singapore</option>
                                            <option value="174">Slovakia</option>
                                            <option value="175">Slovenia</option>
                                            <option value="176">South Africa</option>
                                            <option value="177">South Korea</option>
                                            <option value="178">Spain</option>
                                            <option value="179">Sri Lanka</option>
                                            <option value="180">St Kitts &amp;amp; Nevis</option>
                                            <option value="181">St Lucia</option>
                                            <option value="182">St Vincent</option>
                                            <option value="183">St. Lucia</option>
                                            <option value="184">Sudan</option>
                                            <option value="185">Suriname</option>
                                            <option value="186">Swaziland</option>
                                            <option value="187">Sweden</option>
                                            <option value="188">Switzerland</option>
                                            <option value="189">Syria</option>
                                            <option value="190">Taiwan</option>
                                            <option value="191">Tajikistan</option>
                                            <option value="192">Tanzania</option>
                                            <option value="193">Thailand</option>
                                            <option value="194">Timor L&#039;Este</option>
                                            <option value="195">Togo</option>
                                            <option value="196">Tonga</option>
                                            <option value="197">Trinidad &amp;amp; Tobago</option>
                                            <option value="198">Tunisia</option>
                                            <option value="199">Turkey</option>
                                            <option value="200">Turkmenistan</option>
                                            <option value="201">Turks &amp;amp; Caicos</option>
                                            <option value="202">Uganda</option>
                                            <option value="203">Ukraine</option>
                                            <option value="204">United Arab Emirates</option>
                                            <option value="205">United Kingdom</option>
                                            <option value="206">Uruguay</option>
                                            <option value="207">Uzbekistan</option>
                                            <option value="208">Venezuela</option>
                                            <option value="209">Vietnam</option>
                                            <option value="210">Virgin Islands (US)</option>
                                            <option value="211">Yemen</option>
                                            <option value="212">Zambia</option>
                                            <option value="213">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="f-name">Full name</label>
                                        <input type="text" id="f-name" name="name" value="">
                                    </div>
                                    <div class="form-group col-lg-12 col-12">
                                        <label for="address_amail">Email</label>
                                        <input type="email" id="email" name="email" value="" />
                                    </div>
                                    <div class="form-group col-lg-12 col-12">
                                        <label for="address_phone">Phone</label>
                                        <input type="text" id="phone" name="phone" value="" />
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="address_01">Address</label>
                                        <input type="text" id="address_01" name="address" value="">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="address_03">City/Town</label>
                                        <input type="text" id="city" name="city" value="">
                                    </div>
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="address_province_ship">State</label>
                                        <select id="state" name="state">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-12">
                                        <label for="address_zip_ship_2">Zip Code</label>
                                        <input type="text" id="zipcode" name="zipcode" value="" />
                                    </div>

                                    <div class="form-group form-check col-12">
                                        <input type="checkbox" id="create_account" name="create_account"
                                            class="form-check-input">
                                        <label class="form-check-label" for="create_account">Create an Account?</label>
                                    </div>
                                    <div class="form-group col-lg-12 col-12" style="display: none">
                                        <label for="username">username</label>
                                        <input type="text" name="username" class="form-control" id="username">
                                    </div>
                                    <div class="form-group col-lg-6 col-12" style="display: none">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-group col-lg-6 col-12" style="display: none">
                                        <label for="confirm_password">Confirmed Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="confirm_password">
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="order_note">Order Note</label>
                                        <textarea class="form-control" id="order_note" name="order_note"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" id="checkout_total_container">
                    <div class="order cart-total">
                        <h4 class="title">your order</h4>
                        <div class="sum-bar"></div>
                        <div class="cost-name-amount">
                            <span class="same sub">Tinted Sunglass (Campaign Product)
                                <span class="details">1 PCS *
                                    $35.00</span>
                            </span>
                            <span class="same sub-amount">$35.00</span>
                        </div>
                        <div class="cost-name-amount">
                            <span class="same sub">Tinted Sunglass
                                <span class="details">1 PCS *
                                    $35.00</span>
                            </span>
                            <span class="same sub-amount">$35.00</span>
                        </div>

                        <div class="sum-bar"></div>
                        <div class="cost-name-amount sub-total-wrap">
                            <span class="total">sub total:</span>
                            <span class="total-amount" id="subtotal" data-amount="70">$70.00</span>
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
                                    <span class="same sub-amount">$0.00</span>
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
                                <span class="ex" id="total_amount">$70.00</span>
                            </span>
                        </div>
                        <div class="sum-bar"></div>
                        <div id="payment_method_input">
                            <div class="payment-gateway-wrapper"><input type="hidden" name="selected_payment_gateway"
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
                        <div class="sum-bar"></div>
                        <div class="form-group form-check col-12">
                            <input type="checkbox" class="form-check-input" name="agree" id="Checkhh">
                            <label class="form-check-label" for="Checkhh">
                                I have read and agree to the Website <a class='terms'
                                    href='https://bytesed.com/laravel/zaika/p/terms-and-conditions/1'>terms &
                                    conditions</a>
                            </label>
                        </div>
                        <div class="btn-wrapper btn-top">
                            <button type="submit" class="default-btn">Proceed to checkout</button>
                        </div>
                        <div class="btn-wrapper ">
                            <a href="https://bytesed.com/laravel/zaika/product/cart/all"
                                class="default-btn reverse">Return to
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
                                default_shipping_select = '<div class="cost-name-amount all-shipping-options">\
                                                        <span class="same sub">\
                                                            <input type="radio" checked class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                    data-minimum-amt="' + default_shipping['available_options']
                                    [
                                        'minimum_order_amount'
                                    ] + '" \
                                                                    data-amount="' + default_shipping['available_options'][
                                        'cost'
                                    ] + '" \
                                                                    name="selected_shipping_option" value="' +
                                    default_shipping[
                                        'id'] +
                                    '">' +
                                    default_shipping['name'] + '\
                                                        </span>\
                                                        <span class="same sub-amount">' + site_currency_symbol +
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
                                        let option = '<div class="cost-name-amount all-shipping-options">\
                                                            <span class="same sub">\
                                                                <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                        data-minimum-amt="' + shipping_data[
                                                'available_options'][
                                                'minimum_order_amount'
                                            ] + '" \
                                                                        data-amount="' + shipping_data['available_options'][
                                                'cost'
                                            ] + '" \
                                                                        name="selected_shipping_option" value="' +
                                            shipping_data[
                                                'id'] +
                                            '">' +
                                            shipping_data['name'] + '\
                                                            </span>\
                                                            <span class="same sub-amount">' + site_currency_symbol +
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
                                default_shipping_select = '<div class="cost-name-amount all-shipping-options">\
                                                        <span class="same sub">\
                                                            <input type="radio" checked class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                    data-minimum-amt="' + default_shipping['available_options']
                                    [
                                        'minimum_order_amount'
                                    ] + '" \
                                                                    data-amount="' + default_shipping['available_options'][
                                        'cost'
                                    ] + '" \
                                                                    name="selected_shipping_option" value="' +
                                    default_shipping[
                                        'id'] +
                                    '">' +
                                    default_shipping['name'] + '\
                                                        </span>\
                                                        <span class="same sub-amount">' + site_currency_symbol +
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
                                        let option = '<div class="cost-name-amount all-shipping-options">\
                                                            <span class="same sub">\
                                                                <input type="radio" class="mr-2 mt-1 d-inline-block shipping-option" \
                                                                        data-minimum-amt="' + shipping_data[
                                                'available_options'][
                                                'minimum_order_amount'
                                            ] + '" \
                                                                        data-amount="' + shipping_data['available_options'][
                                                'cost'
                                            ] + '" \
                                                                        name="selected_shipping_option" value="' +
                                            shipping_data[
                                                'id'] +
                                            '">' +
                                            shipping_data['name'] + '\
                                                            </span>\
                                                            <span class="same sub-amount">' + site_currency_symbol +
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

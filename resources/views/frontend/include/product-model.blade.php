<!-- modal area start -->
<div class="product-modal-wrap" id="productview">
    <div class="product-modal">
        <div class="product-img">
            <img src="{{ asset('frontend/assets/img/flash-sale/Image-1.jpg') }}" alt="image">
        </div>
        <div class="content">
            <h4 class="title">product name</h4>
            <small class="is_available text-secondary"></small>
            <div class="ratings">
                <i class="las la-star icon"></i>
                <i class="las la-star icon"></i>
                <i class="las la-star icon"></i>
                <i class="lar la-star icon"></i>
            </div>
            <div class="pricing">
                <ul class="list">
                    <li class="price">
                        <del class="main_price"></del>
                    </li>
                    <li class="price sale_price"></li>
                </ul>
            </div>
            <p class="info">Product Info</p>
            <div class="cart-option">
                <div class="input-group">
                    <input class="quantity form-control" type="number" min="1" max="10000000" value="1">
                </div>
                <div class="add-cart-btn">
                    <a href="#" class="add-to-cart">add to cart</a>
                </div>
            </div>
            <div class="attribute-options"></div>
            <div class="product_meta">
                <span class="sku_wrapper">SKU: <span class="sku"></span></span>
                <span class="posted_in">Category: <a href="#" class="product_category" rel="tag">|</a></span>
                <span class="posted_in productview_subcategory">Subcategory:
                    <span id="product_subcategory_links"></span>
                </span>
            </div>
        </div>

        <div class="close-btn" id="close">
            <span class="btn-x">×</span>
        </div>
    </div>
</div>
<!-- modal area start -->

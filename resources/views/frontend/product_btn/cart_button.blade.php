<button onclick="addToCart()" style="border: none" type="button">
    <a href="{{ route('add-cart', [$product->id]) }}" class="add-to-cart">Add to Cart
        <i class="las la-shopping-cart icon"></i>
    </a>
</button>

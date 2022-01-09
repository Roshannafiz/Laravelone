<form action="{{ url('/add-to-cart') }}" method="POST">
    @csrf
    <input type="hidden" value="1" min="1" name="quantity">
    <input type="hidden" value="{{ $product->id }}" name="product_id">
    <input type="submit" name="" value="Add To Cart" style="border: none">
    <i class="las la-shopping-cart icon"></i>

</form>

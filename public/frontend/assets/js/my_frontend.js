// For Shopping Cart
$(document).ready(function () {

    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var incre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(incre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }

    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var decre_value = $(this).parents('.quantity').find('.qty-input').val();
        var value = parseInt(decre_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).parents('.quantity').find('.qty-input').val(value);
        }
    });



    $(document).on('click', '.btnItemUpdate', function () {
        if ($(this).hasClass('qtyMinus')) {
            // If quantity button gets clicked by user
            var quantity = $(this).prev().val();
            if (quantity <= 1) {
                alert("Item Quantity Must Be 1 Or Getter");
                return false;
            } else {
                $new_qty = parseInt(quantity) - 1;
            }
            if ($(this).hasClass('qtyPlus')) {
                // If qtuPlus button clicked by User
                var quantity = $(this).prev().val();
                $new_qty = parseInt(quantity) + 1;
            }
            alert($new_qty);
            var cartid = $(this).data('cartid');
            alert(cartid);
        }
    });

});

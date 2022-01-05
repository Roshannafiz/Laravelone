(function ($) {


    /*======== 11. START CHANGE CATEGORY STATUS ========*/
    /*
    $(document).ready(function () {
        $("#category_table").DataTable()
    });
    */
    $(function () {
        $('.toggle-class-category').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var category_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/cat-status',
                data: {
                    'status': status,
                    'category_id': category_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 11. END CHANGE CATEGORY STATUS ========*/

    /*======== 12. START CHANGE SUB CATEGORY STATUS ========*/
    $(function () {
        $('.toggle-class-subcategory').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var subcategory_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/sub-cat-status',
                data: {
                    'status': status,
                    'subcategory_id': subcategory_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 12. END SUB CHANGE CATEGORY STATUS ========*/

    /*======== 13. START CHANGE BRAND STATUS ========*/
    $(function () {
        $('.toggle-class-brand').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var brand_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/brands-status',
                data: {
                    'status': status,
                    'brand_id': brand_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 13. END BRAND STATUS ========*/

    /*======== 14. START CHANGE UNIT STATUS ========*/
    $(function () {
        $('.toggle-class-unit').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var unit_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/units-status',
                data: {
                    'status': status,
                    'unit_id': unit_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 14. END UNIT STATUS ========*/

    /*======== 15. START CHANGE SIZE STATUS ========*/
    $(function () {
        $('.toggle-class-size').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var size_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/sizes-status',
                data: {
                    'status': status,
                    'size_id': size_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 15. END SIZE STATUS ========*/


    /*======== 16. START CHANGE COLOR STATUS ========*/
    $(function () {
        $('.toggle-class-color').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var color_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/colors-status',
                data: {
                    'status': status,
                    'color_id': color_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 16. END COLOR STATUS ========*/


    /*======== 17. START CHANGE PRODUCT STATUS ========*/
    $(function () {
        $('.toggle-class-product').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var product_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/product-status',
                data: {
                    'status': status,
                    'product_id': product_id
                },
                success: function (data) {
                    console.log('Success')
                }
            });
        });
    });
    /*======== 17. END PRODUCT STATUS ========*/

    // Dropify Image
    $(document).ready(function () {
        $('.dropify').dropify();
    });

    // Data Table
    $(document).ready(function () {
        $("#order-listing").dataTable();
    });












})(jQuery);

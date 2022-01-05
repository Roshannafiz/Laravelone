(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        /*
        ----------------------------------------
            SearchBar
        ----------------------------------------
        */

        $(document).ready(function () {
            $('.search-close').on('click', function () {
                $('.search-bar').removeClass('active');
            });
            $('.search-open').on('click', function () {
                $('.search-bar').toggleClass('active');
            });
        });

        /*------------------------------
            Header Slick Slider
        -------------------------------*/
        var rtlValue = $('html').attr('dir') === 'rtl' ? true : false;
        $('.header-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            autoplay: true,
            rtl: rtlValue,
            cssEase: 'linear'
        });

        $('.header-slider-main-index-02').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: true,
            rtl: rtlValue,
            autoplay: true,
            cssEase: 'linear',
            prevArrow: '<div class="prev-arrow"><i class="las la-angle-left"></i></div>',
            nextArrow: '<div class="next-arrow"> <i class="las la-angle-right"></i></div>',
        });

        /*------------------------------
            New Collection Slick Slider
        -------------------------------*/
        $('.new-collection-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            rtl: rtlValue,
            cssEase: 'linear',
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="prev-arrow"><i class="las la-long-arrow-alt-left"></i> prev</div>',
            nextArrow: '<div class="next-arrow">next <i class="las la-long-arrow-alt-right"></i></div>',

            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                }
            },
            {
                breakpoint: 451,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }

            ]
        });
        /*------------------------------
            New Design Slick Slider
        -------------------------------*/
        $('.new-design-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 500,
            arrows: false,
            autoplay: true,
            cssEase: 'linear',
            centerMode: true,
            slidesToShow: 4,
            rtl: rtlValue,
            slidesToScroll: 1,
            centerPadding: '140px',

            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0px',
                }
            }
            ]
        });
        /*------------------------------------
            Quick view popup
        -----------------------------------*/
        $(document).on('click', '#productview #close', function (e) {
            e.preventDefault();
            $('#productview').removeClass('show');
        });
        $(document).on('click', function (e) {
            if ($(e.target).is('.product-modal-wrap.show')) {
                $('#productview').removeClass('show');
            }
        });
        /*------------------------------
            Countdown
        -------------------------------*/
        loopcounter('flash-countdown-1');
        loopcounter('flash-countdown-2');
        loopcounter('flash-countdown-3');
        /*------------------------------
           Call to action Countdown
        -------------------------------*/
        loopcounter('flash-countdown-ad');
        /*------------------------------
            Store area isotope jQuery
        -------------------------------*/
        $(".our-stor-btn-list li").on('click', function () {
            $(".our-stor-btn-list li").removeClass("active");
            $(this).addClass("active");
        });
        /*------------------------------
            Fashion Blog Slick Slider
        -------------------------------*/
        $('.fashion-blog-slider-main').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: false,
            autoplay: true,
            cssEase: 'linear',
            slidesToShow: 2,
            slidesToScroll: 1,
            rtl: rtlValue,

            responsive: [

                {
                    breakpoint: 1367,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },


            ]
        });
        /*------------------------------
            feedback Slick Slider
        -------------------------------*/
        $('.feedback-slider-main').slick({
            dots: false,
            infinite: true,
            speed: 1000,
            arrows: true,
            rtl: rtlValue,
            autoplay: true,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="prev-arrow"><i class="las la-angle-left"></i></div>',
            nextArrow: '<div class="next-arrow"><i class="las la-angle-right"></i></div>',
        });
        /*------------------------------
            Shop Details Slick Slider
        -------------------------------*/
        $('.shop-details-gallery-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            rtl: rtlValue,
            fade: true,
            asNavFor: '.shop-details-gallery-nav'
        });
        $('.shop-details-gallery-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.shop-details-gallery-slider',
            dots: false,
            rtl: rtlValue,
            arrows: false,
            focusOnSelect: true
        });
        /*------------------------------
            New Collection Slick Slider
        -------------------------------*/
        $('.related-item-slider-main-full').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            autoplay: true,
            cssEase: 'linear',
            rtl: rtlValue,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: '<div class="prev-arrow"><i class="las la-long-arrow-alt-left"></i> prev</div>',
            nextArrow: '<div class="next-arrow">next <i class="las la-long-arrow-alt-right"></i></div>',

            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 451,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            ]
        });
        /*------------------------------
            wow js init
        -------------------------------*/
        new WOW().init();
    });
    /*------------------------------
           Scroll to top
    -------------------------------*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }
    })

    $(".scroll-to-top").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 2000);
    })

    $(window).on('load', function () {
        /*------------------------------
           Preloader
        -------------------------------*/
        $('.preloader-inner').fadeOut(1000);
    });



    /*--------------------- My Home Page Script -------------------*/
    (function ($) {
        'use strict'

        let site_currency_symbol = '$';

        $(document).ready(function () {
            refreshShippingDropdown();
            refreshWishlistDropdown();

            $('body').on('click', '.quick-view', function (e) {
                e.preventDefault();
                let data = $(this).data();
                let rating = $(this).data('rating');
                let stock_msg = "Item is not available in stock";
                let stock_class = 'text-danger';

                $('#productview .title').text(data['title']);
                $('#productview .info').text(data['summary']);
                $('#productview .main_price').text(data['price']);
                $('#productview .sale_price').text(data['salePrice']);
                $('#productview .product_category').text(data['category']);
                $('#productview .product_category').attr('href', data['categoryUrl']);
                $('#productview .product-img img').attr('src', data['image']);
                $('#productview .sku_wrapper .sku').text(data['inventory']);

                if (data['inStock']) {
                    stock_msg = "Item is available in stock";
                    stock_class = 'text-success';
                }

                $('#productview .is_available').removeClass('text-success');
                $('#productview .is_available').removeClass('text-danger');

                $('#productview .is_available').text(stock_msg);
                $('#productview .is_available').addClass(stock_class);

                if (data['inventory'] && data['inventory'].length) {
                    $('#productview .sku_wrapper').show();
                }

                let subcategory_html = '';
                let subcategory = data['subcategory'];

                for (let i = 0; i < subcategory.length; i++) {
                    let comma = '';

                    if (i < subcategory.length - 1) {
                        comma += ', ';
                    }

                    subcategory_html += '<a href="' + subcategory[i]['url'] +
                        '" class="product_subcategory" rel="tag">' + subcategory[i]['name'] +
                        '</a>' + comma;
                }

                $('#product_subcategory_links').html(subcategory_html);

                if (!subcategory_html.length) {
                    $('.productview_subcategory').hide();
                } else {
                    $('.productview_subcategory').show()
                }

                let rating_html = '';

                for (let i = 0; i < Number(rating); i++) {
                    rating_html += '<i class="las la-star icon"></i>';
                }

                for (let i = Math.ceil(Number(rating)); i < 5; i++) {
                    rating_html += '<i class="lar la-star icon"></i>';
                }

                $('#productview .ratings').html(rating_html);

                if (Number(rating)) {
                    $('#productview .ratings').show()
                } else {
                    $('#productview .ratings').hide()
                }

                $('#productview').addClass('show');
            });

            $(document).on('click', '#quickview', function (e) {
                e.preventDefault();
                loadProductAttributeHtml($(this).data('slug'));
            });

        });

        function refreshShippingDropdown() {
            $.ajax({
                url: 'product/cart/summary-info',
                type: 'GET',
                success: function (data) {
                    $('#cart_badge').text(data.item_total);
                    $('#top_minicart_container').html(data.cart);
                },
                erorr: function (err) {
                    toastr.error('An error occurred');
                }
            });
        }

        function refreshWishlistDropdown() {
            // sync changes in details page
            $.ajax({
                url: 'product/wishlist/total',
                type: 'GET',
                success: function (data) {
                    $('#wishlist_badge').text(data.total);
                },
                erorr: function (err) {
                    toastr.error('An error occurred');
                }
            });
        }
    })(jQuery);

    /*--------------------- My Home Page Script 1-------------------*/
    function addslashes(str) {
        return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
    }

    adroll_adv_id = "GXM5SRU2XZE7JOKGHSZPSZ";
    adroll_pix_id = "WP43YTLBS5BQXDP6XUEIC7";
    adroll_version = "2.0";
    (function (w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll = w.adroll || [];
        w.adroll.f = ['setProperties', 'identify', 'track'];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
                return function () {
                    w.adroll.push([n, arguments])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async = 1;
        e.src = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");

    (function ($) {
        $(document).ready(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: "42",
                values: ["12", "42"],
                slide: function (event, ui) {
                    var min_price = ui.values[0];
                    var max_price = ui.values[1];
                    var siteGlobalCurrency = "$";
                    $('.min_filter_price').text(siteGlobalCurrency + min_price);
                    $('.max_filter_price').text(siteGlobalCurrency + max_price);
                    $('#pr_min').val(min_price);
                    $('#pr_max').val(max_price);
                },
            });
        });
    })(jQuery);
    /*--------------------- My Home Page Script -------------------*/
}(jQuery));

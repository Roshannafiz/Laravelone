    <!-- jquery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery migrate -->
    <script src="{{ asset('frontend/assets/js/jquery-migrate-3.3.2.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min-v4.6.0.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min-v3.0.6.js') }}"></script>
    <!-- countdown js -->
    <script src="{{ asset('frontend/assets/js/loopcounter.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <!-------- Toastr Message---------->
    <script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>
    <!--- bootstrap-4 Rating Js --->
    <script src="https://bytesed.com/laravel/zaika/assets/frontend/js/bootstrap4-rating-input.js"></script>
    <!--- Ui js ---->
    <script src="https://bytesed.com/laravel/zaika/assets/common/js/jquery-ui.min.js"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/assets/js/my_frontend.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/dynamic-script.js') }}"></script>

    @if (session('message')) {
        <script>
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["success"]("{{ session('message') }}")
        </script>
        }

    @endif

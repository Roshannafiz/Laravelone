<!-- plugins:js -->
<script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->

<style>
    .label-info {
        background-color: #B37BFF;
        padding: 10px;
        font-family: 'Ubuntu', sans-serif;
    }

</style>


<!-- Plugin js for this page -->
<script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/js/jquery.dataTables.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<!-- End plugin js for this page -->

<!-------- Toastr Message---------->
<script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>


<!------ Swiit Alert------>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




<!--- Image Upload -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
<!--- Image Upload -->




<!-- inject:js -->
<script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>


<!------ Collps ------->
<script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin/assets/js/misc.js') }}"></script>
<!------ Collps ------->



<script src="{{ asset('admin/assets/js/settings.js') }}"></script>
<script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
<script src="{{ asset('admin/assets/js/jquery.cookie.js') }}"></script>
<!-- endinject -->


<!-- Custom  My Add-->
<script src="{{ asset('admin/assets/js/my.js') }}"></script>
<!-- Custom My Add -->



<!-- Custom js for this page -->
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->


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
            "timeOut": "5000",
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


</body>

</html>

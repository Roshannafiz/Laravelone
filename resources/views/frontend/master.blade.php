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


    <!------- Include home slider file -------->
    @include('frontend.include.home-slider')
    <!------- Include home slider file -------->


    <!------- Include home featured file -------->
    @include('frontend.include.home-featured')
    <!------- Include home featured file -------->


    <!------- Include new collection file -------->
    @include('frontend.include.new-collection')
    <!------- Include new collection file -------->


    <!------- Include trendy item file -------->
    @include('frontend.include.trendy-item')
    <!------- Include trendy item file -------->


    <!------- Include call to action file -------->
    @include('frontend.include.call-to-action')
    <!------- Include call to action file -------->


    <!------- Include flash sale file -------->
    @include('frontend.include.flash-sale')
    <!------- Include flash sale file -------->


    <!------- Include top best off product file -------->
    {{-- @include('frontend.include.top-best-off') --}}
    <!------- Include top best off product file -------->


    <!------- Include home brand file -------->
    @include('frontend.include.home-brand')
    <!------- Include home brand file -------->

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

</body>

</html>

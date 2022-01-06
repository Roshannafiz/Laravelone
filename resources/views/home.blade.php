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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h1 style="text-align: center" class="py-5">User Dashboard</h1>








    <!------- Include footer file -------->
    @include('frontend.include.footer')
    <!------- Include footer file -------->



    <!------- Include Script file -------->
    @include('frontend.script')
    <!------- Include Script file -------->



</body>

</html>

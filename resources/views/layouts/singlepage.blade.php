<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{$setdata->site_name}}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="app/css/rtl.css">-->

    <!--External fonts-->

     <!--ADDED CSS BY SONDIP FOR POPUP NOTIFICATION-->
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <style>
        .padded-50{
            padding: 40px;
        }
        .text-center{
            text-align: center;
        }
    </style>

</head>


<body class=" ">
    <div class="content-wrapper">
    @include('auth.admin.includes.header')

    @yield('content')
    

    

    

    

<!-- Subscribe Form -->

<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="subscribe scrollme">
                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Email Newsletters!</h4>
                        <form class="subscribe-form" method="post" action="/subscribe">
                            {{csrf_field()}}
                            <input class="email input-standard-grey input-white" name="mail" required="required" placeholder="Your Email Address" type="email">
                            <button class="subscr-btn" type="submit">subscribe
                                <span class="semicircle--right"></span>
                            </button>
                        </form>
                        <div class="sub-title">Sign up for my new blog content, updates, surveys & offers.</div>

                    </div>

                    <div class="images-block">
                        <img src="/app/img/subscr-gear.png" alt="gear" class="gear">
                        <!-- aikhane akta forward slash lagaisi /app a-->
                        <img src="/app/img/subscr1.png" alt="mail" class="mail">
                        <img src="/app/img/subscr-mailopen.png" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Subscribe Form -->
</div>



<!-- Footer -->

@include('auth.admin.includes.footer')

<!-- Overlay Search -->
@include('auth.admin.includes.search')

<!-- End Overlay Search -->



<!-- JS Script -->

<script src="{{ asset('app/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js')}}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js')}}"></script>
<script src="{{ asset('app/js/theme-plugins.js')}}"></script>
<script src="{{ asset('app/js/main.js')}}"></script>
<!--script src="{{ asset('app/js/form-actions.js')}}"></script-->

<script src="{{ asset('app/js/velocity.min.js')}}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js')}}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js')}}"></script>


<!-- ...end JS Script -->

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6d805b6652f551"></script>

<!--added for pop up notification by sondip-->
    <script src="{{ asset('js/toastr.min.js') }}"></script>


<script>
        @if(Session::has('subscribed'))
           toastr.success("{{Session::get('subscribed')}}");
        @endif
</script>

</body>
</html>

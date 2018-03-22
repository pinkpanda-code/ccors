<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon-16x16.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome\css\font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slider.css') }}">


    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body class="page1">

<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="{{ url('home') }}"><img src="{{ URL::asset('images/logo1.png') }}" alt=""></a> </h1>

            <div class="clear"></div>
        </div>
        <div class="menu_block">
            <nav class="" >
                <ul class="sf-menu">
                    <li class="current"><a href="{{ url('home') }}">Home</a></li>
                    <li class="with_ul"><a href="{{ url('about') }}">About</a>
                        <ul>
                            <li><a href="{{ url('about') }}" style="text-decoration: none;">Onboard Activities</a></li>
                            <li><a href="{{ url('about') }}" style="text-decoration: none;">Food & Dining</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('book_now') }}">Book Now</a></li>
                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                    <li><a href="{{ url('cruises') }}">Cruises</a>
                        <ul>
                            <li><a href="{{ url('cruises') }}" style="text-decoration: none;">Princess</a></li>
                            <li><a href="{{ url('cruises') }}" style="text-decoration: none;">Cunard</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</header>

<div class="main">

    @yield('content')

    <div class="bottom_block">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding-top: 30px">
                    <div class="row">
                        <h7>"It's Always Ourselves We Find In The Sea"</h7>
                    </div>
                    <div class="row">
                        <span style="font-size: 15px; font-family: 'Pathway Gothic One', sans-serif;">--e.e. Cummings, poet</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <h4>Contact Us:</h4>
                    TEL: 1-800-234-5678
                    <br>
                    Support@carnival-sg.com
                </div>
            </div>

            <div class="clear"></div>
        </div>
    </div>

</div>



<footer>
    <div class="container_12">
        <div class="grid_12">
            <div class="socials">
                <a href="https://twitter.com/carnivalcruise" target="_blank"></a>
                <a href="https://www.facebook.com/Carnival" target="_blank"></a>
                <a href="https://plus.google.com/explore/CarnivalCruise" target="_blank"></a>
                <a href="https://www.linkedin.com/company/carnival-corporation" target="_blank"></a>
            </div>
            <div class="copy">
                Carnival Corporation &copy; 2015 | <a href="" style="text-decoration: none">Privacy Policy</a> | <a href="" style="text-decoration: none">Website designed by Dai5y_J</a>
                <br>
             </div></div>
        <div class="clear"></div>
    </div>

</footer>

<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/jquery-migrate-1.1.1.js') }}"></script>
<script src="{{ URL::asset('js/superfish.js') }}"></script>
<script src="{{ URL::asset('js/sForm.js') }}"></script>
<script src="{{ URL::asset('js/jquery.jqtransform.js') }}"></script>
<script src="{{ URL::asset('js/jquery.equalheights.js') }}"></script>
<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ URL::asset('js/tms-0.4.1.js') }}"></script>
<script src="{{ URL::asset('js/jquery-ui-1.10.3.custom.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.ui.totop.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


<!--Ajax Setup-->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('script')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>

    <!-- core CSS -->
    <link href="{{ asset('assets/site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/main.css') }}" rel="stylesheet">
    @if($_SERVER['REQUEST_URI'] == "/Mu_mega/airPlane/enventory")
        <link href="{{ asset('assets/site/css/enventory.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('assets/site/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ 'assets/site/images/ico/apple-touch-icon-144-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ 'assets/site/images/ico/apple-touch-icon-114-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ asset('assets/site/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
          href="{{ asset('assets/site/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body class="homepage">
<script>
</script>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> +011122222222</p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/site/images/logo.png') }}"
                                                               alt="logo"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav top-menu">
                    <li class="first"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('/org') }}">organization</a></li>
                    <li><a href="{{ url('/activities') }}">Activities</a></li>
                    <li><a href="{{ url('/enventory') }}">Enventory</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->

@yield('content')

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                AiroParts &copy; 2016 <a target="_blank" href="http://mm4web.net/">Multi Mega</a>.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
<script src="{{ asset('assets/site/js/jquery.js') }}"></script>
<script src="{{ asset('assets/site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/site/js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('assets/site/js/main.js') }}"></script>
<script src="{{ asset('assets/site/js/wow.min.js') }}"></script>
<script type="text/javascript">
        $('.carousel').carousel()
</script>
@if($_SERVER['REQUEST_URI'] == "/Mu_mega/airPlane/enventory")
    <script src="{{ asset('assets/site/js/enventory.js') }}"></script>
@endif
@yield('scripts')
</body>
</html>
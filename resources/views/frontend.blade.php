<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$site_options['site_name']}}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}"/>
    <!-- Material Design Icons -->
    <link rel="stylesheet"
          href="{{URL::asset('v2/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}"/>
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{URL::asset('v2/fonts/ionicons/css/ionicons.min.css')}}"/>
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{URL::asset('v2/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{URL::asset('v2/css/owl.theme.default.css')}}"/>
    <!-- Style.css -->
    <link rel="stylesheet" href="{{URL::asset('v2/css/style.css')}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @media only screen and (max-width: 720px) {
        .responsive-nav{
            margin-top: 20%;
        }}
    </style>

</head>
<body>

<!-- Search -->
<div class="search-overlay"></div>
<div class="search">
    <a href="#" class="search-close"><i class="md md-close"></i></a>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h4>Just Start Typing Text and Press Enter</h4>

            <form class="search-form">
                <input type="text" id="search" name="search" class="text-center"/>
            </form>
            <!-- end .search-form -->
        </div>
        <!-- end .col-sm-6 -->
    </div>
    <!-- end .row -->
</div>
<!-- end .row -->
<!-- Slide Out -->
<div class="slide-out-overlay"></div>
<div class="slide-out">
    <header class="slide-out-header clearfix">
        <div class="clearfix">
            <a href="#" class="slide-out-close pull-left"><i class="md md-close"></i></a>
            <a href="#" class="open-search pull-right"><i class="md md-search"></i></a>
            <a href="#" class="slide-out-share pull-right"><i class="md md-more-vert"></i></a>
        </div>
        <!-- end .clearfix -->
        <!-- Popup -->
        <div class="slide-out-popup">
            <nav class="social-nav">
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Behance</a></li>
                </ul>
                <!-- end .list-unstyled -->
            </nav>
            <!-- end .social-nav -->
        </div>
        <!-- end .slide-out-popup -->
        <div class="image"><img src="/v2/images/head01.png" alt="alt text" class="img-responsive"></div>
        <div class="content">
            <h5>Benjamin Thomson</h5>
            <span>Web & UX Designer</span>
        </div>
        <!-- end .content -->
        <div class="text-right">
            <a href="#" class="button link-button white icon-left"><i class="md md-file-download"></i>Download
                Resume</a>
        </div>
        <!-- end .text-right -->
    </header>
    <!-- end .slide-out-header -->
    <div class="slide-out-widgets">
        <div class="slide-out-widget">
            <h4>Drink A Coffee With Me Today</h4>

            <form action="http://wpmines.com/demos/sility/scripts/contact.php" method="post"
                  class="form-horizontal contact-form">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                        <input type="text" class="contact-name" name="contact-name"/>
                    </div>
                    <!-- end .col-sm-9 -->
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                        <input type="email" class="contact-email" name="email"/>
                    </div>
                    <!-- end .col-sm-9 -->
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Quote</label>

                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="quote" min="0" step="50" max="50000" id="quote"
                               placeholder="estimated cost of project">
                    </div>
                    <!-- end .col-sm-9 -->
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <label class="col-sm-3 control-label">Message</label>

                    <div class="col-sm-9">
                        <textarea name="message" class="contact-message" rows="3"></textarea>
                    </div>
                    <!-- end .col-sm-9 -->
                </div>
                <!-- end .form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="button solid-button purple">Send Message</button>
                    </div>
                    <!-- end .col-sm-9 -->
                </div>
                <!-- end .form-group -->
                <div class="contact-loading alert alert-info form-alert">
                    <span class="message">Loading...</span>
                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="contact-success alert alert-success form-alert">
                    <span class="message">Success!</span>
                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i>
                    </button>
                </div>
                <div class="contact-error alert alert-danger form-alert">
                    <span class="message">Error!</span>
                    <button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i>
                    </button>
                </div>
            </form>
            <!-- end contact-form -->
        </div>
        <!-- end .slide-out-widget -->
        <div class="slide-out-widget">
            <h4>Follow On Instagram</h4>

            <div class="instagram">
                <a href="#"><img src="/v2/images/instagram01.jpg" alt="alt text" class="img-responsive"></a>
                <a href="#"><img src="/v2/images/instagram02.jpg" alt="alt text" class="img-responsive"></a>
                <a href="#"><img src="/v2/images/instagram03.jpg" alt="alt text" class="img-responsive"></a>
                <a href="#"><img src="/v2/images/instagram04.jpg" alt="alt text" class="img-responsive"></a>
                <a href="#"><img src="/v2/images/instagram05.jpg" alt="alt text" class="img-responsive"></a>
                <a href="#"><img src="/v2/images/instagram06.jpg" alt="alt text" class="img-responsive"></a>
            </div>
            <!-- end .instagram -->
        </div>
        <!-- end .slide-out-widget -->
    </div>
    <!-- end .slide-out-widgets -->
</div>
<!-- end .slide-out -->

<!-- Header -->
<header class="header navbar-fixed-top">
    <div class="top clearfix" style="display: none">
        <a href="#section8" class="available"><i class="ion-ios-email-outline"></i><span>Available For Freelance</span></a>

        <div class="right-icons">
            <a href="#" class="open-search header-open-search"><i class="md md-search"></i></a>
            <a href="#" class="download"><i class="md md-file-download"></i></a>
            <a href="#" class="share"><i class="md md-more-vert"></i></a>
        </div>
        <!-- end .right-icons -->
        <!-- Popup -->
        <div class="popup">
            <nav class="social-nav">
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Linkedin</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">Behance</a></li>
                </ul>
                <!-- end .list-unstyled -->
            </nav>
            <!-- end .social-nav -->
        </div>
        <!-- end .popup -->
    </div>
    <!-- end .top -->
    <div class="bottom clearfix">
        <div class="title"><a href="/">{{$site_options['site_name']}}</a></div>
        {{--<div class="header-action-button-wrapper">--}}
            {{--<a href="#" class="header-action-button action-button"><i class="md md-add"></i></a>--}}
        {{--</div>--}}
        <!-- end .header-action-button-wrapper -->
        <a href="#" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
        <nav class="main-nav">
            <ul class="list-unstyled">
                <li class="active"><a href="#section1">Home</a></li>
                <li><a href="/#section2">About</a></li>
                <li><a href="#section3">Skill</a></li>
         {{--        <li><a href="#section4">Experience</a></li>
                <li><a href="#section5">Education</a></li> --}}
                <li><a href="#section6">Work</a></li>
                {{--<li><a href="#section7">Blog</a></li>--}}
                <li><a href="#section8">Contact</a></li>
            </ul>
        </nav>
        <!-- end .main-nav -->
    </div>
    <!-- end .bottom -->
</header>
<!-- end .header -->
<div class="responsive-menu">
    <a href="#" class="responsive-menu-close">Close <i class="ion-android-close"></i></a>
    <nav class="responsive-nav"></nav>
    <!-- end .responsive-nav -->
</div>
<!-- end .responsive-menu -->

<!-- Section Navigation -->
{{--<div class="section-nav">--}}
    {{--<nav class="section1">--}}
        {{--<a href="#section2" class="forward"><i class="md md-chevron-right"></i></a>--}}
        {{--<a href="#section1" class="backward"><i class="md md-chevron-left"></i></a>--}}
    {{--</nav>--}}
{{--</div>--}}
<!-- end .section-nav -->

<!-- Sections -->
@yield('content')
<!-- end .sections -->

<!-- Footer -->
<footer class="footer">
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4>Address</h4>

                    <p>{{ $site_options['user_address'] or '124 Nairobi' }}<br/>{{ $site_options['address_city_country'] or 'Nairobi, Kenya' }}</p>
                </div>
                <!-- end .col-sm-4 -->
                <div class="col-sm-4">
                    <h4>Connect</h4>

                    <div class="social-icons">
                        <a href="{{$site_options['facebook_link']}}" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="{{$site_options['twitter_handle']}}" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="{{$site_options['google_plus_page']}}" target="_blank" class="social-icon"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <!-- end .social-icons -->
                </div>
                <!-- end .col-sm-4 -->
                <div class="col-sm-4">
                    <h4>Contact</h4>

                    <p>Tel: {{$site_options['mobile_number']}}<br/>Mail: <a href="mailto:{{$site_options['admin_email']}}" target="_top">{{$site_options['admin_email']}}</a></p>
                </div>
                <!-- end .col-sm-4 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </div>
    <!-- end .footer -->
    <div class="bottom">Copyright &copy; Timothy.co.ke All Rights Reserved.</div>
    <!-- end .bottom -->
</footer>
<!-- end .footer -->

<!-- jQuery -->
<script src="{{URL::asset('v2/js/jquery-1.11.2.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('v2/js/bootstrap.min.js')}}"></script>
<!-- Inview -->
<script src="{{URL::asset('v2/js/jquery.inview.min.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{URL::asset('v2/js/smoothscroll.js')}}"></script>
<!-- jQuery Knob -->
<script src="{{URL::asset('v2/js/jquery.knob.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{URL::asset('v2/js/owl.carousel.min.js')}}"></script>
<!-- Isotope -->
<script src="{{URL::asset('v2/js/isotope.pkgd.min.js')}}"></script>
<!-- Images Loaded -->
<script src="{{URL::asset('v2/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- google maps -->
<script src="{{URL::asset('https://maps.googleapis.com/maps/api/js?v=3.exp')}}"></script>
<!-- Scripts.js -->
<script src="{{URL::asset('v2/js/scripts.js')}}"></script>
{{--<script src="{{URL::asset('assets/js/custom.js')}}"></script>--}}
<script src="{{URL::asset('assets/js/contact.js')}}"></script>

</body>
</html>
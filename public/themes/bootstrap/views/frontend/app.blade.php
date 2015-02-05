<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>{{$title}}</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Neveshtar description" name="description">
  <meta content="Neveshtar keywords" name="keywords">
  <meta content="Hossein Jabbari" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->
  <link href="/themes/bootstrap/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/themes/bootstrap/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href="/themes/bootstrap/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/themes/bootstrap/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="/themes/bootstrap/assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/themes/bootstrap/assets/global/css/components.css" rel="stylesheet">
  <link href="/themes/bootstrap/assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="/themes/bootstrap/assets/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- revo slider styles -->
  <link href="/themes/bootstrap/assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="/themes/bootstrap/assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/themes/bootstrap/assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@neveshtar.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
						@if (Auth::guest())
							<li><a href="/auth/login">Login</a>
							<li><a href="/auth/register">Register</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="/auth/logout">Logout</a></li>
								</ul>
							</li>
						@endif
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="/">Neveshtar.com</a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="active">
              <a data-target="/" href="/">
                Home
              </a>
            </li>
            <li><a href="shop-index.html" target="_blank">E-Commerce</a></li>
            <li><a href="onepage-index.html" target="_blank">One Page</a></li>
            <li><a href="/admin" target="_blank">Admin theme</a></li>

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div>
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

	@yield('content')

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img2.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img5.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="/themes/bootstrap/assets/frontend/pages/img/works/img2.jpg"></a></li>
              </ul>
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@neveshtar.com">info@neveshtar.com</a><br>
              Skype: <a href="skype:neveshtar">neveshtar</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="widget-id" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading Tweets</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Neveshtar.com | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/themes/bootstrap/assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="/themes/bootstrap/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/themes/bootstrap/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/themes/bootstrap/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/themes/bootstrap/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/themes/bootstrap/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/themes/bootstrap/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
    </script>
    <!-- BEGIN RevolutionSlider -->

    <script src="/themes/bootstrap/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="/themes/bootstrap/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="/themes/bootstrap/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="/themes/bootstrap/assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src="/themes/bootstrap/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
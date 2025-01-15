<!DOCTYPE html>
    <!--
    Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
    Version: 1.0.0
    Author: KeenThemes
    Website: http://www.keenthemes.com/
    Contact: support@keenthemes.com
    Follow: www.twitter.com/keenthemes
    Like: www.facebook.com/keenthemes
    Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
    -->
    <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('home')}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('home')}}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('home')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <link href="{{asset('home')}}/assets/pages/css/animate.css" rel="stylesheet">
    <link href="{{asset('home')}}/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('home')}}/assets/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{asset('home')}}/assets/onepage2/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('home')}}/assets/onepage2/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-header-fixed">
    
    @yield('content')

    <script>
        var base_url = "{{ url('/') }}";
    </script>
    
    <script src="{{asset('home')}}/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{asset('home')}}/assets/plugins/jquery.easing.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/plugins/jquery.parallax.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/plugins/smooth-scroll/smooth-scroll.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- BEGIN CUBEPORTFOLIO -->
    <script src="{{asset('home')}}/assets/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/onepage2/scripts/portfolio.js" type="text/javascript"></script>
    <!-- END CUBEPORTFOLIO -->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('home')}}/assets/onepage2/scripts/layout.js" type="text/javascript"></script>
    <script src="{{asset('home')}}/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            Layout.init();
        });
    </script>
    @stack('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="en" ng-app="bazPortfolio">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Lorie - Ju C. Basilio">
    <meta name="robots" content="portfolio"/>
    <meta class="local" name="keywords" content="Laravel Developer, PHP, HTML, CSS, Jquery, AJAX, Programmer, Backend Developer, Front-end Developer,Job seeker"/>

    <meta class="local" name="description" content="I'm Lorie - Ju Basilio finding job as a web developer specialize in Laravel Framework, PHP, HTML, CSS, Jquery, AJAX. See my page blorieju.github.io/porfotio"/>
    <link rel="shortcut icon" href="/img/titleIcon.png" type="image/png">
    <title>Lorie - Ju C. Basilio - Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/jquery.webui-popover.min.css" rel="stylesheet">
    <link href="/css/grayscale.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/morph/animate.css" rel="stylesheet">
    <link href="/css/morphist.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    {{--<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>--}}
    {{--<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">--}}
    {{--<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <script src="/js/jquery.js"></script>
</head>

<body ng-controller="mainController">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll logo" href="/#/">
                    <img src="/img/logo.png" class="img-responsive" alt="Lorie - Ju's logo"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav navTab">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#/projects">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#/skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="headerTop"></div>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="page @{{ pageClass }}" ng-view></div>
                {{--<div ng-view></div>--}}
            </div>
        </div>
    </header>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Lorie - Ju C. Basilio <span id="year"></span></p>
        </div>
    </footer>

    <script>
    $(document).ready(function() {
      var currentYear = (new Date).getFullYear();
      $('#year').html(currentYear);
    });
    </script>

    <script src="/js/jquery.webui-popover.min.js"></script>
    <script src="/js/angular.min.js"></script>
    <script src="/js/angular-animate.min.js"></script>
    <script src="/js/angular-route.js"></script>
    <script src="/js/morphist.min.js"></script>
    <script src="/js/scripts.js"></script>

    <!-- Plugin JavaScript -->
    {{--<script src="/js/jquery.easing.min.js"></script>--}}

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    {{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>--}}

    <!-- Custom Theme JavaScript -->
    {{--<script src="/js/grayscale.js"></script>--}}

</body>

</html>
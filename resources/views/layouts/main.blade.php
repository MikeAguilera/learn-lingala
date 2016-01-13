<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<!--From Lingala App Begin-->
    <title><?php echo $pageTitle; ?></title>

        <!--<link href="css/reset.css" media="screen" rel="stylesheet" type="text/css">-->
        <link rel="stylesheet" href="{{ URL::asset('/css/slickQuiz.css') }}">
        <!--<link href="css/master.css" media="screen" rel="stylesheet" type="text/css">-->
<!--From Lingala App End-->

    <!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">
    <!-- Custom CSS -->
<link rel="stylesheet" href="{{ URL::asset('/css/sb-admin.css') }}">
    <!-- Morris Charts CSS -->
<link rel="stylesheet" href="{{ URL::asset('/css/plugins/morris.css') }}">
    <!-- Custom Fonts -->
<link rel="stylesheet" href="{{ URL::asset('/font-awesome/css/font-awesome.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

   <body id="slickQuiz">
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{URL::to('/')}}">Learn Lingala</a>
            </div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{URL::to('dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   <li>
                        <a href="{{URL::to('basics')}}"><i class="fa fa-fw fa-book"></i> Basics</a>
                    </li>
                    <li>
                        <a href="{{URL::to('verbsHome')}}"><i class="fa fa-fw fa-comment"></i> Verbs</a>
                    </li>
                    <li>
                        <a href="{{URL::to('phraseHome')}}"><i class="fa fa-fw fa-comments"></i> Phrases</a>
                    </li>
                    <li>
                        <a href="{{URL::to('intermediateHome')}}"><i class="fa fa-fw fa-comment-o"></i> Intermediate</a>
                    </li>
                    <li>
                        <a href="{{URL::to('FamilyHome')}}"><i class="fa fa-fw fa-users"></i> Family</a>
                    </li>
                    <li>
                        <a href="{{URL::to('inthehouseHome')}}"><i class="fa fa-fw fa-home"></i> In The Home</a>
                    </li>
                    <li>
                        <a href="{{URL::to('advancedHome')}}"><i class="fa fa-fw fa-star-o"></i> Advanced</a>
                    </li>
                    <li>
                        <a href="{{URL::to('about')}}"><i class="fa fa-fw fa-info"></i> About</a>
                    </li>
                    <li>
                        <a href="{{URL::to('contactMe')}}"><i class="fa fa-fw fa-envelope"></i> Contact Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
 
    <!-- End Header and Nav -->

    <div class="row">
        <div class="large-12">
            @yield('content')
        </div>
    </div>
 
 
    <!-- Footer -->
 
    <footer class="row">
        <div class="large-12 columns">
            <hr />
            <div class="row">
                <div class="large-9 columns">
                    <p> &nbsp; &nbsp;  &nbsp;  &nbsp;  © Michael Aguilera <?php echo date("Y");?></p>
                </div>
            </div>
        </div>
    </footer>

 <!-- jQuery -->
<script src="{{ URL::asset('/js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{ URL::asset('/js/plugins/morris/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('/js/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::asset('/js/plugins/morris/morris-data.js') }}"></script>

    <script src="{{ URL::asset('/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('/js/slickQuiz.js') }}"></script>
    <script src="{{ URL::asset('/js/master.js') }}"></script>


    <script src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/foundation.min.js') }}"></script>
    <script>
      $(document).foundation();
    </script>
    </body>
</html>
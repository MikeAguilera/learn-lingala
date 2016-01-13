<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Apple HomeScreem Icons-->
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>img/Flag_of_the_Democratic_Republic_of_the_Congo.svg.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL; ?>img/Flag_of_the_Democratic_Republic_of_the_Congo.svg.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL; ?>img/Flag_of_the_Democratic_Republic_of_the_Congo.svg.png" />
<!--End Apple HomeScreem Icons-->

<!-- Homescreen Icon -->   
<link rel="shortcut icon" href="<?php echo BASE_URL; ?>img/Flag_of_the_Democratic_Republic_of_the_Congo.svg.png">
<!-- End Homescreen Icon --> 

<!--From Lingala App Begin-->
    <title><?php echo $pageTitle; ?></title>

        <!--<link href="<?php echo BASE_URL; ?>css/reset.css" media="screen" rel="stylesheet" type="text/css">-->
        <link href="<?php echo BASE_URL; ?>css/slickQuiz.css" media="screen" rel="stylesheet" type="text/css">
        <!--<link href="<?php echo BASE_URL; ?>css/master.css" media="screen" rel="stylesheet" type="text/css">-->
<!--From Lingala App End-->

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASE_URL; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo BASE_URL; ?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo BASE_URL; ?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo BASE_URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
.red {
    color: red;
}

</style>

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
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php">Learn Lingala</a>
            </div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo BASE_URL; ?>dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                   <li>
                        <a href="<?php echo BASE_URL; ?>basic/index.php"><i class="fa fa-fw fa-book"></i> Basics</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>verbs/index.php"><i class="fa fa-fw fa-comment"></i> Verbs</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>phrases/index.php"><i class="fa fa-fw fa-comments"></i> Phrases</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>intermediate/index.php"><i class="fa fa-fw fa-comment-o"></i> Intermediate</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>family/index.php"><i class="fa fa-fw fa-users"></i> Family</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>inthehome/index.php"><i class="fa fa-fw fa-home"></i> In The Home</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>advanced/index.php"><i class="fa fa-fw fa-star-o"></i> Advanced</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>search/index.php"><i class="fa fa-fw fa-search"></i> Lingala Dictionary</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>contact/index.php"><i class="fa fa-fw fa-envelope"></i> Contact Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

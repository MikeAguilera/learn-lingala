<!--Header Begin-->
<?php 
require_once('inc/config.php'); 
include(ROOT_PATH . 'inc/header.php');
$pageTitle = "Learn Lingala";
$quizHref1 = BASE_URL . "/basic/index.php";
$quizHref2 = BASE_URL . "/verbs/index.php";
$quizHref3 = BASE_URL . "/phrases/index.php";
$quizHref4 = BASE_URL . "/intermediate/index.php";
$quizHref5 = BASE_URL . "/family/index.php";
$quizHref6 = BASE_URL . "/inthehome/index.php";
$quizHref7 = BASE_URL . "/advanced/index.php";
$quizHref8 = BASE_URL . "Contact.php";?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome!<small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<div class="jumbotron">
    <h1>Select a topic!</h1>
    <p>Start slow with our Basic Quiz or if you are brave choose our Advanced quiz!</p>
</div>



<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-book fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Basics</div>
                                        <div>   </div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref1; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-comment fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Verbs</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref2; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Phrases</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref3; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-comment-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size:2em;">Intermediate</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref4; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Family</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref5; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-home fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size:2em;">At Home</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref6; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-star-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size:2em;">Advanced</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref7; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Take a quiz</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-fw fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style="font-size:2em;">Email Me</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo $quizHref8; ?>">
                                <div class="panel-footer">
                                    <span class="pull-left">Contact Me!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
</div>
</div>

<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End--> 
    
    </body>


</html>
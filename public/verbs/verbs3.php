<!--Header Begin-->
<?php 
$pageTitle = "Verbs Quiz 3";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<!--Header End-->

<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Verbs <small> Lingala Quiz - Verbs</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-comment"></i> Verbs
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1 class="quizName">Verbs</h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

                <a class="button startQuiz btn btn-success" href="#">Get Started!</a>
            </div>

            <!-- where the quiz gets built -->
        </div>

        <div class="quizResults">
            <h3 class="quizScore">You Scored: <span><!-- where the quiz score goes --></span></h3>

            <h3 class="quizLevel"><strong>Ranking:</strong> <span><!-- where the quiz ranking level goes --></span></h3>

            <div class="quizResultsCopy">
                <!-- where the quiz result copy goes -->
            </div>
       </div>
    </div>
</div>
</div>


<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End-->   

<script src="../js/Config/verbs/verbQuiz_3-config.js"></script>
    
    </body>


</html>

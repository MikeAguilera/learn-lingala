<!--Header Begin-->
<?php 
require_once('../inc/config.php');
$pageTitle = 'Advanced Quizzes';
$quizTitle1 = 'Subject Marker Pt.5';
$quizTitle2 = 'Imparative';
$quizTitle3 = 'Prepositions/ Conjunctions';
$quizTitle4 = 'Adjectives';
$quizIcon1 = 'book';
$quizIcon2 = 'comment';
$quizIcon3 = 'comments';
$quizIcon4 = 'comment-o';
$quizHref1 = '../advanced/advanced.php';
$quizHref2 = '../advanced/advanced2.php';
$quizHref3 = '../advanced/advanced3.php';
$quizHref4 = '../advanced/advanced4.php';
include(ROOT_PATH . 'inc/header.php');
?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Advanced <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Advanced Lingala
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1>Advanced Quizzes</h1>
        <p>This is a great place to hone your skills!</p>  
        
    </div>

    <!--Quiz Body Begin-->
    <?php
    include(ROOT_PATH . 'inc/quizbody.php');
    ?>
    <!--Quiz Body End-->   
    
</div>
</div>

<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End-->   
  
    </body>


</html>

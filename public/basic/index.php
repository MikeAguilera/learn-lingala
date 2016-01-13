<!--Header Begin-->
<?php 
require_once('../inc/config.php');
$pageTitle = 'Basic Quizzes';
$quizTitle1 = 'Subject Marker Pt.1';
$quizTitle2 = 'Present Tense';
$quizTitle3 = 'Subject Marker Pt.2';
$quizTitle4 = 'Continious Tense';
$quizIcon1 = 'book';
$quizIcon2 = 'comment';
$quizIcon3 = 'comments';
$quizIcon4 = 'comment-o';
$quizHref1 = '../basic/basic.php';
$quizHref2 = '../basic/basic2.php';
$quizHref3 = '../basic/basic3.php';
$quizHref4 = '../basic/basic4.php';
include(ROOT_PATH . 'inc/header.php');
?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Basics <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Basic Lingala
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1>Basic Quizzes</h1>
        <p>This is a great place to start!</p>  
        
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

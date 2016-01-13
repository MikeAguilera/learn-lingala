<!--Header Begin-->
<?php 
require_once('../inc/config.php');
$pageTitle = 'Intermediate Quizzes';
$quizTitle1 = 'Subject Marker Pt.3';
$quizTitle2 = 'Past Tense';
$quizTitle3 = 'Subject Marker Pt.4';
$quizTitle4 = 'Future Tense';
$quizIcon1 = 'book';
$quizIcon2 = 'comment';
$quizIcon3 = 'comments';
$quizIcon4 = 'comment-o';
$quizHref1 = '../Intermediate/Intermediate.php';
$quizHref2 = '../Intermediate/Intermediate2.php';
$quizHref3 = '../Intermediate/Intermediate3.php';
$quizHref4 = '../Intermediate/Intermediate4.php';
include(ROOT_PATH . 'inc/header.php');
?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Intermediate <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Intermediate Lingala
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1>Intermediate Quizzes</h1>
        <p>This is a great place to take it to the next level!</p>  
        
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

<!--Header Begin-->
<?php 
require_once('../inc/config.php');
$pageTitle = "Basic Quiz 1";    
include(ROOT_PATH . 'inc/header.php');?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Basics <small>Part 1</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                             <a href="<?php echo BASE_URL; ?>basic/index.php"><i class="fa fa-dashboard"></i> Basics</a> 
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>basic/basic.php">Subject Markers Pt. 1</a></li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                            

        <div class="jumbotron">
                    
                 
            <h1 class="quizName">Basics Quiz 1</h1>
            <div class="quizArea">
                <div class="quizHeader">
                    <!-- where the quiz main copy goes -->

   <!-- where the panel begins --> 
   <div class="content" id="gone">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> Below are the list of English Subject Markers followed by their corresponding Lingala Subject Markers.
                                </div>
                                  <!-- Table -->
                                  <table class="table">
                                        <tr>
                                            <th>
                                                English
                                            </th>
                                            <th>
                                                Lingala
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                I
                                            </td>
                                            <td>
                                               Na (Nah)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (singular)
                                            </td>
                                            <td>
                                               O (O)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                He/She
                                            </td>
                                            <td>
                                               A (Ah)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                It
                                            </td>
                                            <td>
                                               E (Eh)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                We
                                            </td>
                                            <td>
                                               To (Tow)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (plural)
                                            </td>
                                            <td>
                                               Bo (Bow)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                They
                                            </td>
                                            <td>
                                               Ba (Bah)
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
<!-- where the panel Ends --> 
            

                    <a class="button startQuiz btn btn-success" href="#">Take Quiz</a>
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
</div>


<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End-->   
<script src="../js/Config/basic/basicQuiz-config.js"></script>
    </body>


</html>

<!--Header Begin-->
<?php 
$pageTitle = "Basic Quiz 4";
require_once('../inc/config.php'); 
include(ROOT_PATH . 'inc/header.php'); ?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Basics <small>Part 4</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="<?php echo BASE_URL; ?>basic/index.php"><i class="fa fa-dashboard"></i> Basics</a> 
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>basic/basic4.php">Continious Tense</a></li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1 class="quizName">Basics Quiz 4</h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

               <!-- where the panel begins --> 
   <div class="content" id="gone">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> The continious present tense is constructed by combining the Subject Marker + <strong class='red';>zali</strong> + verb
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
                                            <th>
                                                Example - To Speak : Koloba (Ko-low-ba)
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                I
                                            </td>
                                            <td>
                                               Nazali (Nah-zah-lee)
                                            </td>
                                            <th>
                                                I am speaking : <strong class='red';>Nazali</strong> Koloba
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (singular)
                                            </td>
                                            <td>
                                               Ozali (O-zah-lee)
                                            </td>
                                            <th>
                                                You are flying : <strong class='red';>Ozali</strong> Koloba
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                He/She
                                            </td>
                                            <td>
                                               Azali (Ah-zah-lee)
                                            </td>
                                            <th>
                                                He/She is flyings : <strong class='red';>Azali</strong> Koloba
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                It
                                            </td>
                                            <td>
                                               Ezali (Eh-zah-lee)
                                            </td>
                                            <th>
                                                It is flyings : <strong class='red';>Ezali</strong> Koloba
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                We
                                            </td>
                                            <td>
                                               Tozali (Tow-zah-lee)
                                            </td>
                                            <th>
                                                We are flying : <strong class='red';>Tozali</strong> Koloba
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (plural)
                                            </td>
                                            <td>
                                               Bozali (Bow-zah-lee)
                                            </td>
                                            <th>
                                                You all are flying : <strong class='red';>Bozali</strong> Koloba
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                They
                                            </td>
                                            <td>
                                               Bazali (Bah-zah-lee)
                                            </td>
                                            <th>
                                                They are flying : <strong class='red';>Bazali</strong> Koloba
                                            </th>
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


<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End--> 
<script src="../js/Config/basic/basicQuiz_4-config.js"></script>

    </body>


</html>

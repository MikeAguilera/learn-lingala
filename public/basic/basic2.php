<!--Header Begin-->
<?php 
$pageTitle = "Basic Quiz 2";
require_once('../inc/config.php'); 
include(ROOT_PATH . 'inc/header.php');
?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Basics <small>Part 2</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="<?php echo BASE_URL; ?>basic/index.php"><i class="fa fa-dashboard"></i> Basics</a> 
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>basic/basic2.php">Present Tense</a></li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1 class="quizName">Basics Quiz 2</h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

    <!-- where the panel begins --> 
     <div class="container" id="gone">
        <div class="content">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> The present tense is constructed by combining the Subject Marker + <strong class='red';>zo</strong> + verb (dropping the "<strong class='red';>Ko</strong>").
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
                                                Example - To Eat : Kolina (Ko-leen-a)
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                I
                                            </td>
                                            <td>
                                               Nazo (Nah-zow)
                                            </td>
                                            <th>
                                                I eat : <strong class='red';>Nazo</strong> lina
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (singular)
                                            </td>
                                            <td>
                                               Ozo (O-zow)
                                            </td>
                                            <th>
                                                You eat : <strong class='red';>Ozo</strong> lina
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                He/She
                                            </td>
                                            <td>
                                               Azo (Ah-zow)
                                            </td>
                                            <th>
                                                He/She eats : <strong class='red';>Azo</strong> lina
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                It
                                            </td>
                                            <td>
                                               Ezo (Eh-zow)
                                            </td>
                                            <th>
                                                It eats : <strong class='red';>Ezo</strong> lina
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                We
                                            </td>
                                            <td>
                                               Tozo (Tow-zow)
                                            </td>
                                            <th>
                                                We eat : <strong class='red';>Tozo</strong> lina
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (plural)
                                            </td>
                                            <td>
                                               Bo-zo (Bow-zow)
                                            </td>
                                            <th>
                                                You all eat : <strong class='red';>Bozo</strong> lina
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                They
                                            </td>
                                            <td>
                                               Bazo (Bah-zow)
                                            </td>
                                            <th>
                                                They eat : <strong class='red';>Bazo</strong>lina
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>        
                        </div>
<!-- where the panel ends --> 

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
<script src="../js/Config/basic/basicQuiz_2-config.js"></script>

    </body>


</html>

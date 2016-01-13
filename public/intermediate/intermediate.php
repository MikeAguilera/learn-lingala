<!--Header Begin-->
<?php 
$pageTitle = "Intermediate Quiz 1";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<!--Header End-->

<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Intermediate <small>Part 1</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="<?php echo BASE_URL; ?>intermediate/index.php"><i class="fa fa-comments"></i> Intermediate</a> 
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>Intermediate/Intermediate.php">Subject Markers Pt. 3</a></li>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1 class="quizName">Intermediate</h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->

    <!-- where the panel begins --> 
   <div class="content" id="gone">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> The past tense is constructed by combining the Subject Marker + verb (dropping the "<strong class='red';>Ko</strong>") + "<strong class='red';>ki</strong>" (Ky)
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
                                                Example - To Drive : Komema (Ko-meh-mah)
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                I
                                            </td>
                                            <td>
                                               Na (Nah)
                                            </td>
                                            <th>
                                                I came : Namema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (singular)
                                            </td>
                                            <td>
                                               O (O)
                                            </td>
                                            <th>
                                                You came : Omema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                He/She
                                            </td>
                                            <td>
                                               A (Ah)
                                            </td>
                                            <th>
                                                He/She came : Amema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                It
                                            </td>
                                            <td>
                                               E (Eh)
                                            </td>
                                            <th>
                                                It came : Emema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                We
                                            </td>
                                            <td>
                                               To (Tow)
                                            </td>
                                            <th>
                                                We came : Tomema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                You (plural)
                                            </td>
                                            <td>
                                               Bo (Bow)
                                            </td>
                                            <th>
                                                You all came : Bomema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                They
                                            </td>
                                            <td>
                                               Ba (Bah)
                                            </td>
                                            <th>
                                                They came : Bamema<strong class='red';>ki</strong>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
<!-- where the panel Ends --> 


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

<script src="../js/Config/intermediate/intermediateQuiz-config.js"></script>
    
    </body>


</html>

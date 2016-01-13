<!--Header Begin-->
<?php 
$pageTitle = "Intermediate Quiz 2";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Intermediate <small>Part 2</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="<?php echo BASE_URL; ?>intermediate/index.php"><i class="fa fa-comments"></i> Intermediate</a> 
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>Intermediate/Intermediate2.php">Past Tense</a></li>
                            </li>
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
   <div class="content" id="gone">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> The past tense is constructed by combining the Subject Marker + verb + "<strong class='red';>ki</strong>" (Ky)
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
                                                Example - To Come : Koya (Ko-yah)
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
                                                I came : Naya<strong class='red';>ki</strong>
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
                                                You came : Oya<strong class='red';>ki</strong>
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
                                                He/She came : Aya<strong class='red';>ki</strong>
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
                                                It came : Eya<strong class='red';>ki</strong>
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
                                                We came : Toya<strong class='red';>ki</strong>
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
                                                You all came : Boya<strong class='red';>ki</strong>
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
                                                They came : Baya<strong class='red';>ki</strong>
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

<script src="../js/Config//intermediate/intermediateQuiz_2-config.js"></script>

    </body>


</html>

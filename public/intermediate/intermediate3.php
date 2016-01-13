<!--Header Begin-->
<?php 
$pageTitle = "Intermediate Quiz 3";
require_once('../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Intermediate <small>Part 3</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="<?php echo BASE_URL; ?>intermediate/index.php"><i class="fa fa-comments"></i> Intermediate</a> 
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>Intermediate/Intermediate3.php">Subject Markers Pt. 4</a></li>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1 class="quizName">Basics Quiz 3</h1>

        <div class="quizArea">
            <div class="quizHeader">
                <!-- where the quiz main copy goes -->
                <!-- where the panel begins --> 
   <div class="content" id="gone">
            <div class="panel panel-default">
                            <!-- Default panel contents -->
                                <div class="panel-heading">Subject Markers </div>
                                <div class="panel-body"> The continious future tense is constructed by combining the Subject Marker + <strong class='red';>ko</strong>.
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
                                            <!--<th>
                                                Example - To Drink : Ko mela (Ko-meh-lah)
                                            </th>-->
                                        </tr> 
                                        <tr>
                                            <td>
                                                I
                                            </td>
                                            <td>
                                               Na<strong class='red';>ko</strong> (Nah-ko)
                                            </td>
                                            <!--<th>
                                                I drank : <strong class='red';>Nako</strong> mela
                                            </th>-->
                                        </tr>
                                        <tr>
                                            <td>
                                                You (singular)
                                            </td>
                                            <td>
                                               O<strong class='red';>ko</strong>(O-ko)
                                            </td>
                                            <!--<th>
                                                You drank : <strong class='red';>Oko</strong> mela
                                            </th>-->
                                        </tr>
                                        <tr>
                                            <td>
                                                He/She
                                            </td>
                                            <td>
                                               A<strong class='red';>ko</strong> (Ah-ko)
                                            </td>
                                            <!--<th>
                                                He/She drank : <strong class='red';>Ako</strong> mela
                                            </th>-->
                                        </tr>
                                        <tr>
                                            <td>
                                                It
                                            </td>
                                            <td>
                                               E<strong class='red';>ko</strong> (Eh-ko)
                                            </td>
                                            <!--<th>
                                                It drank : <strong class='red';>Eko</strong> mela
                                            </th>-->
                                        </tr>
                                        <tr>
                                            <td>
                                                We
                                            </td>
                                            <td>
                                               To<strong class='red';>ko</strong> (Tow-ko)
                                            </td>
                                            <!--<th>
                                                We drank : <strong class='red';>Toko</strong> mela
                                            </th>-->
                                        </tr>
                                        <tr>
                                            <td>
                                                You (plural)
                                            </td>
                                            <td>
                                               Bo<strong class='red';>ko</strong>(Bow-ko)
                                            </td>
                                            <!--<th>
                                                You all drank : <strong class='red';>Boko</strong> mela
                                            </th>-->
                                        </tr>
                                        <tr>
                                            <td>
                                                They
                                            </td>
                                            <td>
                                               Ba<strong class='red';>ko</strong> (Bah-ko)
                                            </td>
                                            <!--<th>
                                                They drank : <strong class='red';>Bako</strong> mela
                                            </th>-->
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

<script src="../js/Config//intermediate/intermediateQuiz_3-config.js"></script>

    </body>


</html>

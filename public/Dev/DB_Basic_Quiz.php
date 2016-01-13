<!--Header Begin-->
<?php 
require_once('inc/config.php');
$pageTitle = "Basic Quiz 1";    
include(ROOT_PATH . 'inc/header.php');?>
<!--Header End-->


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Basic <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Basic Lingala 1
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">

 	<!-- Quiz Begin -->
                
             
        <?php

//USEFUL FOR CHECKING ERRORS.
// if (!$check1_res) {
//     printf("Error: %s\n", mysqli_error($con));
//     exit();
// }


require(ROOT_PATH . "inc/database.php"); ?>

	
								
										<h1> Basic Quiz </h1>


										<form action="score.php" method="POST" id="quizform">
										
										<?php

											// $con=mysqli_connect("localhost","root","bits&bytes","quiz");

												



									
											//editr '10' below to change the number of questions that will appear in the quiz.
											for($i=0;$i<10;$i++){
												$quesno = $question_numbers[$i];
												
												$result2 = $db->query("SELECT Question 
															FROM basic_1 
															WHERE Question = ?");
															$db->bindParam[1, /*randomize the result*/]
												$question = mysqli_fetch_row($result2);
												$results = $db->query("SELECT english, lingala FROM lingala ORDER BY english ASC");
												
												$result3 = mysqli_query($con, "SELECT OptA FROM questions where Qno = $quesno");
												$option1 = mysqli_fetch_row($result3);

												$result4 = mysqli_query($con, "SELECT OptB FROM questions where Qno = $quesno");
												$option2 = mysqli_fetch_row($result4);

												$result5 = mysqli_query($con, "SELECT OptC FROM questions where Qno = $quesno");
												$option3 = mysqli_fetch_row($result5);

												$result6 = mysqli_query($con, "SELECT OptD FROM questions where Qno = $quesno");
												$option4 = mysqli_fetch_row($result6);

												$j = $i+1;
												echo "<div id='question'>Question ".$j.".  ".$question[0]."<br><br>";


												}?>



												
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="1"> <?php echo $option1[0] ?>
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="2"> <?php echo $option2[0] ?>
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="3"> <?php echo $option3[0] ?>
													<input type="radio" name="<?php echo "Choice".$i  ?>" value="4"> <?php echo $option4[0] ?>
												</div>

												





												
										<input type="submit" value="Submit" name="Submit">

										</form>
									</body>



								</html>




<!-- Quiz End -->

    </div>
</div>
</div>


<!--Footer Begin-->

<?php include(ROOT_PATH . 'inc/footer.php') ?>

 <!--Footer End-->   

    </body>


</html>

@extends('layouts.main')
<!--Header Begin-->
<?php 
$pageTitle = "Advanced | Home";
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
$quizHref4 = '../advanced/advanced4.php';?>
<!--Header End-->
@section('content')

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
    @include('layouts.quizbody')
    <!--Quiz Body End-->   
    
</div>
</div>

@stop
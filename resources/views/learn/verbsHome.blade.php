@extends('layouts.main')
<!--Header Begin-->
<?php 
$pageTitle = "Verbs | Home";
$quizTitle1 = 'Quiz 1';
$quizTitle2 = 'Quiz 2';
$quizTitle3 = 'Quiz 3';
$quizTitle4 = 'Quiz 4';
$quizIcon1 = 'book';
$quizIcon2 = 'comment';
$quizIcon3 = 'comments';
$quizIcon4 = 'comment-o';
$quizHref1 = '../verbs/verbs.php';
$quizHref2 = '../verbs/verbs2.php';
$quizHref3 = '../verbs/verbs3.php';
$quizHref4 = '../verbs/verbs4.php'; ?>
<!--Header End-->
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Verbs <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Basic Lingala Verbs
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

 <div class="jumbotron">
                
             
        <h1>Verb Quizzes</h1>
        <p>This is a great place to get better!</p>  
        
    </div>

    <!--Quiz Body Begin-->
    @include('layouts.quizbody')
    <!--Quiz Body End-->   
    
</div>
</div>

@stop
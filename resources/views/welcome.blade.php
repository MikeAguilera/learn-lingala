@extends('layouts.main')
<!--Header Begin-->
<?php 
$pageTitle = "Learn Lingala";?>
<!--Header End-->
@section('content')


<div id="page-wrapper">

    <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Welcome!<small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i> Home
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

<div class="jumbotron">
    <h1>Begin Learning Lingala Today!</h1>
    <p>Lingala (Ngala) is a Bantu language spoken throughout the northwestern part of the Democratic Republic of the Congo and a large part of the Republic of the Congo, as well as to some degree in Angola and the Central African Republic. It has over 10 million speakers.</p>
    <a href="{{URL::to('dashboard')}}" class="btn btn-success">Get Started!</a>
</div>

</div>
</div>
@stop
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Arist HealthCare</title>
  <link rel="shortcut icon" type="image/png" href="images/1.png"/>
  <!-- css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style/style1.css">
  <link rel="stylesheet" type="text/css" href="style/style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand img-responsive" href="index.php">
                    <img src="images/logo.png" alt="" width="150" height="40" alt="logo">
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($page == "index") echo("active") ?>"><a href="index.php">Home</a></li>
            <li class="<?php if($page == "about") echo("active") ?>"><a href="about.php">About Us</a></li>
            <li class="<?php if($page == "product") echo("active") ?>"><a href="products.php">Products</a></li>
            <li class="<?php if($page == "contact") echo("active") ?>"><a href="contact.php">Contact Us</a></li>
            <li class="<?php if($page == "career") echo("active") ?>"><a href="career.php">Career</a></li>
           <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
              <ul class="dropdown-menu" style="margin-top: 16px;">
                <li><a href="index.html">Home CTA</a></li>
                <li><a href="index-form.html">Home Form</a></li>
                <li><a href="index-video.html">Home video</a></li>
              </ul>
            </li>-->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
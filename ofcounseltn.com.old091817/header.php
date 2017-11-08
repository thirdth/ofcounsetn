<?php
  include 'garble_cnfg.php';
 ?>
<html>
  <head>

    <meta name="description" content="Website for OfCounselTN">
    <meta name="author" content="//zackglaser.com">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta id="theme-color" name="theme-color" content="#36f">
    <base target="_self">

    <title>OfCounselTN</title>

    <!--add bootstrap css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--specialized css has to load after bootstrap's more general css-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/js.js"></script>
  </head>
  <body>
    <div class="container">
      <header class="row head">
        <section class="col-xs-1 p-0">
          <img src="img/TristarLogo.png" height="100px" width="100px">
        </section>
        <section class="col-xs-11 text-left">
          <h1>OfCounselTN</h1>
          <p>Appearances Matter</p>
        </section>
      </header>
      <!--collapsable navbar-->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="#">About</a></li> <!--TODO: add href for other pages when present-->
              <li><a href="#">Fee Schedule</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="/calendar.php">Calendar</a></li>
            </ul>
            <ul class="pull-right login">
              <li><a href="login.php">Admin/Log-in</a></li>
            </ul>
          </div>
        </div>
      </nav>

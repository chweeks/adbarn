<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="/img/favicon.png" />

    <title>AdBarn</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/site.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <header>
      <div class="container">
        <div class="row">
          <div class="pull-left">
            <a href="/">
              <img class="logo" src="img/adbarn-logo.png">
            </a>
          </div>
          <div>
            <div class="dropdown pull-right">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                EN
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/img/flags/gb.png" height=""/> English language (EN)</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/img/flags/pl.png" height=""/> Polish language (PL)</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/img/flags/ro.png" height=""/> Romanian language (RO)</a></li>
              </ul>
            </div>
            <a href="login.php" class="btn btn-default pull-right login">
              <i class="fa fa-lock"></i>
              LOGIN
            </a>
            <a href="signup.php" class="btn btn-primary pull-right signup">SIGN UP</a>
            <div class="visible-xs cb"></div>
            <nav>
              <ul class="nav nav-pills tc">
                <li<?php if(preg_match('/index/', basename($_SERVER['PHP_SELF']))) echo ' class="active"'; ?>><a href="index.php">Home</a></li>
                <li<?php if(preg_match('/about/', basename($_SERVER['PHP_SELF']))) echo ' class="active"'; ?>><a href="about.php">About</a></li>
                <li<?php if(preg_match('/affiliate/', basename($_SERVER['PHP_SELF']))) echo ' class="active"'; ?>><a href="affiliate.php">Affiliate</a></li>
                <li<?php if(preg_match('/faq/', basename($_SERVER['PHP_SELF']))) echo ' class="active"'; ?>><a href="faq.php">FAQ</a></li>
                <li<?php if(preg_match('/contact/', basename($_SERVER['PHP_SELF']))) echo ' class="active"'; ?>><a href="contact.php">Contact</a></li>
              </ul>
            </nav>

          </div>
        </div>

      </div>
    </header>
    
    

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>AdBarn</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600italic,600,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
		.form-container .logo {
			margin-left:55px;
		}
	</style>
  </head>

  <body class="login">


    <div class="container">

      <div class="row">

          

        <div class="col-md-4"></div>
        <div class="col-md-4 tc form-container">
		<!--<div style="background-color:; height:50px;  position:absolute; width:90%">-->
           <div class="dropdown pull-right tl" >
              <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" style="background-color:#fff">
                EN
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/img/flags/gb.png" height=""/> English language (EN)</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/img/flags/pl.png" height=""/> Polish language (PL)</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="/img/flags/ro.png" height=""/> Romanian language (RO)</a></li>
              </ul>
            </div>
          <!--</div>-->
          <a href="/">
            <img class="logo" src="img/adbarn-logo.png">
          </a>
          
          <?php if($_GET['verify']) { ?>
          <h3>Forgot password?</h3>
          <?php } else { ?>
          <h3>What's your email?</h3>
          <?php } ?>
          <?php if($shortpass || $badpass) { ?>
          <p class="bg-danger">Passwords do not match or too short</p>
		  <?php } ?>
          <?php if($badlink && $verify) { ?>
          <p class="bg-danger">You followed an invalid link</p>
		  <?php } else if($badlink) { ?>
          <p class="bg-danger">Bad email</p>
          <?php } ?>
          <?php if($passreset) { ?>
          <p class="bg-success">Password reset link has been sent to your email</p>
          <?php } ?>
          <form role="form" method="post" id="resetform">
            <?php if($_GET['verify']) { ?>
            <div class="form-group <?php if($bademail || $badpass) { ?> has-error has-feedback <?php } ?>">
              <input name="password1" type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password" value="<?php echo $password1; ?>">
            </div>
            <div class="form-group <?php if($bademail || $badpass) { ?> has-error has-feedback <?php } ?>">
              <input name="password2" type="password" class="form-control input-lg" id="exampleInputPassword2" placeholder="Repeat Password" value="<?php echo $password2; ?>">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Save Password</button>
            <?php } else { ?>
            <div class="form-group <?php if($bademail || $badpass) { ?> has-error has-feedback <?php } ?>">
              <input name="email" type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Reset Password</button>
            <?php } ?>
          </form>
          <div>
            <div>&nbsp;</div>
            <a href="signup.php" class="already-account pull-left">I don't have an account</a>
            <div class="clear"></div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>

  </body>
</html>

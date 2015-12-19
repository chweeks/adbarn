
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
          
          <h3>Login</h3>
          <?php if($bademail || $badpass) { ?>
          <p class="bg-danger">Bad email or password</p>
		  <?php } ?>
          <?php if($passreset) { ?>
          <p class="bg-success">Password reset link has been sent to your email</p>
          <?php } ?>
          <form role="form" method="post" id="loginform">
            <div class="form-group <?php if($bademail || $badpass) { ?> has-error has-feedback <?php } ?>">
              <input name="email" type="email" class="form-control input-lg" id="exampleInputEmail1" placeholder="Email address" value="<?php echo $email; ?>">
            </div>
            <div class="form-group <?php if($bademail || $badpass) { ?> has-error has-feedback <?php } ?>">
              <input name="password" type="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password" value="<?php echo $password; ?>">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
            <input id="forgotpass" name="forgotpass" hidden="hidden" type="checkbox">
          </form>
          <div>
            <div>&nbsp;</div>
            <a href="signup.php" class="already-account pull-left">I don't have an account</a>
            <a href="#" class="forgot pull-right" onClick="document.getElementById('forgotpass').checked = true;document.getElementById('loginform').submit();">Forgot password</a>
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

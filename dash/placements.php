<?php

// $mysqli = new mysqli("127.0.0.1", "wau", "d9rk3KWU59dIq1", "adbarn", 3306);
// if ($mysqli->connect_errno) {
//     echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
//
// if(isset($_COOKIE['user'])) {
// 	$cookie = explode('-', $_COOKIE['user']);
// 	$userid = $cookie[0];
// 	if(is_numeric($userid)) {
// 		$hash = $mysqli->real_escape_string($cookie[1]);
// 		$query = $mysqli->query("SELECT * FROM users WHERE id='$userid'");
// 		if($myrow = $query->fetch_assoc()) {
// 			if($hash==sha1($myrow['password'])) {
// 				//all good, stay here
// 				$username = $myrow['email'];
// 			} else {
// 				logoutUser();
// 			}
// 		} else {
// 			logoutUser();
// 		}
// 	} else {
// 		logoutUser();
// 	}
// } else {
// 	logoutUser();
// }
//
// function logoutUser() {
// 	header("Location: /logout.php");
// 	exit();
// }


?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
  <meta charset="utf-8" />
  <title>Scale | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/icon.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <link rel="stylesheet" href="js/datatables/datatables.css" type="text/css"/>

  <link rel="stylesheet" href="js/daterangepicker/daterangepicker.css" type="text/css"/>
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  <script src="js/jquery.min.js"></script>
  <style>
  .range_inputs button {
	  width:74px;
  }
  .range_inputs .applyBtn {
	  margin-right:8px;
  }
  </style>
</head>
<body class="container">
  <section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
      <div class="navbar-header aside-md dk">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="/dash/" class="navbar-brand">
          <img class="logo" src="../img/adbarn-logo.png" width="150" height="46">
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="fa fa-cog"></i>
        </a>
      </div>

      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="i i-chat3"></i>
            <span class="badge badge-sm up bg-danger count">2</span>
          </a>
          <section class="dropdown-menu aside-xl animated flipInY">
            <section class="panel bg-white">
              <div class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
              </div>
              <div class="list-group list-group-alt">
                <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="images/a0.png" alt="..." class="img-circle">
                  </span>
                  <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                </a>
                <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                </a>
              </div>
              <div class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
              </div>
            </section>
          </section>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="images/a0.png" alt="...">
            </span>
            <? echo $username; ?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li>
              <span class="arrow top"></span>
              <a href="./settings.php">Settings</a>
            </li>
            <li>
              <a href="./status.php">Status</a>
            </li>
            <li>
              <a href="#">
                <span class="badge bg-danger pull-right">3</span>
                Notifications
              </a>
            </li>
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="logout.php">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="aside-md hidden-print" id="nav">
          <section class="vbox">
            <section class="w-f scrollable">
              <div class=" " data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">



                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <section class="row m-b-md"></section>
                  <ul class="nav nav-main" data-ride="collapse">
                    <li >
                      <a href="index.php" class="auto">
                        <i class="i i-statistics icon i-2x">
                        </i>
                        <span class="font-bold h4 selected">Dashboard</span>
                      </a>
                    </li>
                    <li >
                      <a href="./reports.php" class="auto">
                        <i class="fa fa-dollar icon i-2x"></i>
                        <span class="font-bold h4">Reports</span>
                      </a>
                    </li>
                    <li class="active bg-white">
                      <a href="./placements.php" class="auto">
                        <i class="fa fa-tags icon i-2x"></i>
                        <span class="font-bold h4">Placements</span>
                      </a>
                    </li>
                    <li >
                      <a href="./affiliates.php" class="auto">
                        <i class="fa fa-users icon i-2x"></i>
                        <span class="font-bold h4">Affiliates</span>
                      </a>
                    </li>
                    <li >
                      <a href="./payments.php" class="auto">
                        <i class="fa fa-money icon i-2x"></i>
                        <span class="font-bold h4">Payments</span>
                      </a>
                    </li>
                    <li >
                      <a href="./support.php" class="auto">
                        <i class="i i-support icon i-2x"></i>
                        <span class="font-bold h4">Support</span>
                      </a>
                    </li>
                  </ul>
                  <div class="line dk hidden-nav-xs"></div>

                </nav>
                <!-- / nav -->
              </div>
            </section>
            <!--
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout i-2x"></i>
              </a>
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-cog2 i-2x"></i>
              </a>
            </footer>
            -->
          </section>
        </aside>
            <section id="content">
             <section class="hbox stretch">
               <section>
                 <section class="vbox">
                   <section class="padder">
                     <section class="row m-b-md"></section>
                     <div class="row">
                         <div class="col-lg-12">
                         <section class="row m-l-none m-r-none m-b text-center bg-white panel b-a">
                           <h1 class="text-orange">Placements</h1>
                           <div class="row">
                             <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#createAd">Create Ad</button>
                           </div>
                           <br>
                         </section>
                         <div class="modal fade bs-example-modal-lg" id="createAd" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                           <div class="modal-dialog modal-lg">
                             <div class="modal-content">
                               <div class="row">
                                 <div class="col-lg-offset-1 col-lg-10">
                                   <h4>Create your ad using the form below!</h4>
                                 </div>
                               </div>
                               <form>
                                 <div class="row">
                                   <div class="form-group">
                                     <div class="col-lg-offset-1 col-lg-4">
                                       <label for="exampleInputName1">Placement Name</label>
                                     </div>
                                     <div class="col-lg-offset-1 col-lg-10">
                                       <input type="text" class="form-control" id="exampleInputName1" placeholder="Ad Placement">
                                     </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group">
                                      <div class="col-lg-offset-1 col-lg-4">
                                        <label for="exampleInputName2">Domain Name</label>
                                      </div>
                                        <div class="col-lg-offset-1 col-lg-10">
                                          <input type="text" class="form-control" id="exampleInputName2" placeholder="www.example.com">
                                        </div>
                                     </div>
                                   </div>
                                   <div class="row">
                                     <br>
                                     <div class="col-lg-offset-1 col-lg-4">
                                       <label>Ad Type</label>
                                     </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-lg-offset-1 col-lg-10">
                                       <select class="form-control">
                                        <option>250x300</option>
                                        <option>160x600</option>
                                        <option>pop up</option>
                                        <option>pop under</option>
                                       </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <br>
                                    <div class="col-lg-offset-5 col-lg-4">
                                      <button type="submit" class="btn btn-success">Create Ad</button>
                                    </div>
                                  </div>
                                  <br>
                                </form>
                                <div class="row">
                                  <div class="col-lg-offset-1 col-lg-10">
                                    <pre>Ad code generated goes here</pre>
                                  </div>
                              </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </section>
                 </section>
               </section>

             </section>
             <section class="hbox stretch">
               <section>
                 <section class="vbox">
                   <section class="padder">
                     <section class="row m-b-md"></section>
                      <section class="row m-l-none m-r-none m-b text-center bg-white panel b-a">
                       <div class="row">
                         <h1 class="text-orange">Manage Ads</h1>
                       </div>
                       <div class="row">
                         <div class="col-lg-offset-1 col-lg-10">
                           <table class="table table-striped">
                             <thead>
                              <tr>
                                <th>Ad Name</th>
                                <th>Domain Name</th>
                                <th>Ad Type</th>
                                <th>Report</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>Left Banner</th>
                                <td>www.example.com</td>
                                <td>160x600</td>
                                <td><a href="#"><span class="text-info">Report</span></a></td>
                              </tr>
                              <tr>
                                <th>Left Banner</th>
                                <td>www.example.com</td>
                                <td>160x600</td>
                                <td><a href="#"><span class="text-info">Report</span></a></td>
                              </tr>
                              <tr>
                                <th>Left Banner</th>
                                <td>www.example.com</td>
                                <td>160x600</td>
                                <td><a href="#"><span class="text-info">Report</span></a></td>
                              </tr>
                            </tbody>
                           </table>
                         </div>
                       </div>
                     </section>
                   </section>
                 </section>
               </section>

             </section>
             <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
           </section>
            <!--
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout i-2x"></i>
              </a>
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-cog2 i-2x"></i>
              </a>
            </footer>
            -->
          </section>
        </aside>
        <!-- /.aside -->


          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>

  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="js/jvectormap/demo.js"></script>


  <script src="js/sortable/jquery.sortable.js"></script>
  <script src="js/app.plugin.js"></script>

  <script src="js/moment/moment.js"></script>

</body>
</html>

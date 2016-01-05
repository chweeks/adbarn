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
  <link rel="stylesheet" href="/admin/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/admin/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="/admin/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/admin/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="/admin/css/font.css" type="text/css" />
  <link rel="stylesheet" href="/admin/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/admin/js/datatables/datatables.css" type="text/css"/>

  <link rel="stylesheet" href="/admin/js/daterangepicker/daterangepicker.css" type="text/css"/>
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  <script src="/admin/js/jquery.min.js"></script>
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
                    <img src="/admin/images/a0.png" alt="..." class="img-circle">
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
              <img src="/admin/images/a0.png" alt="...">
            </span>
            <? echo $username; ?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <li>
              <span class="arrow top"></span>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
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
                    <li class="active bg-white">
                      <a href="index.html" class="auto">
                        <i class="i i-statistics icon i-2x">
                        </i>
                        <span class="font-bold h4 selected">Dashboard</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <i class="fa fa-dollar icon i-2x"></i>
                        <span class="font-bold h4">Earnings</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <i class="fa fa-tags icon i-2x"></i>
                        <span class="font-bold h4">Placements</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <i class="fa fa-users icon i-2x"></i>
                        <span class="font-bold h4">Affiliates</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <i class="fa fa-money icon i-2x"></i>
                        <span class="font-bold h4">Payments</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <i class="fa fa-warning icon i-2x"></i>
                        <span class="font-bold h4">Status</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <i class="fa fa-users icon i-2x"></i>
                        <span class="font-bold h4">Privileges</span>
                      </a>
                    </li>
                    <li >
                      <a href="#" class="auto">
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
        <!-- /.aside -->
        <section id="content">
          <br>
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="padder">
                  <div class="col-lg-12" id="noPadding">
                    <ul class="nav nav-tabs nav-justified">
                      <h2>Ticket Queue</h2>
                      <li class="active"><a data-toggle="tab" href="#top">Top</a></li>
                      <li><a data-toggle="tab" href="#trending">Trending</a></li>
                    </ul>
                    <section class="row m-l-none m-r-none m-b text-center bg-white panel b-a">
                    <div class="tab-content">
                      <div id="top" class="tab-pane fade in active">
                        <h3>Top Users</h3>
                        <div class="row">
                          <div class="col-md-6">
                            <h4>Revenue</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt <br>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <h4>Ad Requests</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt <br>
                            </p>
                          </div>
                        </div>
                        <h3>Top Affiliators</h3>
                        <div class="row">
                          <div class="col-md-6">
                            <h4>Revenue</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt <br>
                            </p>
                          </div>
                          <div class="col-md-6">
                            <h4>No. of Referrals</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt <br>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div id="trending" class="tab-pane fade">
                        <h3>Trending Countries</h3>
                        <div class="row">
                          <div class="col-md-6">
                            <h4>Gaining</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt</p>
                          </div>
                          <div class="col-md-6">
                            <h4>Losing</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt</p>
                          </div>
                        </div>
                        <h3>Trending Ad Formats</h3>
                        <div class="row">
                          <div class="col-md-6">
                            <h4>Gaining</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt</p>
                          </div>
                          <div class="col-md-6">
                            <h4>Losing</h4>
                            <p>1. Lorem ipsum dolor sit amet <br>
                               2. consectetur adipisicing elit <br>
                               3. sed do eiusmod tempor incididunt</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>

  <!-- Bootstrap -->
  <script src="/admin/js/bootstrap.js"></script>
  <!-- App -->
  <script src="/admin/js/app.js"></script>
  <script src="/admin/js/slimscroll/jquery.slimscroll.min.js"></script>

  <script src="/admin/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="/admin/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="/admin/js/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="/admin/js/jvectormap/demo.js"></script>


  <script src="/admin/js/sortable/jquery.sortable.js"></script>
  <script src="/admin/js/app.plugin.js"></script>

  <script src="/admin/js/moment/moment.js"></script>


  <script src="/admin/js/daterangepicker/daterangepicker.js"></script>

  <script type="text/javascript">
    $(function () {

        // date range picker
        $('#dashboard-range').daterangepicker(
            {
              ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                 'Last 7 Days': [moment().subtract('days', 6), moment()],
                 'Last 30 Days': [moment().subtract('days', 29), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
              },
              startDate: moment().subtract('days', 6),
              endDate: moment()
            },
            function(start, end) {
                $('#dashboard-range .text-date').text(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
            }
        );

    })
    </script>

</body>
</html>

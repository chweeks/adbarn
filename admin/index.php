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
                      <a href="index.php" class="auto">
                        <i class="i i-statistics icon i-2x">
                        </i>
                        <span class="font-bold h4 selected">Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="auto">
                        <i class="fa fa-warning icon i-2x"></i>
                        <span class="font-bold h4">Automated Emails</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/privileges.php" class="auto">
                        <i class="fa fa-users icon i-2x"></i>
                        <span class="font-bold h4">Privileges</span>
                      </a>
                    </li>
                    <li>
                      <a href="/admin/support.php" class="auto">
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
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="padder">
                  <section class="row m-b-md"></section>
                  <div class="row">
                  	<div class="col-lg-12">
                      <section class="row m-l-none m-r-none m-b text-center bg-white panel b-a">
                        <div class="col-xs-4 dk lter r-l">
                          <div class="wrapper">
                            <i class="fa fa-arrow-up fa fa-3x m-t m-b-sm text-success"></i>
                            <p class="text-muted font-bold">Today</p>
                            <div class="h3 font-bold text-success">$47.02</div>
                          </div>
                        </div>
                        <div class="col-xs-4 lt">
                          <div class="wrapper">
                            <i class="fa fa-arrow-down fa fa-3x m-t m-b-sm text-danger"></i>
                            <p class="text-muted font-bold">Yesterday</p>
                            <div class="h3 font-bold text-danger">$121.05 / -33%</div>
                            <div class="text-muted">vs today</div>
                          </div>
                        </div>
                        <div class="col-xs-4 dk r-r">
                          <div class="wrapper">
                            <i class="fa fa-arrow-up fa fa-3x m-t m-b-sm text-success"></i>
                            <p class="text-muted font-bold">Month</p>
                            <div class="h3 font-bold text-success">$4231.19 / +17%</div>
                            <div class="text-muted">vs previous month</div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>

                  <div id="datepicker" class="row">
                    <div class="col-lg-12 pull-right">
                      <button class="btn btn-flat btn-default pull-right" id="dashboard-range">
                        <span class="icon ion-ios7-calendar-outline"></span>
                        <span class="text-date"><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span>
                        <b class="caret"></b>
                      </button>
					          </div>
                  </div>

                  <section class="row m-b-md"></section>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="panel borderfix">
                        <div class="row m-n">
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-orange hover-rotate"></i>
                                <i class="i i-screen i-1x text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-orange">30,144</span>
                                <small class="text-muted text-u-c">Impressions</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="fa fa-bar-chart-o i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">$0.36</span>
                                <small class="text-muted text-u-c">RPM</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-dsc i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">64</span>
                                <small class="text-muted text-u-c">Conversions</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="fa fa-dollar i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-success-lt">$59.88</span>
                                <small class="text-muted text-u-c">Revenue</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-orange hover-rotate"></i>
                                <i class="fa fa-location-arrow i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-orange">849</span>
                                <small class="text-muted text-u-c">Clicks</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-graph i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">2.14%</span>
                                <small class="text-muted text-u-c">CTR</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">3</span>
                                <small class="text-muted text-u-c">Affiliate Referrals</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="fa fa-dollar i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-success-lt">$24.14</span>
                                <small class="text-muted text-u-c">Affiliate Revenue</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-orange hover-rotate"></i>
                                <i class="i i-dsc i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-orange">XX</span>
                                <small class="text-muted text-u-c">Placement delta</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-graph i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">XX</span>
                                <small class="text-muted text-u-c">RPM delta%</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-dsc i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">XX</span>
                                <small class="text-muted text-u-c">No. of open tickets</small>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <section class="row m-b-md"></section>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="panel borderfix">
                        <div class="row m-n">
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-orange hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-orange">xx</span>
                                <small class="text-muted text-u-c">total users</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">XX</span>
                                <small class="text-muted text-u-c">inactive users</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">XX</span>
                                <small class="text-muted text-u-c">new users</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="i i-dsc i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-success-lt">XX</span>
                                <small class="text-muted text-u-c">lost users</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-orange hover-rotate"></i>
                                <i class="i i-graph i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-orange">XX</span>
                                <small class="text-muted text-u-c">new affiliate referals</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info">XX</span>
                                <small class="text-muted text-u-c">total active affiliators</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-graph i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary">XX</span>
                                <small class="text-muted text-u-c">pro-active affiliators</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-3 b-b b-r">
                            <a class="block padder-v">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="i i-dsc i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-success-lt">XX</span>
                                <small class="text-muted text-u-c">lost <br>affiliators</small>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="datepicker" class="row">
                    <div class="col-lg-12 pull-right">
                      <button class="btn btn-flat btn-default pull-right" id="dashboard-range">
                        <span class="icon ion-ios7-calendar-outline"></span>
                        <span class="text-date"><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span>
                        <b class="caret"></b>
                      </button>
                    </div>
                  </div>

                    <br>

                  <div class="col-lg-12" id="noPadding">
                    <ul class="nav nav-tabs nav-justified">
                      <li class="active"><a data-toggle="tab" href="#top">Top</a></li>
                      <li><a data-toggle="tab" href="#trending">Trending</a></li>
                    </ul>
                    <section class="row m-l-none m-r-none m-b text-center bg-white panel b-a">
                    <div class="tab-content">
                      <div id="top" class="tab-pane fade in active">
                        <h3>Top Users</h3>
                        <div class="row">
                          <div class="col-md-6" id="noPadRight">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <span class="i-s i-s-2x m-r-sm">
                                  <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                  <i class="fa fa-dollar i-sm text-white"></i>
                                </span>
                                Revenue
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                              </div>
                            </div>
                          <div class="col-md-6" id="noPadLeft">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <span class="i-s i-s-2x m-r-sm">
                                  <i class="i i-hexagon2 i-s-base text-info-lt hover-rotate"></i>
                                  <i class="i i-graph i-sm text-white"></i>
                                </span>
                                Ad Requests
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                        <h3>Top Affiliators</h3>
                        <div class="row">
                          <div class="col-md-6" id="noPadRight">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <span class="i-s i-s-2x m-r-sm">
                                  <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                  <i class="fa fa-dollar i-sm text-white"></i>
                                </span>
                                Revenue
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                            </div>
                          </div>

                          <div class="col-md-6" id="noPadLeft">
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <span class="i-s i-s-2x m-r-sm">
                                  <i class="i i-hexagon2 i-s-base text-info-lt hover-rotate"></i>
                                  <i class="i i-users2 i-sm text-white"></i>
                                </span>
                                No. Of Referrals
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                <span class="i-s i-s-2x m-r-sm">
                                  <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                  <i class="fa fa-dollar i-sm text-white"></i>
                                </span>
                                Top Monetization Partners
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div id="trending" class="tab-pane fade">
                        <h3>Trending Countries</h3>
                        <div class="row">
                          <div class="col-md-6" id="noPadRight">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                Gaining <i class="fa fa-arrow-up fa m-t m-b-sm text-success" id="noMargin"></i>
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                              </div>
                            </div>
                          <div class="col-md-6" id="noPadLeft">
                            <div class="panel panel-danger">
                              <div class="panel-heading">
                                Losing <i class="fa fa-arrow-down fa m-t m-b-sm text-danger" id="noMargin"></i>
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                              </div>
                            </div>
                          </div>
                        <h3>Trending Ad Formats</h3>
                        <div class="row">
                          <div class="col-md-6" id="noPadRight">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                                Gaining <i class="fa fa-arrow-up fa m-t m-b-sm text-success" id="noMargin"></i>
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                              </div>
                            </div>
                          <div class="col-md-6" id="noPadLeft">
                            <div class="panel panel-danger">
                              <div class="panel-heading">
                                Losing <i class="fa fa-arrow-down fa m-t m-b-sm text-danger" id="noMargin"></i>
                              </div>
                              <table class="table">
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                  <td>Lorem ipsum dolor sit amet</td>
                                </tr>
                              </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <br>

                  <div class="col-sm-3 hide">
                    <section class="panel b-a">
                      <header class="panel-heading b-b b-light">
                        <ul class="nav nav-pills pull-right">
                          <li>
                            <a href="ajax.pie.html" class="text-muted" data-bjax data-target="#b-c">
                              <i class="i i-cycle"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="panel-toggle text-muted">
                              <i class="i i-plus text-active"></i>
                              <i class="i i-minus text"></i>
                            </a>
                          </li>
                        </ul>
                        Connection
                      </header>
                      <div class="panel-body text-center bg-light lter" id="b-c">
                        <div class="easypiechart inline m-b m-t" data-percent="60" data-line-width="4" data-bar-Color="#23aa8c" data-track-Color="#c5d1da" data-color="#2a3844" data-scale-Color="false" data-size="120" data-line-cap='butt' data-animate="2000">
                          <div>
                            <span class="h2 m-l-sm step"></span>%
                            <div class="text text-xs">completed</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="row">
                  <div class="padder">
                    <div class="col-lg-12">
                      <div class="panel b-a">
                        <div class="panel-heading b-b">Map</div>
                        <div class="panel-body">
                          <p class="m-b-lg text-muted">Impressions... bla bla bla</p>
                          <div class="row m-b-xl">
                            <div class="col-sm-8">
                              <div id="world_map" style="height:240px;">

                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="h4 m-b font-thin">Statistics</div>
                              <p>Internal administrative boundaries</p>
                              <div>
                                <div class="inline text-center">
                                  <div class="easypiechart" data-percent="60" data-bar-color="#fcc633" data-line-width="4" data-loop="false" data-scale-color="#fff" data-rotate="0" data-size="100">
                                    <div>
                                      <span class="step">60</span>%
                                    </div>
                                  </div>
                                  <p class="text-warning font-bold">data</p>
                                </div>
                                <div class="inline text-center">
                                  <div class="easypiechart" data-percent="35" data-bar-color="#177bbb" data-line-width="4" data-loop="false" data-scale-color="#fff" data-rotate="0" data-size="100">
                                    <div>
                                      <span class="step">35</span>%
                                    </div>
                                  </div>
                                  <p class="text-primary font-bold">info</p>
                                </div>
                              </div>
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

  <script src="js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="js/jvectormap/demo.js"></script>


  <script src="js/sortable/jquery.sortable.js"></script>
  <script src="js/app.plugin.js"></script>

  <script src="js/moment/moment.js"></script>


  <script src="js/daterangepicker/daterangepicker.js"></script>

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

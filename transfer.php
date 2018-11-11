<?php
require('db.php');
session_start();
$id= $_SESSION['id'];

$query = "SELECT name FROM `user_detail`  WHERE id='$id'";
$result= mysqli_query($con, $query);
$rows= mysqli_fetch_array($result, MYSQLI_ASSOC);

$acc_sql= "SELECT acc_no FROM account_detail where id='$id'";
$acc_result= mysqli_query($con, $acc_sql);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>ERP</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                  <i class="ni ni-sound-wave"></i>
                </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="transfer.php">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fab fa-searchengin"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="accounts.php">
              <i class="ni ni-tv-2 text-primary"></i> Accounts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfer.php">
              <i class="ni ni-planet text-blue"></i> Transfers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/maps.html">
              <i class="ni ni-pin-3 text-orange"></i> Maps
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/profile.html">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/tables.html">
              <i class="ni ni-bullet-list-67 text-red"></i> Tables
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/login.html">
              <i class="ni ni-key-25 text-info"></i> Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i> Register
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Documentation</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
              <i class="ni ni-spaceship"></i> Getting started
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
              <i class="ni ni-palette"></i> Foundation
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
              <i class="ni ni-ui-04"></i> Components
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Transfers</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fab fa-searchengin text-black"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form> 
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                <i class="ni ni-sound-wave"></i>
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $rows['name']?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-black mb-0">Transfer Between Accounts</h5>
                        <svg version="1.1" id="tba-transfer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 118 38.6" enable-background="new 0 0 118 38.6" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="black" d="M59.6,21.9c0.1-0.5,0.7-0.9,1.2-0.7l10.4,2
                        c0.3,0.1,0.5,0.3,0.6,0.5c0.1,0.2,0.2,0.5,0.1,0.8l-3.4,10c-0.1,0.5-0.7,0.9-1.2,0.7c-0.5-0.1-0.9-0.7-0.7-1.2l2.6-7.6L48.1,38.6
                        l-1-1.7l21.1-12.2l-7.9-1.5C59.8,23,59.5,22.4,59.6,21.9z"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="black" d="M51.7,3.4c-0.5-0.1-1.1,0.2-1.2,0.7l-3.4,10
                        c-0.1,0.3,0,0.6,0.1,0.8c0.1,0.2,0.3,0.4,0.6,0.5l10.4,2c0.5,0.1,1.1-0.2,1.2-0.7c0.1-0.5-0.2-1.1-0.7-1.2l-7.9-1.5L71.9,1.7l-1-1.7
                        L49.8,12.2l2.6-7.6C52.5,4.1,52.2,3.5,51.7,3.4z"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="black" d="M37,36.3H4c-2.2,0-4-1.8-4-4v-24c0-2.2,1.8-4,4-4h33
                        c2.2,0,4,1.8,4,4v24C41,34.5,39.2,36.3,37,36.3z M2,17.3h37v-4H2V17.3z M39,8.3c0-1.1-0.9-2-2-2H4c-1.1,0-2,0.9-2,2v3h37V8.3z
                         M39,19.3H2v13c0,1.1,0.9,2,2,2h33c1.1,0,2-0.9,2-2V19.3z M34,30.3h-4c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1
                        C35,29.8,34.6,30.3,34,30.3z M25,30.3H7c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1C26,29.8,25.6,30.3,25,30.3z"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="black" d="M114,36.3H81c-2.2,0-4-1.8-4-4v-24c0-2.2,1.8-4,4-4h33
                        c2.2,0,4,1.8,4,4v24C118,34.5,116.2,36.3,114,36.3z M79,17.3h37v-4H79V17.3z M116,8.3c0-1.1-0.9-2-2-2H81c-1.1,0-2,0.9-2,2v3h37V8.3
                        z M116,19.3H79v13c0,1.1,0.9,2,2,2h33c1.1,0,2-0.9,2-2V19.3z M111,30.3h-4c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h4c0.6,0,1,0.4,1,1
                        C112,29.8,111.6,30.3,111,30.3z M102,30.3H84c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1C103,29.8,102.6,30.3,102,30.3z"></path>
                </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-black mb-0">Transfer Between Users</h5>
                        
                    <svg version="1.1" id="tba-transfer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 118 38.6" style="enable-background:new 0 0 118 38.6;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#A7A9AC;}
</style>
<g>
	<g>
		<path id="XMLID_798_" class="st0" d="M115.8,37.8v-2.2c0-0.5-0.6-0.9-1.5-1.2c-5.4-1.6-11.2-2.7-12.3-2.9c-0.1,0-0.2-0.1-0.2-0.1
			v-3.1c1.1-0.3,1.7-0.7,1.7-1.2V24c0-1.6-3.5-2.9-7.8-2.9h-0.9h-0.9c-4.3,0-7.8,1.3-7.8,2.9v3.2c0,0.5,0.7,0.9,1.7,1.2v3.1
			c0,0.1-0.1,0.1-0.2,0.1c-1.2,0.2-7,1.3-12.3,2.9c-1,0.3-1.5,0.7-1.5,1.2v2.2"/>
		<path d="M23.3,18.4c-1.2,0-2.2,0.4-2.2,0.8v3.2c0,3.8,8.4,6.9,18.7,6.9h27.6l-3.6,1.3c-0.8,0.3-0.8,0.8,0,1.1
			c0.4,0.2,1,0.2,1.5,0.2s1.1-0.1,1.5-0.2l7.3-2.7c0.4-0.1,0.7-0.4,0.7-0.6c0-0.2-0.2-0.4-0.7-0.6l-7.3-2.7c-0.8-0.3-2.2-0.3-3.1,0
			c-0.8,0.3-0.8,0.8,0,1.1l3.6,1.3H39.9c-7.9,0-14.4-2.4-14.4-5.3v-3.2C25.5,18.7,24.5,18.4,23.3,18.4z"/>
		<path d="M51,10.7c0.4,0.2,1,0.2,1.5,0.2c0.6,0,1.1-0.1,1.5-0.2c0.8-0.3,0.8-0.8,0-1.1l-3.6-1.3h27.7c7.9,0,14.4,2.4,14.4,5.3v3.2
			c0,0.4,1,0.8,2.2,0.8s2.2-0.4,2.2-0.8v-3.2c0-3.8-8.4-6.9-18.7-6.9H50.5l3.6-1.3C55,5,55,4.5,54.1,4.2s-2.2-0.3-3.1,0l-7.3,2.7
			c-0.4,0.1-0.7,0.4-0.7,0.6c0,0.2,0.2,0.4,0.7,0.6L51,10.7z"/>
		<path d="M2.2,18.3c1.2,0,2.2-0.4,2.2-0.8v-2.2c0-0.2,0.3-0.4,0.7-0.6c5.2-1.6,10.8-2.6,11.9-2.8c0.9-0.2,1.4-0.5,1.4-0.8V8
			c0-0.3-0.4-0.5-1-0.7c-0.5-0.1-0.8-0.3-0.8-0.5V3.7c0-1.1,2.5-2.1,5.6-2.1h1.9c3.1,0,5.6,0.9,5.6,2.1v3.2c0,0.2-0.3,0.4-0.8,0.5
			c-0.6,0.1-1,0.4-1,0.7v3.1c0,0.4,0.6,0.7,1.4,0.8c1.1,0.2,6.7,1.2,11.9,2.8c0.5,0.1,0.7,0.3,0.7,0.6v2.2c0,0.4,1,0.8,2.2,0.8
			s2.2-0.4,2.2-0.8v-2.2c0-0.7-0.8-1.4-2.3-1.8c-4.6-1.4-9.5-2.4-11.8-2.8V8.4c1.1-0.4,1.7-1,1.7-1.6V3.7c0-2-4.5-3.7-10-3.7h-1.9
			c-5.5,0-10,1.6-10,3.7v3.2c0,0.6,0.6,1.1,1.7,1.6v2.3c-2.2,0.4-7.2,1.4-11.8,2.8C0.9,13.9,0,14.6,0,15.3v2.2
			C0,17.9,1,18.3,2.2,18.3z"/>
		<path d="M73.8,33.8c-1.5,0.4-2.3,1.1-2.3,1.8v2.2c0,0.4,1,0.8,2.2,0.8s2.2-0.4,2.2-0.8v-2.2c0-0.2,0.3-0.4,0.7-0.6
			c5.2-1.6,10.8-2.6,11.9-2.8c0.9-0.2,1.4-0.5,1.4-0.8v-3.1c0-0.3-0.4-0.5-1-0.7c-0.5-0.1-0.8-0.3-0.8-0.5V24c0-1.1,2.5-2.1,5.6-2.1
			h1.9c3.1,0,5.6,0.9,5.6,2.1v3.2c0,0.2-0.3,0.4-0.8,0.5c-0.6,0.1-1,0.4-1,0.7v3.1c0,0.4,0.6,0.7,1.4,0.8c1.1,0.2,6.7,1.2,11.9,2.8
			c0.5,0.1,0.7,0.3,0.7,0.6v2.2c0,0.4,1,0.8,2.2,0.8c1.2,0,2.2-0.4,2.2-0.8v-2.2c0-0.7-0.8-1.4-2.3-1.8c-4.6-1.4-9.5-2.4-11.8-2.8
			v-2.3c1.1-0.4,1.7-1,1.7-1.6V24c0-2-4.5-3.7-10-3.7h-1.9c-5.5,0-10,1.6-10,3.7v3.2c0,0.6,0.6,1.1,1.7,1.6V31
			C83.3,31.4,78.4,32.4,73.8,33.8z"/>
	</g>
</g>
</svg>


                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
          <?php if(isset($_POST['acc-btn'])){
            $acc_detail_sql= "SELECT * FROM account_detail WHERE acc_no='".$_POST['acc-btn']."'";
            $acc_detail_sql_result= mysqli_query($con, $acc_detail_sql);
            $acc_detail_sql_rows= mysqli_fetch_assoc($acc_detail_sql_result);
    
            $user_detail_sql= "SELECT * FROM user_detail WHERE id='$id'";
            $user_detail_sql_result= mysqli_query($con, $user_detail_sql);
            $user_detail_sql_rows= mysqli_fetch_assoc($user_detail_sql_result);
            
            ?>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Account Number- <?php echo $_POST['acc-btn'];?></h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Account information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Account Holder Name</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $user_detail_sql_rows['name']?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="<?php echo $user_detail_sql_rows['email']?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="<?php echo $user_detail_sql_rows['address']?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Mobile Number</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="<?php echo $user_detail_sql_rows['mob_no']?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Account Details</h6>
                  <div class="row">
                <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Balance</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="<?php echo $acc_detail_sql_rows['balance']?>">
                      </div>
                    </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Type</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="<?php echo $acc_detail_sql_rows['type']?>">
                      </div>
                    </div>
                  <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Creation Date</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="<?php echo $acc_detail_sql_rows['creation_time']?>">
                      </div>
                    </div>
                      </div>
              </form>
            </div>
          </div>
        </div>
          <?php }?>
      </div>
    </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
        </div>
      </footer>
    </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>
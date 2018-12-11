<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index");
exit(); }
require('db.php');
$id= $_SESSION['id'];

$query = "SELECT name FROM `user_detail`  WHERE id='$id'";
$result= mysqli_query($con, $query);
$rows= mysqli_fetch_array($result, MYSQLI_ASSOC);

$acc_sql= "SELECT acc_no FROM account_detail where id='$id'";
$acc_result= mysqli_query($con, $acc_sql);

if(isset($_POST['btn-vehicle'])){
    $fn=$_POST['fn-vehicle'];
    $ln=$_POST['ln-vehicle'];
    $email=$_POST['email-vehicle'];
    $mn=$_POST['mn-vehicle'];
    $type=$_POST['type-vehicle'];
    
    $insert_sql=" INSERT INTO `loan_application` (`account_holder_id`, `fname`, `lname`, `email`, `mobile_no`, `type`) VALUES ('$id', '$fn', '$ln', '$email', '$mn', '$type')";
    mysqli_query($con, $insert_sql);
    echo "<script>alert('Application Received'); location.href='transfer';</script>";
}

if(isset($_POST['btn-home'])){
    $fn=$_POST['fn-home'];
    $ln=$_POST['ln-home'];
    $email=$_POST['email-home'];
    $mn=$_POST['mn-home'];
    
    $insert_sql=" INSERT INTO `loan_application` (`account_holder_id`, `fname`, `lname`, `email`, `mobile_no`, `type`) VALUES ('$id', '$fn', '$ln', '$email', '$mn', 'Home Loan')";
    mysqli_query($con, $insert_sql);
    echo "<script>alert('Application Received'); location.href='transfer';</script>";
    }


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
      <a class="navbar-brand pt-0" href="accounts">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
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
            <div class="dropdown-divider"></div>
            <a href="logout" class="dropdown-item">
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
              <a href="accounts">
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
            <a class="nav-link" href="accounts">
              <i class="ni ni-tv-2 text-primary"></i> Accounts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transfer">
              <i class="ni ni-planet text-blue"></i> Transfers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transactions">
              <i class="ni ni-pin-3 text-orange"></i> Transactions
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="transactions">
              <i class="ni ni-pin-3 text-orange"></i> Settings
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Support</h6>
        <!-- Navigation -->
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block">Accounts</a>
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
              <a href="profile" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
                </a>
              <div class="dropdown-divider"></div>
              <a href="logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-6 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-6" id="show" style="cursor:pointer">
                <div class="card card-stats mb-8 mb-xl-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-black mb-0 text-lg">Vehicle Loans</h5>
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
            <div class="col-xl-4 col-lg-6 btn-mk" id="show2" style="cursor:pointer">
                <div class="card card-stats mb-8 mb-xl-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-black mb-0 text-lg">Home Loans</h5>
                        
<!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="tba-transfer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 118 38.6" style="enable-background:new 0 0 118 38.6;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#81D4FA;}
</style>
<path class="st0" d="M20.6,39C9.2,39,0,30.3,0,19.5S9.2,0,20.6,0s20.6,8.7,20.6,19.5S32.1,39,20.6,39z M32.1,33.4
	c-0.2-0.2-0.4-0.5-0.5-0.6c-0.3-0.4-0.6-0.7-0.8-1.1c0,0-1.4-1.8-6.2-1.9c-1.7,0-3-1.2-3-2.9V26c0-0.1,0,0.1,0,0v-0.9l1-0.9
	c0.7-0.3,1.7-0.8,2.4-1.4l0.1-0.1c0.6-0.4,1.4-1,1.5-1.3V21c0.4-1.8,1-5,1-6.1c0-4.4-2.3-6.5-6.9-6.5c-4.7,0-6.9,2-6.9,6.5
	c0,1.1,0.6,4.4,1,6.1v0.4c0.1,0.3,0.8,1,1.5,1.4l0.1,0.1c0.8,0.6,1.7,1.1,2.5,1.4l1,0.9v0.9c0,0.1,0-0.1,0,0v0.8
	c0,1.7-1.2,2.9-2.9,2.9l0,0c-4.9,0.2-6.3,1.9-6.3,1.9c-0.3,0.4-0.5,0.7-0.8,1.1c-0.2,0.2-0.4,0.5-0.5,0.6c3.1,2.3,7.1,3.7,11.4,3.7
	C25,37.1,28.9,35.7,32.1,33.4z M20.6,1.9C10.3,1.9,2,9.7,2,19.5c0,5,2.3,9.5,5.8,12.7c0.3-0.6,0.7-1,1.1-1.6c0,0,1.7-2.5,7.9-2.8
	c0.6,0,1-0.4,1-1l0,0c0-0.5,0-0.8,0-0.8c0-0.1,0-0.2,0-0.4c-0.7-0.3-1.6-0.7-2.5-1.4c0,0-2.4-1.4-2.4-2.9c0,0-1-4.7-1-6.5
	c0-4.3,2-8.4,8.8-8.4c6.8,0,8.9,4.1,8.9,8.4c0,1.7-1,6.5-1,6.5c0,1.5-2.4,2.9-2.4,2.9c-1,0.6-1.8,1.1-2.5,1.4c0,0.1,0,0.2,0,0.3
	c0,0,0,0.4,0,0.8l0,0c0,0.6,0.3,1,1,1c6.3,0.3,7.9,2.8,7.9,2.8c0.4,0.6,0.8,1,1.1,1.6c3.3-3.2,5.6-7.6,5.6-12.6
	C39.3,9.7,31,1.9,20.6,1.9z"/>
<path class="st0" d="M97.3,39c-11.4,0-20.7-8.7-20.7-19.5S85.9,0,97.3,0S118,8.7,118,19.5S108.8,39,97.3,39z M108.8,33.4
	c-0.2-0.2-0.4-0.5-0.5-0.6c-0.3-0.4-0.6-0.7-0.8-1.1c0,0-1.4-1.8-6.2-1.9c-1.7,0-2.9-1.2-2.9-2.9V26c0-0.1,0,0.1,0,0v-0.9l1-0.9
	c0.7-0.3,1.7-0.8,2.4-1.4l0.1-0.1c0.6-0.4,1.4-1,1.5-1.3V21c0.4-1.8,1-5,1-6.1c0-4.4-2.3-6.5-6.9-6.5c-4.7,0-6.9,2-6.9,6.5
	c0,1.1,0.6,4.4,1,6.1v0.4c0.1,0.3,0.8,1,1.5,1.4l0.1,0.1c0.8,0.6,1.7,1.1,2.5,1.4l1,0.9v0.9c0,0.1,0-0.1,0,0v0.8
	c0,1.7-1.2,2.9-2.9,2.9l0,0c-4.9,0.2-6.3,1.9-6.3,1.9c-0.3,0.4-0.5,0.7-0.8,1.1c-0.2,0.2-0.4,0.5-0.5,0.6c3.1,2.3,7.1,3.7,11.4,3.7
	C101.7,37.1,105.6,35.7,108.8,33.4z M97.3,1.9C87,1.9,78.7,9.7,78.7,19.5c0,5,2.3,9.5,5.8,12.7c0.4-0.6,0.8-1,1.1-1.6
	c0,0,1.7-2.5,7.9-2.8c0.6,0,1-0.4,1-1l0,0c0-0.5,0-0.8,0-0.8c0-0.1,0-0.2,0-0.4c-0.7-0.3-1.6-0.7-2.5-1.4c0,0-2.4-1.4-2.4-2.9
	c0,0-1-4.7-1-6.5c0-4.3,2-8.4,8.8-8.4c6.8,0,8.8,4.1,8.8,8.4c0,1.7-1,6.5-1,6.5c0,1.5-2.4,2.9-2.4,2.9c-1,0.6-1.8,1.1-2.5,1.4
	c0,0.1,0,0.2,0,0.3c0,0,0,0.4,0,0.8l0,0c0,0.6,0.3,1,1,1c6.3,0.3,7.9,2.8,7.9,2.8c0.4,0.6,0.8,1,1.1,1.6c3.5-3.2,5.8-7.7,5.8-12.7
	C116,9.7,107.7,1.9,97.3,1.9z"/>
<path class="st0" d="M59.6,21c0.1-0.5,0.7-0.8,1.2-0.6L71,22.2c0.3,0.1,0.5,0.3,0.6,0.5s0.2,0.5,0.1,0.7l-3.3,9.3
	c-0.1,0.5-0.7,0.8-1.2,0.6c-0.5-0.1-0.9-0.6-0.7-1.1l2.6-7.1L48.3,36.5l-1-1.6L68,23.6l-7.8-1.4C59.8,22,59.5,21.4,59.6,21z"/>
<path class="st0" d="M51.8,3.8c-0.5-0.1-1.1,0.2-1.2,0.6l-3.3,9.3c-0.1,0.3,0,0.6,0.1,0.7s0.3,0.4,0.6,0.5l10.2,1.9
	c0.5,0.1,1.1-0.2,1.2-0.6c0.1-0.5-0.2-1-0.7-1.1l-7.8-1.4L71.7,2.3l-1-1.6L50,12l2.6-7.1C52.6,4.5,52.3,3.9,51.8,3.8z"/>
</svg>

                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-8 mb-xl-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-black mb-0 text-lg">Agriculture Loan</h5>
                        <img src="assets/img/icons/common/neft.svg">
                      </div>
                    </div>
                  </div> 
                  </div> 
                </div>
            </div>
            <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-black mb-0 text-lg">Gold Loan</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Page content -->
    <div class="container-fluid mt--3" id="pc">
      <div class="row">
        <div class="col-xl-8 order-xl-1" id = "vehicle" style="display:none;">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Vehicle Loan</h3>
                </div>
              </div>
            </div>
            <div class="card-body" >
              <form method="post" action="loan-form">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">First Name</label>
                        <input id="fn-vehicle" name="fn-vehicle" class="form-control form-control-alternative" placeholder="Enter First Name" type="text" required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Last Name</label>
                        <input id="ln-vehicle" name="ln-vehicle" class="form-control form-control-alternative" placeholder="Enter Last Name" type="text" required>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Email</label>
                        <input id="email-vehicle" name="email-vehicle" class="form-control form-control-alternative" placeholder="Enter Email" type="text" required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Mobile No.</label>
                        <input id="mn-vehicle" name="mn-vehicle" class="form-control form-control-alternative" placeholder="Enter Mobile NO." type="text" required>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Type</label>
                        <select class="form-control text-black" name="type-vehicle" id="df-tbu">
                          <option value="Two Wheeler Loan">Two Wheeler Loan</option>
                          <option value="Car Loan">Car Loan</option>
                          <option value="Agricultural Vehicle Loan">Agricultural vehicle Loan</option>
                          </select>
                      </div>
                  </div>
                </div>
                  </div>
                  <div class="pl-lg-4" style="align-content: center">
            <button class="btn btn-primary" id="btn-vehicle" name="btn-vehicle" type="submit" value="1">Submit Application</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1" id = "home" style="display:none;">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Home Loan</h3>
                </div>
              </div>
            </div>
            <div class="card-body" >
              <form method="post" action="loan-form">
                  <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">First Name</label>
                        <input id="fn-home" name="fn-home" class="form-control form-control-alternative" placeholder="Enter First Name" type="text" required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Last Name</label>
                        <input id="ln-home" name="ln-home" class="form-control form-control-alternative" placeholder="Enter Last Name" type="text" required>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Email</label>
                        <input id="email-home" name="email-home" class="form-control form-control-alternative" placeholder="Enter Email" type="text" required>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Mobile No.</label>
                        <input id="mn-home" name="mn-home" class="form-control form-control-alternative" placeholder="Enter Mobile No." type="text" required>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="pl-lg-4" style="align-content: center">
            <button class="btn btn-primary" id="btn-home" name="btn-home" type="submit" value="1">Submit Application</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
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
<script>
   $('#show').click(function(){
                    $("#vehicle").toggle();
                    $("#home").hide();
                    
                    });
    $('#show2').click(function(){
                    $("#home").toggle();
                    $("#vehicle").hide();

                    });
    </script>
</body>

</html>
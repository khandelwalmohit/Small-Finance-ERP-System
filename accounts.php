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

$acc_sql= "SELECT * FROM account_detail where id='$id'";
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
        <li class="nav-item">
            <a class="nav-link" href="loan-form">
              <i class="ni ni-pin-3 text-orange"></i> Loan Form
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Support</h6>
          <div class="nav-item" id="chatlink">Chat with Support</div>
          <div class="chatbot nav-item" id="chat"><div id="output"></div>
      
<div id="container">
    <input type="text" id="input" value="">
</div>
          </div>
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
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
      </div>
      </div>
    <!-- Page content -->
 <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Your Accounts</h3>
            </div>
            <form action="view-account" method="get">
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                  <thead style="border: none;" class="text-black"><tr>
                    <th style="font-size: .8rem">Savings Account</th><th></th><th></th><th></th><th></th><th></th>
                    </tr>
                    </thead>
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Account Number</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Type</th>
                    <th scope="col">Last Transaction Date</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    mysqli_data_seek($acc_result, 0);
                    while($acc_row = mysqli_fetch_assoc($acc_result)){
                            if($acc_row['type']=="Savings")
                            {
                ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                            <span class="mb-0 text-sm"><button class="btn-transparent" id="viewaccbtn" name="viewaccbtn" type="submit" value="<?php echo $acc_row['acc_no']?>"><?php echo $acc_row['acc_no']?></button></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $acc_row['balance']?>
                    </td>
                    <td>
                        <?php echo $acc_row['type']?>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mb-0 text-sm"><?php 
                    $accno=$acc_row['acc_no'];
                    $latest_transaction_sql="SELECT time, to_acc, from_acc FROM `transactions` WHERE $accno IN (to_acc, from_acc) ORDER BY time DESC";
                            $latest_result= mysqli_query($con, $latest_transaction_sql);
                                $latest_row = mysqli_fetch_assoc($latest_result);
                            echo $latest_row['time'];
                            ?></span>
                      </div>
                    </td>
                    <td class="text-right">
                        <span class="mb-0 text-sm">Active</span>
                    </td>
                  </tr>
                <?php }}?>
                    <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                </tbody>
                  
                <thead style="border: none;" class="text-black"><tr>
                    <th style="font-size: .8rem">Current Account</th><th></th><th></th><th></th><th></th><th></th>
                    </tr>
                    </thead>
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Account Number</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Type</th>
                    <th scope="col">Last Transaction Date</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                  <tbody>
                      <?php 
                    mysqli_data_seek($acc_result, 0);
                    while($acc_row = mysqli_fetch_assoc($acc_result)){
                            if($acc_row['type']=="Current")
                            {
                ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                        <span class="mb-0 text-sm"><button class="btn-transparent" id="viewaccbtn" name="viewaccbtn" type="submit" value="<?php echo $acc_row['acc_no']?>"><?php echo $acc_row['acc_no']?></button></span>
                          </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $acc_row['balance']?>
                    </td>
                    <td>
                        <?php echo $acc_row['type']?>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mb-0 text-sm"><?php 
                    $accno=$acc_row['acc_no'];
                    $latest_transaction_sql="SELECT time, to_acc, from_acc FROM `transactions` WHERE $accno IN (to_acc, from_acc) ORDER BY time DESC";
                            $latest_result= mysqli_query($con, $latest_transaction_sql);
                                $latest_row = mysqli_fetch_assoc($latest_result);
                            echo $latest_row['time'];
                            ?></span>
                      </div>
                    </td>
                  </tr>
                <?php }}?>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>                  
                  </tbody>
                  <thead style="border: none;" class="text-black"><tr>
                    <th style="font-size: .8rem">Loan Account</th><th></th><th></th><th></th><th></th><th></th>
                    </tr>
                    </thead>
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Account Number</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Type</th>
                    <th scope="col">Last Transaction Date</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                  <tbody>
                      <?php 
                    mysqli_data_seek($acc_result, 0);
                    while($acc_row = mysqli_fetch_assoc($acc_result)){
                            if($acc_row['type']=="Loan")
                            {
                ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm"><button class="btn-transparent" id="viewaccbtn" name="viewaccbtn" type="submit" value="<?php echo $acc_row['acc_no']?>"><?php echo $acc_row['acc_no']?></button></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $acc_row['balance']?>
                    </td>
                    <td>
                        <?php echo $acc_row['type']?>
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php }}?>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                  </tbody>
              </table>
            </div>
              </form>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
    </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
<script>
$('#chatlink').click(function(){
                    $("#chat").show();
                    }); 
$(".main-content").click(function(){
                    $("#chat").hide();});
</script>
<script>
var questionNum = 0;													// keep count of question, used for IF condition.
var question = '<h1>How May I help you</h1>';				  // first question

var output = document.getElementById('output');				// store id="output" in output variable
output.innerHTML = question;													// ouput first question

function bot() { 
    var input = document.getElementById("input").value;
    console.log(input);

    if (questionNum == 0) {
    output.innerHTML = '<h1>hello ' + input + '</h1>';// output response
    document.getElementById("input").value = "";   		// clear text box
    question = '<h1>how old are you?</h1>';			    	// load next question		
    setTimeout(timedQuestion, 2000);									// output next question after 2sec delay
    }

    else if (questionNum == 1) {
    output.innerHTML = '<h1>That means you were born in ' + (2016 - input) + '</h1>';
    document.getElementById("input").value = "";   
    question = '<h1>where are you from?</h1>';					      	
    setTimeout(timedQuestion, 2000);
    }   
}

function timedQuestion() {
    output.innerHTML = question;
}

//push enter key (using jquery), to run bot function.
$(document).keypress(function(e) {
  if (e.which == 13) {
    bot();																// run bot function when enter key pressed
    questionNum++;															// increase questionNum count by 1
  }
});
    
</script>
</body>

</html>
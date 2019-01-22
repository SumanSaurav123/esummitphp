<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>E-Summit 2K19- Dashboard</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel='stylesheet' type='text/css'>
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" rel="stylesheet">
  <link href="">
  <style type="text/css">
  	.dropdown-dash{
  		display: none;
  	}
  </style>
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
        <a class="navbar-brand pt-0" href="../index.html">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
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
                  <img alt="Image placeholder" src="../assets/img/theme/team-1-800x800.jpg">
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="./pages/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="./pages/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
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
                <a href="../index.html">
                  <img src="../assets/img/brand/blue.png">
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
          
          <!-- Navigation -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="../index.html">
                    <i class="ni ni-shop text-orange"></i> Dashboard
                  </a>
                </li>
            <li class="nav-item" id="btn_dropdown" style="cursor: pointer;">
              <a class="nav-link">
                <i class="ni ni-tv-2 text-primary"></i> Itinerary &nbsp <i class="ni ni-bold-down" style="cursor: pointer;" ></i>
              </a>
                 <ul class="dropdown-dash" style="display: none;">
                    <li class="nav-item" style="list-style: none;">
                      <a class="nav-link" href="../pages/timeline.html">
                        <i class="ni ni-time-alarm text-primary"></i>Itinerary Day 1
                    </a>
                  </li>
  
                  <li class="nav-item" style="list-style: none;">
                      <a class="nav-link" href="../pages/timeline.html">
                        <i class="ni ni-time-alarm text-primary"></i>Itinerary Day 2
                    </a>
                  </li>
  
                  <li class="nav-item" style="list-style: none;">
                      <a class="nav-link" href="../pages/timeline.html">
                        <i class="ni ni-time-alarm text-primary"></i>Itinerary Day 3
                    </a>
                  </li>
                 </ul>
            </li>
           
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>Profile
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../pages/payments(1).html">
                <i class="ni ni-credit-card text-red"></i> Pay Now
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/selectEvents.html">
                <i class="ni ni-tag text-info"></i> Choose Events
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/register.html">
                <i class="ni ni-mobile-button text-pink"></i> Contact Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pages/register.html">
                <i class="ni ni-settings text-success"></i> Settings
              </a>
            </li>
          </ul>
                 <!-- Divider -->
                 <hr class="my-3">
                 <!-- Heading -->
                 <h6 class="navbar-heading text-muted">Navigate</h6>
                 <!-- Navigation -->
                 <ul class="navbar-nav mb-md-3">
                   <li class="nav-item">
                     <a class="nav-link" href="#">
                       <i class="ni ni-spaceship"></i> Esummit home page
                     </a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://ecell.org.in/">
                       <i class="ni ni-support-16"></i> KIIT E-Cell
                     </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link" href="https://ecell.org.in/">
                      <i class="ni ni-support-16"></i> About KIIT and KISS
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
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Payment</a>
          <!-- Form -->
          
          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4-800x800.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="../pages/profile.html" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="../pages/profile.html" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <!-- <a href="./pages/profile.html" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="./pages/profile.html" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span> -->
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
            <div class="col-xl-12 col-lg-12" >
              <span style="color: #fff;">Completed: 33.3%</span>
            	<div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 33.3%;"></div>
                            
                </div>

          <div class="row" style="margin-bottom: 30px;">
  				<div class="col-sm-4" style="text-align: center; color:#fff">Profile Completion</div>
  				<div class="col-sm-4" style="text-align: center; color:#fff">Payment</div>
 				 <div class="col-sm-4" style="text-align: center; color:#fff">Choose Events</div>
				</div>
            </div>


            <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Task : 1/3</h5>
                      <span class="h2 font-weight-bold mb-0">Profile Status</span>
                    </div>
                   
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                   
                    <span class="text-nowrap"><button type="button" class="btn btn-success"><i class="ni ni-check-bold"></i>Profile Completed</button></span>
                  </p>
                </div>
              </div>
            </div>


             <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Task : 2/3</h5>
                      <span class="h2 font-weight-bold mb-0">Payment Status</span>
                    </div>
                   
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                   
                    <span class="text-nowrap"><button type="button" class="btn btn-danger"><i class="ni ni-fat-remove"></i>Complete Payment</button></span>
                  </p>
                </div>
              </div>
            </div>


             <div class="col-xl-4 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Task : 3/3</h5>
                      <span class="h2 font-weight-bold mb-0">Events not Chosen</span>
                    </div>
                   
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                   
                    <span class="text-nowrap"><button type="button" class="btn btn-danger"><i class="ni ni-fat-remove"></i>Choose Events</button></span>
                  </p>
                </div>
              </div>
            </div>
            
           
          </div>
        </div>
      </div>
    </div>




    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">

        <div class="col-xl-4 col-lg-6">
             
            </div>
       
        <div class="col-xl-4">
          <div class="card" >
            <i class="fas fa-money-check text-primary" style="font-size: 150px;text-align: center;padding: 20px;"></i>
            <div class="card-body">
              <h5 class="card-title">Your Bill</h5>
              <p class="card-text"><ul>
              <li>Fees : <i class="fas fa-rupee-sign"></i> ...</li>
              <li>Bank Charges : <i class="fas fa-rupee-sign"></i> 8%</li>
              ---------------------------<br>
              Total : <i class="fas fa-rupee-sign"></i> 850
            </ul></p>
              <a href="#" class="btn btn-success d-lg-block">Pay Now</a>
            </div>
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
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../assets/js/sweetalert.js"></script>
  <script type="text/javascript" src="../assets/js/qrcode.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.qrcode.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.qrcode.min.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){

  		var i=0;
  		$('#btn_dropdown').click(function(){
  			if(i==0){
  			$('.dropdown-dash').show();
  			i++;	
  			}
  			else{
  			$('.dropdown-dash').hide();
  			i=0;
  			}
  			
  	});

  	});

    displayqrcode('somesh');

    function displayqrcode(email){
    // for displaying qr code
    jQuery('#qrcode').qrcode({
    text  : email
  });

  }


  	
  	
  	
</script>
</body>

</html>
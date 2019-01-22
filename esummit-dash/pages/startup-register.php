<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>KIIT ESUMMIT-19 Startup Registration Page</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.html">
          <img src="../assets/img/brand/white.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../index.html">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Dashboard</span>
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="../pages/profile.html">
                <i class="ni ni-single-02"></i>
                <span class="nav-link-inner--text">Profile</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-light">Register your startup over here.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Enter your startup details.</small>
              </div>
              <form role="form">
                <label class="form-control-label">Basic Details *</label>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    
                    <input class="form-control" placeholder="Startup Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                    
                    <select class="form-control">
                      <option value="0">--Select your sector--</option>
                      <option value="1">Information Technology</option>
                      <option value="2">E-Commerce</option>
                      <option value="3">Enterprises</option>
                      <option value="3">Media</option>
                      <option value="4">Food</option>
                      <option value="5">Finance</option>
                      <option value="6">Health Care</option>
                      <option value="7">Education</option>
                      <option value="8">Health and Wellness</option>
                      <option value="9">Platforms</option>
                      <option value="10">Retail</option>
                      <option value="11">Life Sciences</option>
                      <option value="12">Fashion</option>
                      <option value="13">Design</option>
                      <option value="14">Real Estate</option>
                      <option value="15">Ideation</option>
                      <option value="16">Travel and Tourism</option>
                      <option value="17">Logistics</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    
                    <input class="form-control" placeholder="Website" type="text">
                  </div>
                </div>
                <div class="form-group">
                    
                    <select class="form-control">
                      <option value="0">--Select your current status--</option>
                      <option value="1">Ideation</option>
                      <option value="2">Initial prototype</option>
                      <option value="3">Registered Startup</option>
                    </select>
                </div>
                <hr class="my-4">
                <label class="form-control-label">Contact Details *</label>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Address" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative"> 
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div> 
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Mobile number" type="text">
                  </div>
                </div>
                <label class="form-control-label">Social links</label>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Facebook" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Twitter" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Instagram" type="text">
                  </div>
                </div>
                <label class="form-control-label">Founder's Info *</label>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Full Name" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="College Name" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">  
                    <input class="form-control" placeholder="Branch" type="text">
                  </div>
                </div>
                
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Register</button>
                </div>


              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">KIIT E-Cell</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://ecell.org.in/" class="nav-link" target="_blank">Our page</a>
            </li>
            <li class="nav-item">
              <a href="https://ecell.org.in/about" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://ecell.org.in/contact" class="nav-link" target="_blank">Contact Us</a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.0.0"></script>
</body>

</html>

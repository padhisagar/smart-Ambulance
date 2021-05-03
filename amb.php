<?php
    include_once 'conn.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $id = $_SESSION['id'];
        $hosid = $_SESSION['hosid'];
        $hosname = $_SESSION['hosiname'];
        $address = $_SESSION['address'];
        include_once 'conn.php';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart Ambulance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Picture1.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <br><br><br>
        <h1 class="text-light"><a href="hosp.php"><?php echo $name ;?></a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Update Accident Record</span></a></li>
          <li><a href="logout.php"><i class="bx bx-server"></i>Logout</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome <?php echo $name; ?></h1>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Profile</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Hospital Id:</strong><?php echo $hosid ; ?></li>
                  <br><br>
                  <li><i class="icofont-rounded-right"></i> <strong>Name:</strong><?php echo $name ; ?></li>
                  <br><br>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong><?php echo $email; ?></li>
                  <br><br>
                  <li><i class="icofont-rounded-right"></i> <strong>Address:</strong><?php echo $address; ?></li>
                  <br><br>
                  <li><i class="icofont-rounded-right"></i> <strong>Hospital Name:</strong><?php echo $hosname; ?></li>
                </ul>
            </div>
    </div>
    </section><!-- End About Section -->

    
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Update Accident Record</h2>
        </div>
         
        <div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
            <center> <h5 style="font-family: Noto Sans;"> Accident Record </h5></center>
                            <br>
              <form method="post" action="update_accdetail.php" enctype="multipart/form-data" target="_self">
                <div class="form-group">
									<label>Enter Vehicle No:</label>
									<input type="text" name="vhno" class="form-control" required />
                </div>
                <div class="form-group">
									<label>Hospital Id:</label>
									<input type="text" name="hosid" value="<?php echo $hosid ?>" class="form-control" required />
								</div>
								<div class="form-group">
									<label>Upload Accident Image:</label>
									<input type="file" name="uai" class="form-control" required />
                </div>
								<div class="form-group">
									<label>Upload Patient Image:</label>
									<input type="file" name="upi" class="form-control" required />
                </div>
                                
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
        
                
          
      </div>
    
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Smart Ambulance</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/jquery/jquery.min.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets1/vendor/counterup/counterup.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/venobox/venobox.min.js"></script>
  <script src="assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets1/vendor/typed.js/typed.min.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>

<?php
    include_once 'conn.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:loginhosp.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $id = $_SESSION['id'];
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
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Patient Detail</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i>Accident Notification</a></li>
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
      <h1>Welcome To <?php echo $name; ?></h1>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Hosiptal Profile</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Hosiptal id:</strong><?php echo $id ; ?></li>
                  <br><br>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong><?php echo $email ; ?></li>
                  <br><br>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong><?php echo $address; ?></li>
                  <br><br>
                </ul>
            </div>
    </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Patient Details</h2>
        </div>

        <div class="row">
            <div class="col-12 col-sm-9">
                <h2> Accident Patient &amp; Record</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Vehicle No</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Image</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <?php
                      $p=1;
                      $deta = "SELECT `id`, `hid`, `vehicle_no`, `date`, `time`, `image`, `image1` FROM `accident_record` WHERE hid=$id"; 
                      $detailse = mysqli_query($conn,$deta);
                      while($thy = mysqli_fetch_array($detailse)){
                        $recid = $thy['id'];
                        $vehacc = $thy['vehicle_no'];
                        $cdate = $thy['date'];
                        $ctime = $thy['time'];
                        $ipath = $thy['image'];
                        $ipath1 = $thy['image1'];   
                  ?>
                        <tbody>
                            <tr>
                                <td><?php echo $p ; ?></td>
                                <td><?php echo $vehacc ; ?> </td>
                                <td><?php echo $cdate ; ?></td>
                                <td><?php echo $ctime ; ?></td>
                                <td><img src="<?php echo $ipath ; ?>" height="100px" width="100px"></td>
                                <td><img src="<?php echo $ipath1 ; ?>" height="100px" width="100px"></td>
                            </tr>
                        </tbody>
                        <?php $p++ ?>
                        <?php } ?>
                    </table>
                </div>
          
      </div>
    
    </section><!-- End Resume Section -->
    <br><br><br>
    <br><br>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Accident Notification</h2>
        </div>
        <div class="row">
        <div class="col-12 col-sm-9">
          <div class="table-responsive">
              <table class="table table-striped">
                  <thead class="thead-dark">
                      <tr>
                          <th>No</th>
                          <th>Hosiptal Id</th>
                          <th>Longitude</th>
                          <th>Latitude</th>
                          <th>Distance</th>
                          <th>Response</th>
                      </tr>
                  </thead>
                  <?php
                  $c=1;
                  $det = "SELECT `id`, `hosiptal_id`, `longitude`, `latit`, `distance`,'updatestatus' FROM `accident_detail` 
                  WHERE hosiptal_id = $id and status='n'"; 
                  $detail = mysqli_query($conn,$det);
                  while($dtr = mysqli_fetch_array($detail)){
                    $hid = $dtr['hosiptal_id'];
                    $l = $dtr['longitude'];
                    $la = $dtr['latit'];
                    $di=$dtr['distance'];
                    $id = $dtr['id'];
                  ?>
                  <tbody>
                    <tr>
                          <td><?php echo $c;?></td>
                          <td><?php echo $hid;?></td>
                          <td><?php echo $l;?></td>
                          <td><?php echo $la;?></td>
                          <td><?php echo $di;?></td>
                          <td>
                            <form method="GET" action="hosp.php?id=$id">
                              <input type="submit" value="notify" name="accept">
                            </form>
                          </td>
                          
                      </tr>
                  </tbody>
                  <?php $c++; ?>
                  <?php } ?>
              </table>
          </div>

      </div>
    </div>
    </div>
    </section><!-- End Portfolio Section -->

    

    
    
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

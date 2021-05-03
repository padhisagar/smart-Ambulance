<?php
include('conn.php');
if(isset($_POST['submit'])){
    $names = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $Latitude = $_POST['Latitude'];
    $Longitude = $_POST['Longitude'];
    $row = "INSERT INTO `hosiptal_det`(`hosiptal_name`, `hosi_email`, `password`, `hosiptal_add`, `contact`, `latitude`, `longi`) VALUES ('$names','$email','$password','$address','$contact','$Latitude','$Longitude')";
    $str = mysqli_query($conn,$row);
    $a = "INSERT INTO `accident location`(`lon`, `lat`, `status`) VALUES ('$Latitude','$Longitude','y')";
    $d = mysqli_query($conn,$a);

    }

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart Ambulance</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Picture1.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script type="text/javascript"> 
		 function getLocationConstant()
		{
		    if(navigator.geolocation)
		    {
		        navigator.geolocation.getCurrentPosition(onGeoSuccess,onGeoError);  
		    } else {
		        alert("Your browser or device doesn't support Geolocation");
		    }
		}

		// If we have a successful location update
		function onGeoSuccess(event)
		{
		    document.getElementById("Latitude").value =  event.coords.latitude; 
		    document.getElementById("Longitude").value = event.coords.longitude;

		}

		// If something has gone wrong with the geolocation request
		function onGeoError(event)
		{
		    alert("Error code " + event.code + ". " + event.message);
		}
	</script>

	</head>

	<body>
	    <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><img src="Picture1.png" alt="" class="img-fluid"></a><a href="index.html">SMART VEHICLE<span>.</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li class="drop-down"><a href="">LogIn</a>
            <ul>
              <li><a href="loginhosp.php">Hospital</a></li>
              <li><a href="login.php">Ambulance</a></li>
              <li class="#"><a href="loginuser.php">User</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
                            <center> <h5 style="font-family: Noto Sans;">Register to </h5></center>
                            <br>
							<form method="post" action="#" enctype="multipart/form-data">
                                <div class="form-group">
									<label>Enter Hosiptal Name:</label>
									<input type="text" name="name" class="form-control"/>
								</div>
								<div class="form-group">
									<label>Enter Your Email Id:</label>
									<input type="email" name="email" class="form-control"/>
								</div>
								<div class="form-group">
									<label>Enter Your Password:</label>
									<input type="password" name="password" class="form-control" />
                                </div>
								<div class="form-group">
									<label>Enter Hosiptal Address:</label>
									<input type="text" name="address" class="form-control"/>
								</div>
                               <div class="form-group">
									<label>Enter Your Contact No:</label>
									<input type="text" name="contact" class="form-control"/>
								</div> 
                              <div class="form-group">
									<label>Enter Your location:</label>
									<input type="button" value="Get Location" onclick="getLocationConstant()"/><br>
        Latitude: <input type="text" id="Latitude" name="Latitude" value="" class="form-control"> Longitude: <input type="text" id="Longitude" name="Longitude" value="" class="form-control">
								</div> 
                              
								  
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="submit">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account! </span> <a href="login.php">Login </a> Here..
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer">

    <div class="footer-top">

      <div class="container" data-aos="fade-up">

        
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Smart Ambulance</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

	</body>
</html>
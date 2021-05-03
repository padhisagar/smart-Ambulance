include('conn.php');
if(isset($_POST['submit'])){
    $Latitude = $_POST['Latitude'];
    $Longitude = $_POST['Longitude'];
    $a = "INSERT INTO `accident location`(`lon`, `lat`, `status`) VALUES ('$Latitude','$Longitude','n')";
    $d = mysqli_query($conn,$a);
    }
?>
<html>
    <head>
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
        <form method="post" action="#">
            <input type="text" id="Latitude" name="Latitude" value=""> 
            <input type="text" id="Longitude" name="Longitude" value="">
        </form>
    </body>
</html>
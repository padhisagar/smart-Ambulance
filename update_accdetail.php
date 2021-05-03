<?php
include('conn.php');
if(isset($_POST['submit'])){
    $vehicleno = $_POST['vhno'];
    $files = $_FILES['upi'];
    $files1 = $_FILES['uai'];
    $hosid = $_POST['hosid'];
    
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $a = $files1['name'];
    $b = $files1['error'];
    $c = $files1['tmp_name'];

    $fileext = explode('.',$filename);
    $dext = explode('.',$a);

    $filecheck = strtolower(end($fileext));
    $echeck = strtolower(end($dext));

    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
        if(in_array($echeck,$fileextstored)){
            $destfile = 'upload/'.$filename;
            $destinationfile = 'upload/'.$a;
            move_uploaded_file($filetmp,$destfile);
            move_uploaded_file($c,$destinationfile);
            $sa = "INSERT INTO `accident_record`(`hid`, `vehicle_no`, `date`, `time`, `image`, `image1`)VALUES ('$hosid','$vehicleno',NOW(),NOW(),'$destinationfile','$destfile')";
            $str = mysqli_query($conn,$sa);
            if($str){
                header('location: amb.php');
            }


        }
    }


    }
?>

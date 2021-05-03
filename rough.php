<?php
include('conn.php');
$imp = "SELECT * FROM `accident location` WHERE status='y'";
$imc = mysqli_query($conn,$imp);
while($sta = mysqli_fetch_array($imc)){
    $s = $sta['status'];
    if($s=='y'){
        $command = escapeshellcmd('trail.py');
        $output = shell_exec($command);
    }
    else{
        echo 'no';
    }
}




?>
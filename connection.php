<?php


// https://gentle-depths-81662.herokuapp.com/

/*******************localhost ***********/
// $username="root";
// $password="";
// $server='localhost';
// $database="onlineappointment";

// ******************* cloudClustor ********
// $servername = "mysql-56168-0.cloudclusters.net";
// $username = "admin";
// $password = "bbCxAn2R";
// $dbname   = "onlinedrproject";
// $dbServerPort = "19848";


// ********************* clever-cloud **************
$servername = "b4nhef2kwb2pmqd6cusf-mysql.services.clever-cloud.com";
$username = "ueaogiw4c9crv2ps";
$password = "CK3Gun2H2qVGX1BTOgMr";
$dbname   = "b4nhef2kwb2pmqd6cusf";
$dbServerPort = "3306";


// $servername = "brusz7uyfhm1d1f1y3jd-mysql.services.clever-cloud.com";
// $username = "ubklwlcpsetnbeg3";
// $password = "Oinu4pzjtcXrsaClCKr0";
// $dbname   = "brusz7uyfhm1d1f1y3jd";
// $dbServerPort = "3306";


/////////////////* connection on cloudclever *////////////////
$con = new mysqli($servername, $username, $password, $dbname, $dbServerPort,);

/////////////////* connection on localhost *////////////////
// $con=mysqli_connect($server,$username,$password,$database);
// $db = mysqli_select_db($con,$database);

if($con){
    // echo "connection successfull";
    ?>
     <script>
        //  alert("connection successful !!");
     </script>
   
    <?php
}else{
    // die("no connection ".mysqli_connect_error());
    
    ?>
    <script>
        alert("connection unsuccessful !!");
    </script>
  
   <?php
//    echo "Error: connection unsuccessfull !!";
}

?>



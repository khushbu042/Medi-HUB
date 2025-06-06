<?php

    include '../connection.php';
    
    $appointment_id = $_POST['appmt_id'];
    $query = "update appointment_data set status = 'true' where appointment_id = '$appointment_id'";
    
    $res = mysqli_query($con,$query);

?>
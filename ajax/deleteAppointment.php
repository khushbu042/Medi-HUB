

<?php
       include '../connection.php';
       
       $appmt_id = $_POST['appmt_id'];

       $query = "delete from appointment_data where appointment_id = '$appmt_id'";
       $res = mysqli_query($con,$query);
?>
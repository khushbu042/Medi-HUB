<?php
    
    session_start();
    include '../connection.php';

    $link = $_POST['link'];
    $dr_id = $_POST['dr_id'];

    $query = "update doctor_data set meeting_link='$link' where doctor_id = $dr_id";

     mysqli_query($con,$query);
    
     $_SESSION['meeting_link']=$link;
     ?>
     <a href="<?php echo $link ?>" target="_blank"><?php echo $link ?></a>
      
      
    <?php
    
    


?>



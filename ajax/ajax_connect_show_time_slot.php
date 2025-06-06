<?php

   include '../connection.php';

   $dr_id = $_POST['doctor_id'];
   $tag_name = $_POST['tag_name'];
   $appoint_date = $_POST['appointment_date'];
   $query = "select * from time_slot_data where slot_id NOT IN ( SELECT slot_id from appointment_data where doctor_id='$dr_id' AND tag_name='$tag_name' AND appointment_date='$appoint_date') order by slot_id";
   
   
   $fire_query = mysqli_query($con,$query);
    
    
    // if($fire_query){
    //     echo "success!!!";
    // }
    // else{
    //     echo "something went wrong";
    // }
     
   $no_of_selected_rows = mysqli_num_rows($fire_query);   // it will returns the number rows are selected by $query
   if($no_of_selected_rows){
    ?>
     <option class="hidden" value="" selected disabled>Select Time-Slot</option>

   <?php
    while($rows = mysqli_fetch_array($fire_query)){
       ?>
        <option value="<?php echo $rows['slot_id']; ?>"><?php echo $rows['slot_time'];  ?></option>
       <?php
        }
    }
    else{
        ?>
         <option class="hidden" value="" selected disabled >Time-sloats are Not Available</option>
        <?php
    }
?>
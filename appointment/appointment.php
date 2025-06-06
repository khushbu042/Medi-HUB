<?php
session_start();
include '../connection.php';
if (isset($_SESSION['first_name'])) {
    if (isset($_POST['book_appointment'])) {
        $first__name = $_POST['first__name'];
        $last__name = $_POST['last__name'];
        $first__name = $_POST['first__name'];
        $user__age = $_POST['user__age'];
        $contact__number = $_POST['contact__number'];
        $email__add = $_POST['email__add'];
        $appointment__mode = $_POST['appointment__mode'];
        $gender = $_POST['gender'];
        $tag__name = $_POST['tag__name'];
        $dr__id = $_POST['dr__id'];
        $appointment__date = $_POST['appointment__date'];
        $slot__id = $_POST['slot__id'];
        $symptom__description = $_POST['symptom__description'];
        // some data fatch from tables for fill apointment table  
        // fatching slot_time from table of 
        $slot_time_select_query = mysqli_query($con, "select slot_time from time_slot_data where slot_id='$slot__id'");
        $fatch = mysqli_fetch_assoc($slot_time_select_query);
        $slot_time = $fatch['slot_time'];

       

        // storing data into appointment table
        $queryy = "insert into appointment_data (first_name,last_name,age,gender,email,contact,doctor_id,tag_name,slot_time,slot_id,symptoms,appointment_date,appointment_mode,status)
                 values('$first__name','$last__name','$user__age','$gender','$email__add','$contact__number','$dr__id','$tag__name','$slot_time','$slot__id','$symptom__description','$appointment__date','$appointment__mode','true')";
        $insert_into_appoint = mysqli_query($con, $queryy);
        if ($insert_into_appoint) {
        ?>
            <Script>
                alert("Appointment Booked successfully !!");
                location.replace("../index.php");
            </Script>
        <?php
        } else {
        ?>
            <Script>
                alert("Something gone wrong, please try again !!");
            </Script>
        <?php
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Appointment</title>
    <link rel="stylesheet" href="../css/appointment.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>
    <script>
        $(document).ready(function() {
            $('#date_form').load("click", function() {
                for (var i = 1; i < 10; i++) {
                    var d = new Date();
                    d.setDate(d.getDate() + i);
                    var date_=d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
                    var create_option_element = document.createElement("option");
                    var textNode = document.createTextNode(d.toDateString());
                    create_option_element.appendChild(textNode);

                    document.getElementById("date_form").appendChild(create_option_element).value=date_;

                }
                form_self(); // onload the self form will be filled autometically
            })
        });

        function form_self() {

            document.getElementById('f_n').value = "<?php echo $_SESSION['first_name']; ?>"
            document.getElementById('l_n').value = "<?php echo $_SESSION['last_name']; ?>"
            document.getElementById('u_email').value = "<?php echo $_SESSION['email_id']; ?>"
            document.getElementById('u_contact').value = "<?php echo $_SESSION['contact']; ?>"
            document.getElementById('u_age').value = "<?php echo $_SESSION['age'] . " " . "year"; ?>"
            document.getElementById('from_heading').innerHTML = "Book An Appointment For Yourself";
  
        }

        function form_others() {

            document.getElementById('f_n').value = "";
            document.getElementById('l_n').value = "";
            document.getElementById('u_email').value = "";
            document.getElementById('u_contact').value = "";
            document.getElementById('u_age').value = "";
            document.getElementById('from_heading').innerHTML= "Book An Appointment For Someone Else";


        }

        function clrear_selected_doctor() {
            document.getElementById('get_doctor_list').value = "";
            // while(parent.firstChild){
            //     parent.removeChild(parent.firstChild);
            // }
        }
    </script>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Make an appointment</h3>
                <p>Please enter your valid details</p>
                <!-- <input type="submit" name="" value="My Profile" /><a href="C:\xampp\htdocs\drPROJECT\user_Profile\user_profile.php" ></input><br /> -->
                <a href="..\user_Profile\user_profile.php" ><input type="submit" name="" value="My Profile" /></a>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="" onclick="form_self()" role="tab" aria-controls="home" aria-selected="true">For Yourself</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="" onclick="form_others()" role="tab" aria-controls="profile" aria-selected="false">For Others</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading" id="from_heading">Book An Appointment For Yourself</h3>
                        <form action="" method="POST">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="f_n" name="first__name" placeholder="First Name *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="l_n" name="last__name" placeholder="Last Name *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="u_age" name="user__age" placeholder="Age *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" minlength="10" maxlength="10" name="contact__number" class="form-control" id="u_contact" placeholder="Contact Number *" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email__add" placeholder="Your Email *" id="u_email" required />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="appointment__mode" required>
                                            <option class="hidden" value="" selected disabled>Select Appointment Mode</option>
                                            <option value="Offline">Offline Mode</option>
                                            <option value="Online">Online Consultation</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="male" required>
                                                <span> Male </span>
                                            </label>
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female" required>
                                                <span>Female </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" id="tag_name_field" name="tag__name" onchange="show_doctors_name(this.value)" required>
                                            <option class="hidden" value="" selected disabled>Select Specialist</option>
                                            <?php
                                            $query1 = "select * from tag_table";
                                            $res1 = mysqli_query($con, $query1);
                                            while ($rows = mysqli_fetch_array($res1)) {
                                            ?>
                                                <option value="<?php echo $rows['tag_name']; ?>"><?php echo $rows['tag_name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="date_form" onchange="clrear_selected_doctor()" name="appointment__date" required>
                                            <option class="hidden" value="" selected disabled>Select Appointment Date</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="get_doctor_list" name="dr__id" onchange="show_time_slot(this.value,document.getElementById('tag_name_field').value,document.getElementById('date_form').value)" required>
                                            <option class="hidden" value="" selected disabled>Select Doctor</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" id="time_slot" name="slot__id" required>
                                            <option class="hidden" selected disabled>Select Time-Slot</option>
                                        </select>
                                    </div>
 
                                    <div class="form-group">
                                        <textarea class="form-control" name="symptom__description" placeholder="Describe Your Symptoms * " style="resize: none;" minlength="3" maxlength="300" rows="5" cols="10" value="" required></textarea>
                                    </div>
                                    <div class="btn__div">
                                        <input type="submit" class="btnRegister" name="book_appointment" value="SUBMIT" />
                                    </div>
                                    <div class="btn__div">
                                        <input type="reset" class="btnRegister" name="book_appointment" value="CLEAR" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function show_doctors_name(tag_value) {
            $.ajax({
                url: '../ajax/ajax_connect_show_dr_name.php',
                type: 'POST',
                data: {
                    datapost: tag_value
                },
                success: function(result) {
                    $('#get_doctor_list').html(result);
                }
            });
        }

        function show_time_slot(dr__id, tag__name, appoint__date) {
            // alert( dr__id+" "+tag__name+" "+" "+appoint__date);
            $.ajax({
                url: '../ajax/ajax_connect_show_time_slot.php',
                type: 'POST',
                data: {
                    doctor_id: dr__id,
                    tag_name: tag__name,
                    appointment_date: appoint__date
                },
                success: function(result) {
                    $('#time_slot').html(result);
                }
            });
        }
    </script>

</body>

</html>
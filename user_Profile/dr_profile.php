<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    header('location:../index.php');
}

$nav_bnt_name = "Dr ".$_SESSION['first_name'];

if (!$_SESSION['first_name']) {
  header('location:../index.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ec188ca56.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@402&display=swap" rel="stylesheet">
    <link href="../css/user_profile.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/dr_profile.js"></script>
    <title>My Account</title>
</head>

<body>
<div class="top_div">
    <nav class="navbar navbar-expand-lg navbar-light" >
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand text-warning font-weight-bold">
                <img src="../imgs/logoDR.png" class="nav_logo" alt="not found">
            </a>
                <button id="hamburger" class="navbar-toggler bg-light" type="button" data-toggle="collapse"
                    data-target="#collapsenavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="hamburger">
                    <i class="fas fa-bars" style="color:rgb(78, 78, 78); font-size:30px;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse text-center"  id="collapsenavbar">
                <ul class="navbar-nav ml-auto line-height ">
                    <li class="nav-item">
                        <a href="" class="nav-link text-dark">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-dark">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-dark">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-dark">CONTACT</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid ">
    <div class="outer_main_div">

        <div class="inner_main_div">

            <div class="profile_header">
                <div class="home_icon">
                    <a href="../index.php"><i class="fas fa-home fa-2x"></i></a>
                </div>
                <div class="heading_text">
                    <h2> user profile</h2>
                </div>
            </div>
            <div class="profile_body">
                <div class="profile_intro">
                    <div class="profile_img">
                        <?php echo "<img src='../login_signup/upload_img/" . $_SESSION['profile'] . "'>"; ?>
                    </div>
                    <div class="user_name">
                        <h2> <?php echo "Hello, Dr. " . $_SESSION['first_name'];  ?> </h2>
                    </div>
                </div>
                <div class="user_details">

                    <!-- row 1 -->

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Full Name :
                        </div>
                        <div class="row_detail_value">
                            <?php echo "Dr. " . $_SESSION['first_name']; ?>
                        </div>
                    </div>

                    <!-- row 2 -->

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Email :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['email']  ?>

                        </div>
                    </div>

                    <!-- row 2 -->


                    <div class="detail_row">
                        <div class="row_detail_name">
                            Contact :
                        </div>
                        <div class="row_detail_value">
                            <?php echo  $_SESSION['contact'];  ?>

                        </div>
                    </div>


                    <div class="detail_row">
                        <div class="row_detail_name">
                            Gender :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['gender'];  ?>

                        </div>
                    </div>

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Location :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['location'];  ?>

                        </div>
                    </div>

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Experience :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['experience'] . " year";  ?>
                        </div>
                    </div>

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Degree :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['degree'];  ?>
                        </div>
                    </div>

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Specialist :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['tag_name'];  ?>
                        </div>
                    </div>

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Office Location :
                        </div>
                        <div class="row_detail_value">
                            <?php echo $_SESSION['office_location'];  ?>
                            
                        </div>
                    </div>

                    <div class="detail_row">
                        <div class="row_detail_name">
                            Meeting Link :
                        </div>
                        <div class="row_detail_value" id="meet_link_div">
                            <a id= "meet_link" style="cursor:pointer;" href=<?php echo $_SESSION['meeting_link']; ?> target="_blank"><?php echo $_SESSION['meeting_link']; ?></a>
                            &nbsp;<i  onclick="changeLink(<?php echo $_SESSION['doctor_id'] ?>)" style="cursor:pointer;" class="fas fa-edit fa-sm"></i>
                        </div>
                    </div>




                    <!-- row footer button -->




                    <div class="button_row">
                        <div class="appointment_btn">
                            <a href="../booked_appointment/dr_appointments.php" target=""><button id="btnID1" onmousedown="changebtn('btnID1')" onmouseup="leavbtn('btnID1')">BOOKED APPOINTMENTS</button></a>

                            <!-- <input type="button" name="appointment" value="take appointment" />  -->
                        </div>
                        <div class="logout_btn">
                            <a href="../login_signup/logout.php" target=""><button id="btnID2" onmousedown="changebtn('btnID2')" onmouseup="leavbtn('btnID2')">LOGOUT</button></a>


                            <!-- <input type="button" name="logout" value="LOGOUT" />  -->
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<footer>
        <div class="row mainfooter sm-auto">
            <div class="col-lg-2 col-md-6 col-12 d-block m-auto ml-auto sm-auto foot1">
                <ul>
                    <li>
                        <h4>MediHUB</h4>
                    </li>
                    <li><a href="#home">About Us</a></li>
                    <li><a href="#home">Blog</a></li>
                    <li><a href="#home">Pricing</a></li>
                    <li><a href="#home">Careers</a></li>
                    <li><a href="#home">How it Works</a></li>
                    <li><a href="#home">What We Treat</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6  col-12 d-block m-auto ml-auto foot2">
                <ul>
                    <li>
                        <h4>BUSSINESS</h4>
                    </li>
                    <li><a href="#home">For Business</a></li>
                    <li><a href="#home">Business Blog</a></li>
                    <li>
                        <h4>LEGAL</h4>
                    </li>
                    <li><a href="#home">Terms of Services</a></li>
                    <li><a href="#home">Privacy Policy</a></li>
                    <li><a href="#home">FAQ's</a></li>

                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-12 d-block m-auto ml-auto foot3">
                <ul>
                    <li>
                        <h4>MediHUB Health India Pvt Ltd</h4>
                    </li>
                    <li>Bangalore,</li>
                    <li>
                        <p id="address">6th Floor, Unit nos 3 & 4. Vayudooth Chambers,<br>
                            15 & 16, Trinity Junction,<br>
                            Mahatma Gandhi Road,<br>
                            Bangalore – 560001</p>
                    </li>
                    <li>
                        <h4>Contact</h4>
                    </li>
                    <li><a href="#home">91+ 99777 56666</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-5 col-12 d-block m-auto ml-auto foot4">
                <ul>
                    <li>
                        <h4>SOCIAL LINK</h4>
                    </li>
                    <li><a href=""><span class="fa fa-facebook-square" aria-hidden="true"></span> FaceBook</a></li>
                    <li><a href=""><span class="fa fa-instagram" aria-hidden="true"></span> Instagram</a></li>
                    <li> <a href=""><span class="fa fa-youtube-square" aria-hidden="true"></span> YouTube</a></li>
                    <li><a href=""><span class="fa fa-twitter-square" aria-hidden="true"></span> Twitter</a></li>
                    <li><a href=""><span class="fa fa-linkedin-square" aria-hidden="true"></span> Linkedin</a></li>
                    <li><a href="mailto:helpdesk@medihub.com"><span class="fas fa-envelope-square fa-md" aria-hidden="true"></span> Mail</a></li>

                </ul>
            </div>
            <div class="col-lg-1 col-md-1 col-12 d-block m-auto ml-auto top_arrow">
                <a href="#top" onclick=""><span class="fa fa-2x fa-arrow-circle-up" aria-hidden="true"></span></a>
            </div>
        </div>
        <div class="row mt-5" style="text-align: center; width: 97%;">
            <div class="col copyright">
                <p class=""><small class="text-white-50">© 2021 MediHUB, All Rights Reserved.</small></p>
            </div>
        </div>
</footer>
    <script>
        function changebtn(btnid) {
            document.getElementById(btnid).setAttribute("style", "background-color:rgba(83, 142, 252, 0.645);font-size: 14px;border-radius: 14px;");
        }

        function leavbtn(btnid) {
            document.getElementById(btnid).setAttribute("style", "background-color:rgba(0, 89, 255, 0.645);font-size: 14px;border-radius: 10px;");
        }
    </script>
</body>

</html>
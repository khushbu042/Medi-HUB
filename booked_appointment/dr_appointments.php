<?php
session_start();
include '../connection.php';

$nav_bnt_name = "Dr " . $_SESSION['first_name'];

if (!$_SESSION['first_name']) {
    header('location:../index.php');
}

$doctor_id = $_SESSION['doctor_id'];
$query = "select a.appointment_id, a.first_name, a.last_name, d.doctor_name, a.appointment_mode, d.meeting_link, d.office_location,DATE_FORMAT(a.appointment_date, '%W %d %M %Y') as appointment_date, a.slot_time, a.symptoms
              from appointment_data a, doctor_data d
              where a.doctor_id = d.doctor_id and d.doctor_id='$doctor_id' and a.status='true' order by a.appointment_date, a.slot_id";
$res = mysqli_query($con, $query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ec188ca56.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@402&display=swap" rel="stylesheet">

    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/dr_appointments.css" type="text/css">
    <script src="../js/dr_appointments.js"></script>
    <title>Booked Appointments</title>
</head>

<body>
    <div class="top_div">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="" class="navbar-brand text-warning font-weight-bold">
                    <img src="../imgs/logoDR.png" class="nav_logo" alt="not found">
                </a>
                <button id="hamburger" class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsenavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="hamburger">
                        <i class="fas fa-bars" style="color:rgb(78, 78, 78); font-size:30px;"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse text-center" id="collapsenavbar">
                    <ul class="navbar-nav ml-auto line-height ">
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link text-dark">HOME</a>
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
                        <div class="helpbtn">
                            <a href="../user_Profile/dr_profile.php" target=""> <button id="btnID1" onmousedown="changebtn('btnID1')" onmouseup="leavbtn('btnID1')"><i class="fas fa-user-circle fa-lg"></i>&nbsp;&nbsp;<?php echo $nav_bnt_name; ?></button></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-primary ">
                        <div class="card-header bg-primary text-light">
                            <h5 class="card-title" style="height: 8px;"><i class="fas fa-calendar-check"></i>&nbsp;&nbsp;My Appointments</h5>
                            <div class="pull-right">
                                <!-- <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                    <i class="fas fa-search"></i>
                                </span> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Search..." />
                        </div>
                        <table class="table table-responsive xl-auto md-auto lg-auto" id="dev-table">
                            <thead>
                                <tr class="table-row">
                                    <th class="col-1">ID</th>
                                    <th class="col-1">Patient</th>
                                    <th class="col-1">Meeting Link</th>
                                    <th class="col-1">Mode</th>
                                    <th class="col-2">Date</th>
                                    <th class="col-2">Slot Time</th>
                                    <th class="col-2">Symptoms</th>
                                    <th class="col-1">Status</th>
                                    <!-- <th>Time</th> -->
                                    <th class="col-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($row_count = mysqli_num_rows($res)) {
                                    while ($row = mysqli_fetch_array($res)) {
                                ?>
                                        <tr>
                                            <td><?php $id = $row['appointment_id'];
                                                echo $id; ?></td>
                                            <td><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                                            <td><a href="<?php echo $row['meeting_link']; ?>" target="_blank">Join Meeting</a></td>
                                            <td><?php echo $row['appointment_mode']; ?></td>
                                            <td><?php echo $row['appointment_date']; ?></td>
                                            <td><?php echo $row['slot_time']; ?></td>
                                            <td><?php echo $row['symptoms']; ?></td>
                                            <td><button id="<?php echo $id; ?>" style="width:70px;border:none; border-radius:5px; background-color:rgb(91, 216, 91);" onclick="myFunction(<?php echo $id; ?>)">Pending</button></td>
                                            <td><button style="width:30px; height: 25px; border:0ch; background-color:white; color:red ;" onclick="deleteRecord(<?php echo $id; ?>)"> <i class="fas fa-trash-alt fa-lg"></i></button>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="8" style="text-align: center; font-weight: bold; font-size:large"> No Record found </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="button_row">
                    <div class="logout_btn">
                        <a href="../login_signup/logout.php" target=""><button id="btnID2" onmousedown="changebtn('btnID2')" onmouseup="leavbtn('btnID2')">LOGOUT</button></a>
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
            <div class="row mt-5" style="text-align: center;">
                <div class="col copyright">
                    <p class=""><small class="text-white-50">© 2021 MediHUB, All Rights Reserved.</small></p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
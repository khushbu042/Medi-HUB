<?php

session_start();

if (isset($_SESSION['first_name'])) {
    $menu_btn_text = "Hello " . $_SESSION['first_name'];
    $appoint_btn = "./appointment/appointment.php";
    $menu_btn = "./user_Profile/user_profile.php";
} else {
    $menu_btn_text = " LOGIN / SIGNUP";
    $menu_btn = "./login_signup/loginSignin.php";
    $appoint_btn = "./login_signup/loginSignin.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/index.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <script src="https://kit.fontawesome.com/1ec188ca56.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/943ba1aaea.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@402&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>MediHub.com</title>
</head>

<body>
    <div class="top_div">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a href="" class="navbar-brand text-warning font-weight-bold">
                    <img src="./imgs/logoDR.png" class="nav_logo" alt="not found">
                </a>
                <button id="hamburger" class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#collapsenavbar" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" id="hamburger">
                        <i class="fas fa-bars" style="color:rgb(78, 78, 78); font-size:30px;"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse text-center" id="collapsenavbar">
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
                        <div class="helpbtn">
                            <a href=<?php echo $menu_btn ?> target=""> <button id="btnID1" onmousedown="changebtn('btnID1')" onmouseup="leavbtn('btnID1')"><i class="fas fa-user-circle fa-lg"></i>&nbsp;&nbsp;<?php echo $menu_btn_text; ?></button></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="container text-center">

            <div class="row section1 sm-auto">
                <div class="col-lg-6 col-md-6 col-12 d-block m-auto ourservices section1_left">
                    <h3>We Are Here For Your Care</h3>
                    <h1>Book Appointment With Doctors Easily</h1>
                    <p>We are here for your care 24/7 Any help Just call us</p>
                    <a href=<?php echo $appoint_btn ?> target=""><button id="btnID2" onmousedown="changebtn('btnID2')" onmouseup="leavbtn('btnID2')"><i class="fas fa-notes-medical fa-lg"></i>&nbsp;&nbsp;MAKE AN APPOINTMENT</button></a>

                </div>
                <div class="col-lg-6 col-md-6 col-12 d-block m-auto section1_right ">
                    <figure>
                        <img id="img12" class=" img-fluid" src="./imgs/right_section.png" alt="img not found">
                    </figure>
                </div>
            </div>
        </section>
        <section class="container text-center ">

            <div class="row section2 sm-auto">
                <div class="col-lg-6 col-md-6 col-12 d-block m-auto section2_left ">
                    <figure>
                        <img id="img12" class=" img-fluid" src="./imgs/dr_img_.png" alt="img not found">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-12 d-block m-auto ourservices section2_right">
                    <h1>Are you Doctor?</h1>
                    <h3>join our business with easy sign-up/login</h3>
                    <a href="./login_signup/doctor_loginSignin.php" target=""><button id="btnID3" onmousedown="changebtn('btnID3')" onmouseup="leavbtn('btnID3')"><i class="fas fa-sign-in-alt fa-lg"></i>&nbsp;&nbsp;JOIN US !!</button></a>
                </div>
            </div>
        </section>
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
        <div class="row mt-5" style="text-align: center; width:97%">
            <div class="col copyright">
                <p class=""><small class="text-white-50">© 2021 MediHUB, All Rights Reserved.</small></p>
            </div>
        </div>
    </footer>
    <script>
        function changebtn(btnid) {
            document.getElementById(btnid).setAttribute("style", "background-color:rgba(83, 142, 252, 0.645); font-size: 14px;border-radius: 14px;");
        }

        function leavbtn(btnid) {
            document.getElementById(btnid).setAttribute("style", "background-color:rgba(0, 89, 255, 0.645);font-size: 14px;border-radius: 10px;");
        }
    </script>
</body>

</html>
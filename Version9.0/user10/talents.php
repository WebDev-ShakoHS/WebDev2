<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:Emmet Hoversten
        Date Completed:2/4/20
    -->

<head>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Emmet's Autobiography</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

        h1 {
            color: green;
        }

        #buttonthing {
            background-color: red;
            color: black;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: ghostwhite;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }

        .time {
            line-height: 25px;
        }

        .hidden {
            visibility: hidden;
        }

        .showing {
            visibility: visible;
        }

        td {
            color: #FF0000;

        }

        #weatherbox {
            color: white;
        }

    </style>
    <script src="JS/SampleJS.js"></script>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Emmet's Autobiography</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <script src="JS/SampleJS.js"></script>
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

        span {
            color: green;
        }

        h2 {
            color: green;
        }

    </style>
    <link href="CSS/WebDevUser10.css" rel="stylesheet" type="text/css">

    <style>
        td {
            color: #FF0000;

        }

    </style>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    <title>My Favorite Movies</title>
    <link href="CSS/WebDevUser10.css" rel="stylesheet" type="text/css">
    <style>
        td {
            color: #FFFFFF;
            background-color: black
        }

    </style>
</head>

<body>
   <div style="margin: 0px; border:0px; padding:0px;" class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="reset_password.php" class="navbar-brand">Emmet H</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link " tabindex="1">Who</a>
                    <a href="what.php" class="nav-item nav-link">What</a>
                    <a href="movies.php" class="nav-item nav-link" tabindex="-1">Movies</a>
                    <a href="index_list.php" class="nav-item nav-link" tabindex="-2">Favorites</a>
                    <a href="talents.php" class="nav-item nav-link active" tabindex="-2">Talents</a>
                    <a href="javagames.php" class="nav-item nav-link " tabindex="-2">TicTacToe</a>
                    <button data-file="day" onClick="lightmode()" class="col-lg-5">Light Mode</button>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>
                </div>
            </div>
        </nav>
    </div>


    <h3 style="color:#339966;">Emmet's Various and Random Talents</h3>
    <ul>
        <li style="color:#0000f0;">Good at Fortnite</li>
        <li style="color:#964B00;">Win almost any argument</li>
        <li style="color:#6a0dad;">World's highest IQ</li>
        <li style="color:#f00000;">Most water drank in 5 seconds</li>
        <li style="color:#00ff00;">Very Tall. Very Cool.</li>

    </ul>
    <h2>Quick Side Note: My best friend Ling is still selling some of the best cheap cars on the market so check him out. (#AD)</h2>
    <div id="left-bar">


        <h2 class="ling-animated-candybar">
            <img src="https://images.lingscars.com/images/index/ling-face.png" alt="Ling Valentine, UK's car leasing queen" title="Ling Valentine and LINGsCARS.com" />
        </h2>

        <p class="aside-animated-title">
            <span>I am</span>
            LING
            <span>you can trust me</span>
        </p>
        <div id="left-bar">


            <h2 class="ling-animated-candybar">
                <img src="https://images.lingscars.com/images/index/ling-face.png" alt="Ling Valentine, UK's car leasing queen" title="Ling Valentine and LINGsCARS.com" />
            </h2>

            <p class="aside-animated-title">
                <span>I am</span>
                LING
                <span>you can trust me</span>
            </p>
            <div id="left-bar">


                <h2 class="ling-animated-candybar">
                    <img src="https://images.lingscars.com/images/index/ling-face.png" alt="Ling Valentine, UK's car leasing queen" title="Ling Valentine and LINGsCARS.com" />
                </h2>

                <p class="aside-animated-title">
                    <span>I am</span>
                    LING
                    <span>you can trust me</span>
                </p>
                <span class="piccadilly-play" data-status="played">Stop</span>

                <img class="pica-circus" src="https://images.lingscars.com/images/index/pica-circus.png" alt="UK Piccadilly Circus background with cars" />
                <img class="pica-pole" src="https://images.lingscars.com/images/index/undeground-pole.png" alt="UK Piccadilly Underground pole" />

                <div class="betty-marquee"></div>
                <div class="pole-detail"></div>
                <div class="ling-ani"></div>
                <div class="hp_del_7days">


                    <h2><a href="http://lingscars.com">Check out Lings Cars</a></h2>
                    <div class="hp_del7_item">
                        <span class="del_car">Audi A6 Saloon</span>
                        <img src="https://images.lingscars.com/car_images/audi_a6_saloon/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Rich</span><br>
                        <span class="del_city">Burton On Trent, DE13</span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">Audi A5 Convertible</span>
                        <img src="https://images.lingscars.com/car_images/audi_a5_cabriolet/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Bruce</span><br>
                        <span class="del_city">Bicester, OX26</span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">BMW 5 Series Saloon</span>
                        <img src="https://images.lingscars.com/car_images/bmw_5-series_saloon/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Margaret</span><br>
                        <span class="del_city">Top Secret, </span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">BMW 5 Series Saloon</span>
                        <img src="https://images.lingscars.com/car_images/bmw_5-series_saloon/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Ged</span><br>
                        <span class="del_city">Top Secret, </span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">Hyundai Tucson Estat...</span>
                        <img src="https://images.lingscars.com/car_images/hyundai_tucson/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Stew</span><br>
                        <span class="del_city">Paisley, PA1 </span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">Nissan Leaf</span>
                        <img src="https://images.lingscars.com/car_images/nissan_leaf/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Ian</span><br>
                        <span class="del_city">Reading , RG73</span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">Nissan Qashqai</span>
                        <img src="https://images.lingscars.com/car_images/nissan_qashqai/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Ricky Sha...</span><br>
                        <span class="del_city">Pinner, HA53</span>
                    </div>
                    <div class="hp_del7_item">
                        <span class="del_car">Renault Kangoo Ze </span>
                        <img src="https://images.lingscars.com/car_images/renault_kangoo_van/transparent.png" />
                        <span class="del_name"><sup class="sup-smaller">To </sup>Print Rea...</span><br>
                        <span class="del_city">Witney, OX29</span>
                    </div>
                    <br><br>

                    <!--            LAST 7 DAYS DELIVERIES-->

                </div>
<div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="index.php">Main Page</a></li>
                                <li><a href="javagames.php">Games</a></li>
                                <li><a href="talents.php">Cool Things</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="what.php">Team</a></li>
                                <li><a href="index_list.php">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Emmet Hoverten</h3>
                            <p>Just a young lad doing coding for school.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Emmet Hoversten © 2020</p>
                </div>
            </footer>
        </div>

</body>

</html>

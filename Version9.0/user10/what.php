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
    <script src="JS/SampleJS.js"></script><link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    
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
    <style>
        body {
            text-align: center;
        }

        dt {
            color: palegreen;
        }

        dd {
            color: green;
        }

        .hahaha {
            font-size: 32px;
            color: green;
        }

    </style>
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

    </style>
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">

    <style>
        td {
            color: #FF0000;

        }

    </style>
    <link rel="shortcut icon" type="image/ico" href="images/FaviconE.ico">
    <title>My Favorite Movies</title>
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
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
                    <a href="what.php" class="nav-item nav-link active">What</a>
                    <a href="movies.php" class="nav-item nav-link" tabindex="-1">Movies</a>
                    <a href="index_list.php" class="nav-item nav-link" tabindex="-2">Favorites</a>
                    <a href="talents.php" class="nav-item nav-link " tabindex="-2">Talents</a>
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

    <div>
        <h1 class="hahaha">What Does Emmet Do?</h1>
        <dl>
            <dt>Basketball</dt>
            <dd class="col-lg-10">Obviously from my height you can see that I would be god at basketball or at least decent. I have been playing for like 10 years of my life and play it for fun a lot.
                <img height=200px width=220px src="https://www.bisoninc.com/wp-content/uploads/2015/12/BA3EElitePlus.jpg">
            </dd>
            <dt>Gaming</dt>
            <dd>I have always played games but not intensly into the games more considered for 'true gamers' but played lots of wii, minecraft(like a lot of minecraft, made my own servers and mods), BO2, Modern Warfare, Fortnite, and some other games.</dd>
            <dt>Rubix/Puzzles</dt>
            <dd class="col-lg-12">My weird, insanely smart and rich uncle has every wooden and chain and lock puzzles that you are timed to solve and I really got into those. After, I took a second look at the rubix cube and really wanted to learn to do it fast. So, I googled it like every other problem in 2020 and can now successfully do it in around 30 seconds.
                <img class="col-lg-2" height=200px width=50px src="https://www.rubiks.com/media/catalog/product/cache/9c57e2fe71f8a58f6afba681a0a15dd4/r/u/rubik-4x4-solved_4.jpg">
            </dd>
            <dt>Computers</dt>
            <dd class="col-lg-12">Every since I got into gaming, I liked computers. I had my own laptop when I was like 9 or 10 and was playing minecraft and upgraded to a PC when I was 12. The first one was built by my dads friend in front of me so I could see the parts and then a year later I upgraded again and built my own PC and have always been considered the 'tech saavy' one in my family.
                <img class="col-lg-2" height=200px width=50px src="https://blogs.lse.ac.uk/management/files/2016/11/technology-785742_1920.jpg">
            </dd>
            <dt>Volleyball</dt>
            <dd class="col-lg-12"><strong>Yes, I did play volleyball and still do. I am tall so it works</strong>
            </dd>
        </dl>

        <script>
            (function() {

                $('dd').filter(':nth-child(n+3)').addClass('hide');

                $('dl').on('mouseenter', 'dt', function() {
                    $(this)
                        .next()
                        .slideDown(200)
                        .siblings('dd')
                        .slideUp(200);


                })



            })();
            (function() {

                $('strong').mouseenter(function() {
                    window.open('goodgrade.php');

                })



            })();

        </script>
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

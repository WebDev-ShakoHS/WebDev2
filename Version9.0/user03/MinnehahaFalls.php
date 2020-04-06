<?php
session_start();


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>

    <title>Minnehaha Falls</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSMgZJOU6m518_A443vctOUHCbiSFtcAJMJ8i4sVyZ8dW4-IvR6">

    <!-- Navbar Menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/StyleSheet.css">
    <script src="JS/FinalJS.js"></script>
    <script>


    </script>
</head>

<body class="backgroundMinnehahaFalls">
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSMgZJOU6m518_A443vctOUHCbiSFtcAJMJ8i4sVyZ8dW4-IvR6' height=50px width=50px></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <!-- tabindex equaling zero makes the outside of the clickable area outlines with the highlight color of the computer. -->
                    <!-- tabindex equaling negative one gets rid of that highlight -->
                    <a href="index.php" class="nav-item nav-link" tabindex="-1">Home</a>
                    <a class="nav-item nav-link active">Minnehaha Falls</a>
                    <a href="MNSculptureGarden.php" class="nav-item nav-link" tabindex="-1">Minneapolis Sculpture Garden</a>
                    <a href="USBankStadium.php" class="nav-item nav-link" tabindex="-1">US Bank Stadium</a>
                    <a href="MNChildrensMuseum.php" class="nav-item nav-link" tabindex="-1">Minnesota Childrens Museum</a>
                    <a href="WeismanArtMuseum.php" class="nav-item nav-link" tabindex="-1">Weisman Art Museum</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i> <?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>

                </div>
            </div>
        </nav>
    </div>
    <div class="wideMargin">
        <center>
            <h1 align="right"><span>Minnehaha Falls</span></h1>
        </center>
        <div class="row">
            <div class="col-sm-6">
                <h2>What is Minnehaha Falls?</h2>

                <p>Minnehaha Falls is one of Minneapolis' oldest and most popular parks features a majestic 53-foot waterfall, limestone bluffs, and river overlooks, attracting more than 850,000 visitors annually. <a href="https://www.exploreminnesota.com/profile/minnehaha-falls-minnehaha-park/1839" link="red">Learn More.</a></p>

                <h2>Park Hours</h2>

                <p>The Park is open from 6am-12am in populated areas, but open 6am-10pm in less populated areas.</p>
            </div>
            <div class="col-sm-5">
                <center><img src="images/MinnehahaFalls.jpeg" width=675px></center>
            </div>
        </div>
    </div>
</body>

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

    <title>Minnesota Childrens Museum</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSMgZJOU6m518_A443vctOUHCbiSFtcAJMJ8i4sVyZ8dW4-IvR6">

    <!-- Navbar Menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/StyleSheet.css">
    <script src="JS/FinalJS.js"></script>
    <script src="JS/jquery-3.4.1.js"></script>
    <!--jQuery is below.-->
    <script>
        $(function() {
            $('h1').addClass('center');
            $('.textalignright2').toggleClass('textalignright2');
        });
    </script>
</head>

<body class="MNChildrensMuseumBackground" onload="ChildrensMuseum()">
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
                    <a href="MinnehahaFalls.php" class="nav-item nav-link" tabindex="-1">Minnehaha Falls</a>
                    <a href="MNSculptureGarden.php" class="nav-item nav-link" tabindex="-1">Minneapolis Sculpture Garden</a>
                    <a href="USBankStadium.php" class="nav-item nav-link" tabindex="-1">US Bank Stadium</a>
                    <a class="nav-item nav-link active">Minnesota Childrens Museum</a>
                    <a href="WeismanArtMuseum.php" class="nav-item nav-link" tabindex="-1">Weisman Art Museum</a>
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

    <div class="wideMargin">
        <center><h1>Minnesota Childrens Museum</h1></center>

        <div class="row">
            <div class="col-sm-6">
                <img src="images/MNChildrensMuseum.png">
            </div>
            <div class="col-sm-6">
                <div class='textalignright'><h2>Information</h2>
                <p>Minnesota Children’s Museum sparks children’s learning through play. The museum, a nonprofit organization, serves more than 550,000 visitors each year at locations in St. Paul and Rochester.</p>

                <p>Our museums are kid-powered play spaces where families have fun together and kids take the lead. Through interactive exhibits and programs, the museum provides open-ended, self-directed experiences that give kids (and adults!) the space and freedom to explore their interests, solve problems and build life skills like confidence, critical and creative thinking, communication and more.</p>

                <p>The museum in St. Paul features 10 permanent exhibits including a four-story climber with spiral slide, laser maze, car wash, ball launchers, maker space, pretend town, and a gallery for toddlers and pre-schoolers. There’s also a traveling exhibits gallery that features a new exhibit every few months.</p>

                <p>Minnesota Children’s Museum is a leading producer of hands-on rental exhibits for children’s museums and discovery centers. <a href="https://mcm.org/about/" link="red">Learn More.</a></p></div>
                <div class='textalignright2'>
                <h2>Prices</h2>
                <p><strong>Ages 1-101:</strong> $12.95</p>
                <p><strong>Museum Members:</strong> Free</p>
                <p><strong>Children Under Age 1:</strong> Free</p>
                </div>

            </div>
        </div>
    </div>
    <div id="footer">
    Webpage made by <span>Mitchell Berg</span>.
    </div>
</body>
</html>

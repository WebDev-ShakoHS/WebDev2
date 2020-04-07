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

    <title>Minneapolis Sculpture Garden</title>
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
    });  
    </script>
</head>

<body class="sculpturegardenbackground">
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
                    <a class="nav-item nav-link active">Minneapolis Sculpture Garden</a>
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
        <div class='headertoppadding headerbottompadding'>
            <center><h1>Minneapolis Sculpture Garden</h1></center>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="images/MinneapolisSculptureGarden.jpeg" width=445px>
            </div>

            <div class="col-sm-6">
                <h2>What is the Minneapolis Sculpture Garden?</h2>

                <p>Since opening in 1988, the Garden has welcomed millions of visitors, showcasing works from the Walker Art Center’s renowned collections of modern and contemporary art in the setting of an urban park. The Garden is a partnership between the Walker and the Minneapolis Park &amp; Recreation Board, a national award-winning park system. <a href="https://walkerart.org/visit/garden/">Learn More.</a></p>

                <h2>Park Hours</h2>

                <p>Open 365 days a year, from 6 am to 12 midnight.</p>

                <h2>Park History</h2>

                <p>This parkland has seen many changes over time. A landscape shaped by glaciers more than 10,000 years ago, the area was once an expanse of marshland used as a seasonal camp by Minnesota’s first people, the Dakota and the Ojibwe. In the late 1800s, the site held an armory and parade grounds. In the early 1900s, formal gardens and a series of sports fields were established by the Park Board. When the Minneapolis Sculpture Garden opened in 1988, it was one of the first major public/private urban sculpture parks of its kind in the United States.</p>

                <h2>The Nature of Art</h2>

                <p>The Minneapolis Sculpture Garden is home to more than 40 outdoor sculptures. Generations of artists from 10 different countries around the world created these artworks. Many of the works are site-specific and made especially for this public park—from the iconic Spoonbridge and Cherry centerpiece to structures that offer spaces for gathering, conversation, or dreaming. Rediscover the Garden’s art and natural beauty through Minnesota’s ever-changing seasons.</p>

                <h2>It Takes a Village</h2>

                <p>What happens when experts from many fields—architects, curators, designers, artists, landscape architects, gardeners, environmentalists, writers, scientists, and many others—come together with community members to reimagine a beloved public space? The result of this multifaceted partnership is a forward-thinking design for the Minneapolis Sculpture Garden, which was fully reconstructed in 2017. The site features ecologically sustainable water management, a flourishing habitat for plants and wildlife, and creative landscape elements that showcase the artworks in nature. Learn more about how the Garden came to be.</p>
            </div>
        </div>
    </div>
<div id="footer">
    Webpage made by <span>Mitchell Berg</span>.
    </div>
</body>

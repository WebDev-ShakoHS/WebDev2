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

    <title>US Bank Stadium</title>
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

<body>
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
                    <a class="nav-item nav-link active">US Bank Stadium</a>
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
        <div>
            <h1>US Bank Stadium</h1>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2>What is the US Bank Stadium?</h2>

                <p>U.S. Bank Stadium is not just a location, but an epicenter of excitement, opportunity, and Minnesota pride. The Vikings are an important part of our proud heritage and the relationship between the Vikings and the citizens of Minnesota runs deep. But the stadium is not just the home of the Minnesota Vikings, it’s a facility that hosts major national and international events that create economic, fiscal and social benefits to the region. <a href="https://www.usbankstadium.com/stadium-info" link="red">Learn More.</a></p>


                <h2>Tours</h2>

                <p>It’s more than just a tour – it’s a backstage pass to the home of NCAA Championships, the Summer X Games, and Super Bowl LII. Your ninety-minute guided adventure through U.S. Bank Stadium will give you behind-the-scenes access to the home of the Minnesota Vikings. Discover the inner workings of the Stadium including premium clubs and suites, the Thomson Reuters Press Level, stadium art collection, team locker room, stadium floor and so much more.</p>

                <p>Our Tour Guides are knowledgeable and well-versed on building architecture, Vikings history and sustainability features of U.S. Bank Stadium. Even if you think you’ve seen it all, there’s always something new to learn with each visit.</p>


                <h2>Viking's History</h2>

                <p>Over the past quarter-century, the Minnesota Vikings have consistently been at the top of their division. During that same period, only Dallas has made more playoff appearances. In addition, only four teams have played in more Super Bowls than Minnesota, which participated in Super Bowls IV, VIII, IX and XI.</p>

                <p>The pro football saga in the Twin Cities began in August 1959, when five Minnesota businessmen were awarded a franchise in the new American Football League. Five months later in January 1960, the same ownership group made up of Bill Boyer, Ole Haugsrud, Bernie Ridder, H. P. Skoglund and Max Winter first forfeited its AFL membership and then was awarded the National Football League's 14th franchise that was to begin play in 1961.</p>

                <p>Perhaps no team in history ever had a more spectacular debut than did the Minnesota Vikings in their first game ever on September 17, 1961. Rookie Fran Tarkenton made a once-in-a-generation debut when he came off the bench to throw four touchdown passes and run for a fifth score to lead his Vikings to a 37-13 thrashing of the fabled Chicago Bears. Two-and-a-half decades later in 1986, Tarkenton became the first Vikings player to be elected to the Pro Football Hall of Fame.</p>

                <p>Minnesota's first management team was led by general manager Bert Rose and head coach Norm Van Brocklin. From the start, the Vikings embraced an energetic marketing program that produced a first-year season ticket sale of nearly 26,000 and an average home attendance of 34,586, about 85 percent of the capacity of 40,800 Metropolitan Stadium. Eventually the stadium capacity was increased to 47,900. Rose resigned from his position in 1964 and Van Brocklin quit abruptly in the spring of 1967. The Vikings went to Canada to get their replacements. Jim Finks, then general manager of the Calgary Stampeders, was named as the new general manager. Bud Grant, head coach of the Winnipeg Blue Bombers, became the new Vikings field leader.</p>

                <p>The success of the Vikings over the next two decades always will be highlighted by the image of the stone-faced Grant on the sidelines of the frozen field at old Metropolitan Stadium. In only their second year under Grant, the Vikings began a stretch of 11 division titles in 13 years. They won the NFL championship in 1969 and NFC titles in 1973, 1974 and 1976. He first retired in 1983 but came back for a year in 1985 before making his retirement permanent. Grant's 168-108-5 record makes him the eighth winningest coach of all time.</p>

                <p>In 1982, the Vikings moved into the Hubert H. Humphrey Metrodome, the site of Super Bowl XXVI, with a capacity of 63,000. There they have continued to enjoy an approximately .600 home winning record. From Bud Grant, Fran Tarkenton, Chuck Foreman, and Alan Page to the stars of the new millenium, the names have changed over the years but the Vikings' tradition has remained constant.</p>
            </div>

            <div class="col-sm-4">
                <center><img src="images/USBankInside.jpeg" width=400px></center>
            </div>
        </div>

    </div>
</body>

</html>

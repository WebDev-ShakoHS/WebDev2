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

    <title>Weisman Art Museum</title>
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSMgZJOU6m518_A443vctOUHCbiSFtcAJMJ8i4sVyZ8dW4-IvR6">

    <!-- Navbar Menu -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/StyleSheet.css">
    <script src="JS/FinalJS.js"></script>
</head>

<body class="WeismanBackground">
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
                    <a href="MNChildrensMuseum.php" class="nav-item nav-link" tabindex="-1">Minnesota Childrens Museum</a>
                    <a class="nav-item nav-link active">Weisman Art Museum</a>
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
            <center><h1>Weisman Art Museum</h1></center>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2>What is the Weisman Art Museum?</h2>
                
                        <p>Major milestones in the museum’s history include significant contributions from Frederick R. Weisman and Frank O. Gehry. Frederick R. Weisman, a Minneapolis native, entrepreneur, and noted philanthropist, provided generous financial gifts and other support to the museum. Internationally acclaimed architect Frank O. Gehry designed the museum’s glimmering residence along the Mississippi River. Home to the museum since 1993, this important architectural achievement has become a landmark for the University of Minnesota and the Twin Cities.</p>

                        <p>WAM is the realization of a dream first articulated by University President Lotus Coffman in 1934. Setting aside some unused rooms in the newly completed Northrop Auditorium, Coffman noted, “There is a need for new values to sustain the morale of individuals in the days ahead. The arts are a source for such values and I want this university to play a leading part in instilling them.”</p>

                        <p>The museum presents and interprets works of art, offering exhibitions that place art within relevant cultural, social and historical contexts. Several major exhibitions are offered each year, as well as organized letters, symposia, tours and special events focused upon educational themes. In its 70-year history, the museum has worked with more than fifty departments, presenting the ideas of a great university in multi-disciplinary and widely collaborative projects. The museum’s active touring program serves the cultural/educational needs of rural communities primarily in the Upper Midwest, as well as national and international audiences.</p>

                        <p>The construction of an 8,100 square-foot expansion, designed by internationally renowned architect Frank Gehry, was completed in 2011. Gehry is also responsible for the original design of this landmark facility. The museum reopened to the public on October 2, 2011, and nearly doubled the size of the galleries for collections and enhanced its role as a cultural resource for the University, students, Minnesota, and the state’s many visitors. The museum engaged Minneapolis-based HGA Architects and Engineers as the local architects for the project and JE Dunn Construction as contractors.</p>
                
                
                
            </div>

            <div class="col-sm-4">
                <img src="images/WeismanNight.jpeg" width=445px>
            </div>
            
            <table>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td><strong>Hours</strong></td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr>
                            <td>11a-5p</td>
                            <td><span>Closed</span></td>
                            <td>10a-5p</td>
                            <td>10a-8p</td>
                            <td>10a-5p</td>
                            <td>10a-5p</td>
                            <td>11a-5p</td>
                        </tr>
                    </tbody>
                </table>
                        
            <div class='headertoppadding'>
                <p><strong>Closed on the following holidays:</strong> New Year’s Day, Independence Day, Thanksgiving, Christmas Eve Day, and Christmas Day.</p>
            </div>
            
        </div>
    </div>
    <div id="footer">
    Webpage made by <span>Mitchell Berg</span>.
    </div>
</body>

</html>

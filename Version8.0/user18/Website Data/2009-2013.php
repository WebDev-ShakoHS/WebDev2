<?php
// Include config file
require_once "config.php";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["favorite"]))) {
        $username_err = "No boxes were checked";
    } else {
        // Prepare a select statement
        $sql = "UPDATE `pcdata` SET `selected`= 1 WHERE year = ?;";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_year);

            // Set parameters
            $param_year = trim($_POST["favorite"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script>
    src = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="icon" href="Favicon/favicon.ico" type="image/x-icon" />


<link rel="stylesheet" href="style.css">
<script src="JS/SampleJS.js"></script>
<link rel="stylesheet" href="style.css">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .parallax {
            background-image: url(../user18/PCElements/2009PC.png);
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax1 {
            background-image: url(../user18/PCElements/2010PC.png);
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax2 {
            background-image: url(../user18/PCElements/2011PC.png);
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax3 {
            background-image: url(../user18/PCElements/2012PC.png);
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax4 {
            background-image: url(../user18/PCElements/2013PC.png);
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body style="background-color: black;">
<nav id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Home.php">Home</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/2009-2013.php">2009-2013</a>
        <a href="2014-2017.html">2014-2017</a>
        <a href="2018-2021.html">2018-2021</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Favorites.php">Favorites</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Gallery.php">Gallery</a>
    </nav>
    <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
    </div>
    <h1 style="color:white">
        <center>2009-2013</center>
    </h1>
    <div class="parallax" style="color: black;"></div>

    <div style="height:300px;background-color: black;margin: 0%;">
        <center>
            <h1 style="color: white;">2009</h1>
        </center>
        </h4>
        <ul>
            <li style="color: white;">CPU: Intel Core i5-750</li>
            <li style="color: white;">RAM: 2x 2GB DDR3-1333 (4GB Total)</li>
            <li style="color: white;">Motherboard: Gigabyte P55UD4P LGA-1156</li>
            <li style="color: white;">GPU: 2x Radeon HD 5850 (CrossFire)</li>
            <li style="color: white;">HDD: WD Caviar Black 640GB HDD</li>
            <li style="color: white;">Case: NZXT M59</li>
            <li style="color: white;">PSU: Corsair CMPSU-750HX 750W</li>
            <li style="color: white;">Optical Drive: Samsung SH-S2232C22x</li>
            <p style="font-size: medium;color: white;"><b>Total Cost: ~$1300</b></p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="checkbox" id="2009" name="favorite" value="2009">
                <label for="2009"> Favorites</label><br>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>


        </ul>
    </div>

    <div class="parallax1"></div>

    <div style="height:400px;background-color: black;margin: 0%;">
        <center>
            <h1 style="color: white;">2010</h1>
        </center>
        </h4>
        <ul>
            <li style="color: white;">CPU: Phenom II X3 720 Black Edition</li>
            <li style="color: white;">RAM: Crucial 4GB (2x2GB) DDR3-1333</li>
            <li style="color: white;">Motherboard: MSI 790X-G45 AM3</li>
            <li style="color: white;">GPU: 2xRadeon HD 5830 (CrossFire)</li>
            <li style="color: white;">HDD: WD Caviar Blue 320GB HDD</li>
            <li style="color: white;">Case: Antec Three Hundred</li>
            <li style="color: white;">PSU: Corsair CMPSU-650TX 650W</li>
            <li style="color: white;">Optical Drive: Lite-On iHas12424x</li>
            <p style="font-size: medium;color: white;"><b>Total Cost: ~$1,023</b></p>
        </ul>
    </div>
    <div class="parallax2"></div>

    <div style="height:400px;background-color: black;margin: 0%;">
        <center>
            <h1 style="color: white;">2011</h1>
        </center>
        </h4>
        <ul>
            <li style="color: white;">CPU: Intel Core i5-2500K</li>
            <li style="color: white;">RAM: G.Skill Ripjaws 4 GB (2x2GB) DDR3-1333</li>
            <li style="color: white;">Motherboard: ASRock P67 Extreme4 LGA 1155</li>
            <li style="color: white;">GPU: Gigabyte Radeon HD 6950</li>
            <li style="color: white;">HDD: Samsung Spinpoint 1TB SSD</li>
            <li style="color: white;">Case: In-Win Android</li>
            <li style="color: white;">PSU: Corsair CMPSU-650TX 650W</li>
            <li style="color: white;">Optical Drive: Asus DRW-24B1ST24x</li>
            <p style="font-size: medium;color: white;"><b>Total Cost: ~$976.91</b></p>
        </ul>
        <div class="parallax3"></div>

        <div style="height:400px;background-color: black;margin: 0%;">
            <center>
                <h1 style="color: white;">2012</h1>
            </center>
            </h4>
            <ul>
                <li style="color: white;">CPU: Intel Core i5-3570K</li>
                <li style="color: white;">RAM: Mushkin Enhanced Blackline 8 GB (2x4GB) DDR3-1600</li>
                <li style="color: white;">Motherboard: ASRock Fatal1ty P67 Performance LGA 1155</li>
                <li style="color: white;">GPU: Gigabyte GeForce GTX 670 GV-N670OC-2GD</li>
                <li style="color: white;">HDD: OCZ Agility 3 60 GB SSD</li>
                <li style="color: white;">HDD 2: Seagate Barracuda 750 GB</li>
                <li style="color: white;">Case: Rosewill Redbone</li>
                <li style="color: white;">PSU: Corsair CX600 V2 600 W</li>
                <li style="color: white;">Optical Drive: Samsung SH-222BB/BEBE 22x</li>
                <p style="font-size: medium;color: white;"><b>Total Cost: ~$1057</b></p>
            </ul>
        </div>
        <div class="parallax4"></div>

        <div style="height:400px;background-color: black;margin: 0%;">
            <center>
                <h1 style="color: white;">2013</h1>
            </center>
            </h4>
            <ul>
                <li style="color: white;">CPU: Intel Core i5-4670K</li>
                <li style="color: white;">RAM: 8 GB Patriot Viper 3 (2x4GB) DDR3-1866</li>
                <li style="color: white;">Motherboard: Asus Z87-PLUS LGA 1150</li>
                <li style="color: white;">GPU: 2x MSI Gaming N770 TF GeForce GTX 770</li>
                <li style="color: white;">HDD: Samsung 840 Pro MZ-7PD128PW 128 GB SATA SSD</li>
                <li style="color: white;">HDD 2: Seagate Barracuda 2 TB</li>
                <li style="color: white;">Case: NZXT Gamma Black ATX</li>
                <li style="color: white;">PSU: Corsair TX750 V2 750W</li>
                <li style="color: white;">Optical Drive: Lite-On iHAS124-04</li>
                <p style="font-size: medium;color: white;"><b>Total Cost: ~$1600</b></p>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-1">
                <button class="returnToTop" onclick="moveHome()">Home</button>
            </div>
            <div class="col-sm-10">
                <center><button class="returnToTop" onclick="scrollWindow()">Return to the Top</button></center>
            </div>
            <div class="col-sm-1">
                <button class="returnToTop" onclick="move2014()">2014-2018</button>
            </div>
        </div>
        <footer class="row">
            <div class="col-sm-12">
                <center>
                    <p style="color: white;font-size: x-small;">Made by: Noah Peterson -- Contact me:
                        228318@shakopeeschools.org</p>
                </center>
            </div>
        </footer>
</body>

</html>
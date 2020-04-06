<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$apiKey = "c412172094a97f38ced93e0328a7a830"; //You will need to add in the API Key
$cityId = "5037649"; //Minneapolis City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}

$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>


<html>

<head>
    <title>Minnesota Nice</title>
<link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSMgZJOU6m518_A443vctOUHCbiSFtcAJMJ8i4sVyZ8dW4-IvR6">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/StyleSheet.css">
    <script src='JS/FinalJS.js'></script>
    <style>
        .body {
            font-family: Arial;
            font-size: 0.95em;
            color: #000000;
        }

        .weatherbody {
            font-family: Arial;
            font-size: 0.95em;
            color: #EE0000;
        }

        .report-container {
            border: #EE0000 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 350px;
            margin: 0 auto;
            background-color: gray;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: #212121;
            font-size: 1.2em;
            font-weight: bold;
            margin: 20px 0px;
        }

        span.min-temperature {
            margin-left: 15px;
            color: #000000;
        }

        .time {
            line-height: 25px;
            color: red;
        }

        .align_content_right {
            align-items: right;
        }

        .toppadding {
            padding-top: 20px;
        }

        .blacktext {
            color: black;
        }

        .paragraphMargin {
            margin-left: 20px;
        }

        .mapimagemargin {
            margin-left: 40px;
        }

    </style>
    <script src="JS/jquery-3.4.1.js"></script>
    <!--jQuery is below.-->
    <script>
        $(function() {
            $('h1').addClass('center');
        });

    </script>
</head>

</html>

<body class="body">
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
                    <a class="nav-item nav-link active">Home</a>
                    <a href="MinnehahaFalls.php" class="nav-item nav-link" tabindex="-1">Minnehaha Falls</a>
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
    <div class="page-header headertoppadding">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <div class='row toppadding'>
        <div class='col-sm-8'>
            <p class='blacktext paragraphMargin'>Minneapolis, city, seat of Hennepin county, southeastern Minnesota, U.S. It lies at the head of navigation on the Mississippi River, near the river’s confluence with the Minnesota River. With adjoining St. Paul to the east, it forms the Twin Cities metropolitan area, the largest conurbation in the state and in the U.S. north-central region. Suburban communities include Columbia Heights (north), Brooklyn Park (northwest), Plymouth and St. Louis Park (west), and Richfield and Bloomington (south).</p>
            <center>
                <p>
                    <img src="http://www.allenvanbeek.com/Assets/maps/Twins%20City.jpg" width="600" height="490" longdesc="../assets/maps/Twins City.jpg">
                </p>
            </center>
        </div>
        <div class='col-sm-2 weatherbody'>
            <div class="report-container">
                <h2><?php echo $data->name; ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currentTime); ?></div>
                    <div><?php echo date("jS F, Y",$currentTime); ?></div>
                    <div><?php echo ucwords($data->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <div class="row">
                        <div class='col-sm-3'><img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /></div>
                        <div class='col-sm-3' style="color:<?php echo $color?>;"><?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?></div>
                        <span class="min-temperature col-sm-3"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
                    </div>
                    <div class="time">
                        <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                        <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="footer">
    Webpage made by <span>Mitchell Berg</span>.
    </div>
</body>
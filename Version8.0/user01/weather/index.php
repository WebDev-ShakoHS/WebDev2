<?php
$apiKey = "1c7a89594210d882253d44351760d86b"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'imperial'){//Changes the $temp varaible to match 
    $temp = "F";
}
else {
    $temp = "C";
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
<!DOCTYPE html>
<html lang="en">
<!--Version 7.0
        Name:Radwan Abdalla
        Date Completed:
    -->

<head>
    <link rel="shortcut icon" type="image/png" href="images/p5%20logo.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Radwan's Website</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
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
            font-size: 30px;
            text-align: center;
        }
    </style>
        <title> Forecast Weather using OpenWeatherMap with PHP </title>

    <style>
        body {
            font-family: Arial;
            font-size: 0.95em;
            color: #929292;
            background-color: #ff0909;
        }

        .report-container {
            border: black 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            margin: 0 auto;
            color: black;
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
            color:black;
        }
        
        .text-color { 
            color: black;
        }

    </style>

</head>

<body class="text-color">
    <center>
        <div class="menu">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a href="index.html" class="navbar-brand">Home</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <!---------------------------------- Edit These Items in your Menu ------------->
                            <a href="Elon.html" class="nav-item nav-link">About Elon</a>
                            <a href="Tesla.html" class="nav-item nav-link" tabindex="-1">Tesla</a>
                            <a href="SpaceX.html" class="nav-item nav-link" tabindex="-2">Space X</a>
                            <a href="PayPal.html" class="nav-item nav-link" tabindex="-3">PayPal</a>
                            <a href="TheBoring.html" class="nav-item nav-link" tabindex="-3">The Boring Company</a>
                        <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                    </div>
                </div>
            </nav>
        </div>
    </center>

    <div class="wideMargin" id="content">


        <h2 class="text-left my-3">Home Page</h2>
        


        <!----------------------------------------- All content here---------------------------------------------->
            <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" 
                 class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span 
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span> 
            
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
        <h1>
            <center>
                <p>Elon Musk</p>
            </center>

        </h1>
        <center>

            <img src="images/elon-musk-flamethrower-.jpg" style="height: 400px">
        </center>


        <div class="jumbotron text-center">
            <h1>Elon's Major Companies</h1>
        </div>

    </div>
    <div class="wideMargin" id="footer">
        <p>

            <center>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <h3>Tesla</h3>
                            <center><img src="images/TeslaLogo.jpg" alt="Tesla" style="width:200px;"></center>
                        </div>
                        <div class="col-sm-3">
                            <h3>PayPal</h3>
                            <center><img src="images/PayPal.png" alt="PayPal" style="width:200px;"></center>
                        </div>
                        <div class="col-sm-3">
                            <h3>SpaceX</h3>
                            <center><img src="images/SpaceX%20Rocket.jpg" alt="SpaceX Rocket" style="width: 200px;"></center>
                        </div>
                        <div class="clos-sma-3">
                            <center>
                                <h3> The Boring Company</h3>
                            </center>
                            <img src="images/TheBoringCompany.png" alt="The Boring Company" style="width: 200px;">
                        </div>
                    </div>
                </div>
            </center>

        </p>

        <p>

            Webpage made by <a target="_blank"> Radwan</a>
        </p>
    </div>
</body>

</html>

<?php
$apiKey = "fb6df87cdfc1bf8913613dd7d529bafb"; //You will need to add in the 
$cityId = "561731"; //561731 Gay, Russia: City Id
$units = "imperial"; //metric-Celcius  imperial-Farhenheit
if ($units == 'metric') { //Changes the $temp varaible to match 
    $temp = "C";
} else {
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

<!doctype html>
<html>

<head>
    <title>Current Weather</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WebDev Version 8.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Version8.0/user16/JS/script.js"></script>

    <style>
        body {
            background-image: url(https://media1.giphy.com/media/za5xikuRr0OzK/giphy.gif);
            background-repeat: no-repeat;
            height: 100vh;
            width: 100vw;
            background-size: 230vh, 215vw;
            background-color: #111314;
            color: rgb(243, 243, 243);
            text-decoration-color: rgb(243, 243, 243);
        }

        h1 {
            margin: 0 auto;
            font-size: 2.2em;
            text-align: center;
            color: rgb(243, 243, 243);
            text-decoration-color: rgb(243, 243, 243);
            font-size: 5em;
        }

        .small {
            font-size: 0.000000001rem;
            color: transparent;
        }

        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 550px;
            background-color: black;
            margin-top: 10%;
            margin-left: 35%;
        }

        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }

        .weather-forecast {
            color: rgb(243, 243, 243);
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

        body.sunny {
            background-image: url(https://media3.giphy.com/media/u01ioCe6G8URG/giphy.gif);
        }

        body.cloudy {
            background-image: url(https://i.gifer.com/hEG.gif);
        }

        body.rainy {
            background-image: url(https://thumbs.gfycat.com/AstonishingSecondhandFoxterrier-max-1mb.gif);
        }
    </style>


</head>


<body>

    <!-------------Begin Navbar--------------->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Epic Gamer Website 😎😎😎</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-item nav-link">Streamer Stats</a>
                </li>
                <li class="nav-item">
                    <a href="weather.php" class="nav-item nav-link active">Weather</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-item nav-link">Log In / Sign up</a>
                </li>
                <li class="nav-item">
                    <a href="musicVIBES.html" class="nav-item nav-link">Music</a>
                </li>
                <li class="nav-item">
                    <a href="games.html" class="nav-item nav-link">Games</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.html" class="nav-item nav-link">Page 6</a>
                </li>
            </ul>
        </div>
    </nav>
    <!------------- End Navbar---------->
    <div>
        <div id="weather" class="small">
            <div id="description"></div>
            <h1 id="temp"></h1>
            <div id="location"></div>
        </div>
        <script lang="text/javascript">
            function weatherBalloon(cityID) {
                var key = 'fb6df87cdfc1bf8913613dd7d529bafb';
                fetch('https://api.openweathermap.org/data/2.5/weather?id=' + cityID + '&appid=' + key)
                    .then(function(resp) {
                        return resp.json()
                    }) // Convert data to json
                    .then(function(data) {
                        console.log(data);
                    })
                    .catch(function() {
                        // catch any errors
                    });
            }
            window.onload = function() {
                weatherBalloon(561731);
            }

            function drawWeather(d) {
                var celcius = Math.round(parseFloat(d.main.temp) - 273.15);
                var fahrenheit = Math.round(((parseFloat(d.main.temp) - 273.15) * 1.8) + 32);

                document.getElementById('description').innerHTML = d.weather[0].description;
                document.getElementById('temp').innerHTML = celcius + '&deg;';
                document.getElementById('location').innerHTML = d.name;
            }

            function weatherBalloon(cityID) {
                var key = 'fb6df87cdfc1bf8913613dd7d529bafb';
                fetch('https://api.openweathermap.org/data/2.5/weather?id=' + cityID + '&appid=' + key)
                    .then(function(resp) {
                        return resp.json()
                    }) // Convert data to json
                    .then(function(data) {
                        drawWeather(data); // Call drawWeather
                    })
                    .catch(function() {
                        // catch any errors
                    });
            }

            function drawWeather(d) {
                var celcius = Math.round(parseFloat(d.main.temp) - 273.15);
                var fahrenheit = Math.round(((parseFloat(d.main.temp) - 273.15) * 1.8) + 32);
                var description = d.weather[0].description;

                document.getElementById('description').innerHTML = description;
                document.getElementById('temp').innerHTML = celcius + '&deg;';
                document.getElementById('location').innerHTML = d.name;

                if (description.indexOf('rain') > 0) {
                    document.body.className = 'rainy';
                } else if (description.indexOf('cloud') > 0) {
                    document.body.className = 'cloudy';
                } else if (description.indexOf('sunny') > 0) {
                    document.body.className = 'sunny';
                }
            }
        </script>
        <div class="report-container">
            <h2>Weather Status in <?php echo $data->name; ?>, Russia</h2>
            <div class="time">
                <div><?php echo date("l g:i a", $currentTime); ?></div>
                <div><?php echo date("jS F, Y", $currentTime); ?></div>
                <div><?php echo ucwords($data->weather[0]->description); ?></div>
            </div>
            <div class="weather-forecast">
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
            </div>
            <div class="time">
                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
            </div>
        </div>
    </div>
    <p style='margin-bottom: 200px'></p>
        <!---Footer Start-->
        <style src="CSS/footer.css"></style>
    <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
        <footer>
            <div class="row my-5 justify-content-center py-5">
                <div class="col-11">
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                            <h3 class="text-muted mb-md-0 mb-5 bold-text">My Epic Gamer Website 😎😎😎</h3>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h6 class="mb-3 mb-lg-4 bold-text "><b>Menu</b></h6>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-item nav-link">Streamer Stats</a>
                                </li>
                                <li class="nav-item">
                                    <a href="weather.php" class="nav-item nav-link">Weather</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-item nav-link">Log In / Sign up</a>
                                </li>
                                <li class="nav-item">
                                    <a href="musicVIBES.html" class="nav-item nav-link">Music</a>
                                </li>
                                <li class="nav-item">
                                    <a href="games.html" class="nav-item nav-link">Games</a>
                                </li>
                                <li class="nav-item">
                                    <a href="aboutUs.html" class="nav-item nav-link">Page 6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                            <p class="mb-1">your house</p>
                            <p>yep</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                            <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i
                                        class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span
                                    class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span
                                    class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small
                                class="rights"><span>&#174;</span> My Epic Gamer Website 😎😎😎 All Rights Reserved.</small>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                            <h6 class="mt-55 mt-2 text-muted bold-text"><b>Your mom</b></h6><small> <span><i
                                        class="fa fa-envelope" aria-hidden="true"></i></span> yourmom@mom.com</small>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                            <h6 class="text-muted bold-text"><b>Your dad</b></h6><small><span><i
                                        class="fa fa-envelope" aria-hidden="true"></i></span> yourdad@dad.com</small>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!---Footer End-->
</body>

</html>
<?php
$apiKey = "c412172094a97f38ced93e0328a7a830"; //You will need to add in the API Key
$cityId = "5037649"; //Minneapolis City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}

if ($data->main->temp_max < 32){
    $color='aqua';
}
else{
    $color='red';
}

if ($data->main->temp_max > 32){
    $color='aqua';
}
else{
    $color='red';
}

if ($data->main->temp_max == 32){
    $color='green';
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
    <title>Forecast Weather using OpenWeatherMap with PHP</title>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
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
            background-color: grey;
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
            color:red;
        }

        .align_content_right {
            align-items: right;
        }

    </style>

</head>

<body>

    <div class='row'>
        <div class='col-sm-8'></div>
        <div class='col-sm-2'>
            <div class="report-container">
                <h2><?php echo $data->name; ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currentTime); ?></div>
                    <div><?php echo date("jS F, Y",$currentTime); ?></div>
                    <div><?php echo ucwords($data->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <div class="row"><div class='col-sm-3'><img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /></div>
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

</body>

</html>

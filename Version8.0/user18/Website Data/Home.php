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

<!-- PHP !--->
<?php
$apiKey = "1f96559e21409364ad30f0e971ba00eb"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
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
<!-- END PHP !--->

<link rel="stylesheet" href="style.css">
<script src="JS/SampleJS.js"></script>
<title>Home</title>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>

  </style>
  </style>
</head>

<body class="background1">

  <nav id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Home.php">Home</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/2009-2013.php">2009-2013</a>
    <a href="2014-2017.html">2014-2017</a>
    <a href="2018-2021.html">2018-2021</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Favorites.php">Favorites</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Home.php">Login</a>
  </nav>
  <div id="main">
  <div class="row">
    <button class="openbtn" onclick="openNav()">&#9776;</button>
    <div class="row" style="margin-left: 1%;">
      <h4 style="margin-right: 2%; "><?php echo date("l g:i a", $currentTime); ?> </h4>
      <h4><?php echo date("jS F, Y", $currentTime); ?></h4>
      <h4 <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
    </div>
  </div>
  </div>
  <div style="padding-left:16px">
    <strong>
      <h1 class="headerSize1" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-size: 250%">
        <center>History of PC Gaming</center>
      </h1>
    </strong>
  </div>
  <center>
    <div>
      <h3 id="aboutMeP" style="color: black;">PC Gaming throughout the years of its existence and especially in recent
        years has always proven
        itself to be one of, if not the best way to play games due to its power and customizability. Due to the
        customizability factor, it has evolved drastically throughout the years, and this website is looking to show how.
      </h3>
    </div>
  </center>
  <!-- Slideshow container -->
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/BattleStation1.jpg" alt="BattleStation 1" style="width:100%;">
        </div>

        <div class="item">
          <img src="images/BattleStation2.jpg" alt="BattleStation 1" style="width:100%;">
        </div>

        <div class="item">
          <img src="images/BattleStation3.jpg" alt="BattleStation 3" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-1">
      <button class="returnToTop" onclick="move2019()">2018-2021</button>
    </div>
    <div class="col-sm-10">
      <center><button class="returnToTop" onclick="scrollWindow()">Return to the Top</button></center>
    </div>
    <div class="col-sm-1">
      <button class="returnToTop" onclick="move2009()">2009-2013</button>
    </div>
  </div>
  <footer class="row">
    <div class="col-sm-12">
      <center>
        <p style="color: white;font-size: x-small;">Made by: Noah Peterson -- Contact me: 228318@shakopeeschools.org</p>
      </center>
    </div>
  </footer>
</body>

</html>
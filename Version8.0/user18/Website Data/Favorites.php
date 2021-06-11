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
<?php
require_once "config.php";
$sql = "SELECT * FROM pcdata WHERE selected = 1";

?>
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
        <a href="http://localhost:8080/WebDev2/Version8.0/user18/Website%20Data/Gallery.php">Gallery</a>
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

  <?php 
  if ($result = mysqli_query($link, $sql) ){
  
    if (mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_array($result)){
          echo "<div style='margin: 2%;'>";
          echo "<center>";
          echo "<h1 style='color: black;'> $row[year] </h1>";
          echo "</center>";
          echo "<center>";
          echo "<h4 style='color: black;'> $row[CPU]</h4>";
          echo "<h4 style='color: black;''> $row[GPU]</h4>";
          echo "</center>";
          
      }
    }
  }
  else{
    echo "ERROR";
  }
  ?>
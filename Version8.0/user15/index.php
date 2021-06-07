<?php
$apiKey = "abaea0ffe6cd62f0cddf32db372f91f1"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "metric";//metric-Celcius  imperial-Farhenheit
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





<!DOCTYPE html>
<html lang="en">
<title>Max Meeh Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<script src="JS/script.js"></script>
<head> <link rel="icon" href="fa-address-card"></head>
<!-- Animate -->



<style>
  
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Roboto", sans-serif;
  }

  .w3-sidebar {
    z-index: 3;
    width: 250px;
    top: 43px;
    bottom: 0;
    height: inherit;
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
        href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="index.html" class="w3-bar-item w3-button w3-theme-l1">Home</a>
      <a href="about.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
      <a href="experience.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Experience </a>
      <a href="goals.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Goals</a>
      


    </div>
  </div>

  <!-- Sidebar -->
  <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
      <i class="fa fa-remove"></i>
    </a>
    <h4 class="w3-bar-item"><b>Social Media</b></h4>
    <a class="w3-bar-item w3-button w3-hover-black" href="https://twitter.com/maxmeeh2"><i class="fa fa-twitter-square" aria-hidden="true"></i>    </a>
    <a class="w3-bar-item w3-button w3-hover-black" href="https://www.instagram.com/maxmeeh/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a class="w3-bar-item w3-button w3-hover-black" href="snapchat.com"><i class="fa fa-snapchat" aria-hidden="true"></i></a>
    <a class="w3-bar-item w3-button w3-hover-black" href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i>
    </a>
  </nav>

  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"
    id="myOverlay"></div>

  <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
  <div class="w3-main" style="margin-left:250px">

    <div class="w3-row w3-padding-64">
      <div class="w3-twothird w3-container">
        <h1 class="w3-text-teal"><p id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">
          Max Meeh
          </p></h1>
        <p>Hi im Max Meeh and welcome to my website. Today i will be telling you about myself. I coded this website all by myself so be nice. This website was made using html, css and jave script code. It took me a very long time and i worked hard. 
         </p>
      </div>
       <div class="w3-third w3-container">
      

 


 

       

       </div>

      <div class="w3-row">
        <div class="w3-twothird w3-container">
          <h1 class="w3-text-teal">Family</h1>
          <p>I was born in 2005. I have four sister's. Maddie, Emma, Sofia and Stella. I am directly the middle child. Growing up with alot of siblings you learn to do stuff by yourself. I have basically taught myself most of the stuff i know. That is another reason why i think i work well with and without teamates. </p>
        </div>
        <div class="w3-third w3-container">
        <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
        </div>
      </div>

      <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">
          <h1 class="w3-text-teal">Sports</h1>
          <p>Sport's have been a huge part of my life. As a little kid i played every sport but as i grew up i really focused on soccer. I was exceling and was loving it. Currently right now i am playing u18 Premier 2. Thats a really good level for me and i hope it can push me to make varsity in my sophmore year.</p>
        </div>
        <div class="w3-third w3-container">
              
        </div>
      </div>

      <!-- Pagination -->


      <footer id="myFooter">
        <div class="w3-container w3-theme-l2 w3-padding-32">
          <h4>  <title>Bootstrap Example</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <div class="container">
              <h2>Ways to contact me</h2>
              <p>These are all the best ways to contact me in lure of job opportunities</p>            
              <table class="table">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Peter </td>
                    <td>Meeh</td>
                    <td>Petermeeh05@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Max</td>
                    <td>Meeh</td>
                    <td>maxmeeh08@icloud.com</td>
                  </tr>
                  <tr>
                    <td>Jennifer</td>
                    <td>Tollefson</td>
                    <td>Jtollefson@gmail.com</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
          
          </head></h4>
        </div>

        <div class="w3-container w3-theme-l1">
          <p>Powered by <a href="https://www.shakopee.k12.mn.us/" target="_blank">Shakopee Schools</a></p>
        </div>
      </footer>

      <!-- END MAIN -->
    </div>

    <script>
      // Get the Sidebar
      var mySidebar = document.getElementById("mySidebar");

      // Get the DIV with overlay effect
      var overlayBg = document.getElementById("myOverlay");

      // Toggle between showing and hiding the sidebar, and add overlay effect
      function w3_open() {
        if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
          overlayBg.style.display = "none";
        } else {
          mySidebar.style.display = 'block';
          overlayBg.style.display = "block";
        }
      }

      // Close the sidebar with the close button
      function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
      }
    </script>

</body>

</html>
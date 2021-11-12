<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.baseball.ico" />
    <title>Baseball.com </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Home Page">

    <!-- Custom styles for this template -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 30px;
        }

        footer {
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>

<body>

    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.html" class="nav-item nav-link active" tabindex="-1">Home</a>
                    <a href="bat.html" class="nav-item nav-link active">Baseball Bats</a>
                    <a href="glove.html" class="nav-item nav-link active">Gloves</a>
                    <a href="grip.html" class="nav-item nav-link active">Accessories</a>
                    <a href="weather.php" class="nav-item nav-link active">Bat Size</a>
                    <a href="ebay.php" class="nav-item nav-link active">Bats on eBay</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">

                </div>
            </div>
        </nav>
        <h1 class="text-left my-3">
            <center>Calculator</center>
        </h1>
        </p>
        <script>
            function printWindow4() {
                window.print();
            }
        </script>
        <button class="btn btn-dark btn-md" onclick="printWindow4()">Print</button>
        <script>
            function survey() {
                window.location.href = 'https://forms.gle/8K5JkHEAaHk3efum7'
            }
        </script>
        <button class="btn btn-dark btn-md" onclick="survey()">Survey</button>
        <p></p>

    </div>



    <div>
        <label>Change Webpage Background To:</label>
        <p></p>
        <button type="button" onclick="changeBodyBg('yellow');">Yellow</button>
        <button type="button" onclick="changeBodyBg('lime');">Lime</button>
        <button type="button" onclick="changeBodyBg('orange');">Orange</button>
        <p></p>
        <button type="button" onclick="changeBodyBg('red');">Red</button>
        <button type="button" onclick="changeBodyBg('white');">White</button>
        <button type="button" onclick="changeBodyBg('blue');">Blue</button>
        <p></p>
        <button type="button" onclick="changeBodyBg('pink');">Pink</button>
        <button type="button" onclick="changeBodyBg('purple');">Purple </button>
        <button type="button" onclick="changeBodyBg('lightblue');">Light Blue</button>
        <p></p>


    </div>
    <script>
        function changeBodyBg(color) {
            document.body.style.background = color;
        }

    </script>
    

    <FORM name="live">
        <p style="margin-left: 441px; margin-bottom: 500px;" border=0>
            Please enter your age::<INPUT TYPE="text" NAME="age" VALUE="" SIZE=20>
            Example: (november 1,1966) <BR><BR><BR>
            <INPUT TYPE="button" NAME="start" VALUE="Bat Size" ONCLICK="lifetimer(this.form)">

            <INPUT TYPE="reset" NAME="resetb" VALUE="Reset">

        <table>
            <TR>
                <TD>You are days old:</TD>

                <TD>

                    <INPUT TYPE="text" NAME="time1" VALUE="" size=8>

                </TD>

            </TR>

            <TR>
                <TD>Plus hours old:</TD>

                <TD>

                    <INPUT TYPE="text" NAME="time2" VALUE="" size=8>

                </TD>

            </TR>

            <TR>
                <TD>Plus minutes old:</TD>

                <TD><INPUT TYPE="text" NAME="time3" VALUE="" size=8></TD>
            </TR>

            <TR>
                <TD>Plus seconds old:</TD>

                <TD><INPUT TYPE="text" NAME="time4" VALUE="" size=8></TD>

            </TR>
        </TABLE>


        <table>
            </TR>

            <TR>
                <TD>Right size for you: </TD>

                <TD><INPUT TYPE="text" NAME="length5" VALUE="" size=8></TD>

            </TR>
        </TABLE>
    </FORM>










    <main>
        <div id="built-in-functions">
            <!-- ALERT-->

            <!--PRINT-->


            <div class="container-fluid mt-3 mb-3">
                <div class="row">
                    <main class="wideMargin">

                        <SCRIPT LANGUAGE="JAVASCRIPT">
                            function lifetimer() {
                                today = new Date()

                                BirthDay = new Date(document.live.age.value)

                                timeold = (today.getTime() - BirthDay.getTime());

                                msPerDay = 24 * 60 * 60 * 1000;

                                timeold = (today.getTime() - BirthDay.getTime());

                                e_daysold = timeold / msPerDay;

                                daysold = Math.floor(e_daysold);

                                e_hrsold = (e_daysold - daysold) * 24;

                                hrsold = Math.floor(e_hrsold);
                                e_minsold = (e_hrsold - hrsold) * 60;

                                minsold = Math.floor((e_hrsold - hrsold) * 60);

                                secondsold = Math.floor((e_minsold - minsold) * 60);




                                document.live.time1.value = daysold

                                document.live.time2.value = hrsold

                                document.live.time3.value = minsold

                                document.live.time4.value = secondsold

                                if (daysold > 0 & daysold < 4379) amount = 31;
                                if (daysold > 4380 & daysold < 5110) amount = 32;
                                if (daysold > 5111) amount = 33;

                                document.live.length5.value = amount


                                function myFunction() {
                                    var r = confirm("Would you like to check out some bats that are the right length for you?");
                                    if (r == true) {
                                        if (amount == 31) {
                                            window.location.href = 'https://www.justbats.com/products/bat%20type~baseball/length~31%20inch/';
                                        }
                                        if (amount == 32) {
                                            window.location.href = 'https://www.justbats.com/products/bat%20type~baseball/length~32%20inch/';
                                        }
                                        if (amount == 33) {
                                            window.location.href = 'https://www.justbats.com/products/bat%20type~baseball/length~33%20inch/'; {}

                                        }

                                    }
                                }
                                myFunction();

                            }





                            // -- done hiding from old browsers -->
                        </script>

                    </main>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Make sure all your content is above this line ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->


                    <!---------------------------------- Begin the footer ------------->
                    <footer class="wideMargin">
                        <center>

                            </p>
                            <footer class="page-footer font-small blue pt-4">

                                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                                <!-- Footer Links -->
                                <div class="container-fluid text-center text-md-left">

                                    <!-- Grid row -->
                                    <div class="row">

                                        <!-- Grid column -->
                                        <div class="col-md-6 mt-md-0 mt-3">

                                            <!-- Content -->
                                            <h5 class="text-uppercase">A little bit about the owner:</h5>
                                            <p>My name is Alex Duncan I am a 2023 Grad at Shakopee High School. I love to play sports and spend time with my friends and family. I love getting rowdy at football games and making people laugh. I enjoy engieering and baseball as well as working with technology </p>
                                            <img src="https://pbs.twimg.com/profile_images/1339937986172116992/jtNXkOgV_400x400.jpg" style="width:120px;height:120px;" alt="Picture of Website owner">
                                        </div>
                                        <!-- Grid column -->

                                        <hr class="clearfix w-100 d-md-none pb-3">

                                        <!-- Grid column -->
                                        <div class="col-md-3 mb-md-0 mb-3">

                                            <!-- Links -->
                                            <h4 class="text-uppercase">Follow our Socials</h4>

                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fa fa-facebook"></i>
                                                    <a href="https://facebook.com">FaceBook</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-twitter"></i>
                                                    <a href="https://twitter.com">Twitter</a>

                                                </li>
                                                <li>
                                                    <i class="fa fa-instagram"></i>
                                                    <a href="https://www.instagram.com">Instagram</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-music"></i>
                                                    <a href="https://spotify.com">My Playlist</a>
                                                </li>
                                                </li>
                        </center>
                    </footer>
                    <!---------------------------------- End the footer ------------->
                    <?php
                    $apiKey = "f00c11b5cba83b15505ddc5319887254"; //You will need to add in the 
                    $cityId = "5046997"; //5046997 Shakopee City Id
                    $units = "imperial"; //metric-Celcius  imperial-Farhenheit
                    if ($units == 'imperial') { //Changes the $temp varaible to match 
                        $temp = "F";
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
                        <title>Forecast Weather using OpenWeatherMap with PHP</title>
                        <?php
                        $t = date("H");



                        ?>
                        <style>
                            body {
                                font-family: Arial;
                                font-size: 1em;
                                background-image: <?php


                                                    ?>
                            }

                            .report-container {
                                border: white 1px solid;
                                padding: 20px 40px 40px 40px;
                                border-radius: 2px;
                                width: 550px;
                                margin: 0 auto;
                            }

                            .weather-icon {
                                vertical-align: middle;
                                margin-right: 20px;
                            }

                            .weather-forecast {
                                color: #212121;
                                font-size: 1.2em;
                                font-weight: bold;
                                margin: 30px 0px;
                            }

                            span.min-temperature {
                                margin-left: 15px;
                                color: #929292;
                            }

                            .time {
                                line-height: 25px;
                            }
                        </style>

                    </head>


                    <div class="report-container">
                        <h2><?php echo $data->name; ?> Weather Status</h2>
                        <div class="time">
                            <div><?php echo date("l g:i a", $currentTime); ?></div>
                            <div><?php echo date("jS F, Y", $currentTime); ?></div>
                            <div><?php echo ucwords($data->weather[0]->description); ?></div>
                        </div>
                        <div class="weather-forecast">
                            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="temperature"><?php echo $data->main->temp; ?>&deg;<?php echo $temp; ?></span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
                        </div>
                        <div class="time">
                            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                            <div>Wind: <?php echo $data->wind->speed; ?>mph/h</div>
                        </div>
                    </div>

</body>

</html>
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

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>
</head>

<body style="background-image: url(images/cool-background.png);background-size: cover;">
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
    <div class="row">

        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2009PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2009</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2010PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2010</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2011PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2011</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2012PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2012</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2013PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2013</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2014PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2014</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2015PC.png" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2015</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2016PC.jpeg" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2016</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2017PC.jpeg" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2017</h2>
            </div>
        </div>

        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2018PC.jpeg" alt="2018 PC" style="width:100%">
            <div class="card-body">
                <h2 class="card-title">2018</h2>
            </div>
        </div>

        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2019PC.jpg" alt="2019 PC" style="width:100%">
            <div class="card-body">
                <h2 class="card-title">2019</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2020PC.jpg" alt="2020 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2020</h2>
            </div>
        </div>
        <div class="card" style="width:400px;margin: 3%;">
            <img class="card-img-top" src="PCElements/2021PC.jpg" alt="2021 PC" style="width:100%;padding-bottom: 20%;">
            <div class="card-body">
                <h2 class="card-title">2021</h2>
            </div>
        </div>


    </div>

    <footer class="row">
        <div class="col-sm-12">
            <center>
                <p style="color: black;font-size: small;">Made by: Noah Peterson -- Contact me: 228318@shakopeeschools.org</p>
            </center>
        </div>
    </footer>
</body>

</html>
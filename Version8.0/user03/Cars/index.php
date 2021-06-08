<?php  include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="bestcars.php">Best Cars</a></li>
                <li><a href="trucks.php">Buy Truck</a></li>
                <li><a href="boostrap.php">Buy Cars</a></li>
                <li><a href="motorcycles.php">Buy Motorcycle</a></li>
            </ul>
        </div>
    </nav>

    <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>Car Brand & Model</label>
			<input type="text" name="Car Brand & Model" value="">
		</div>
		<div class="input-group">
			<label>State & City</label>
			<input type="text" name="State & City" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="Search" >Search</button>
		</div>
	</form>

    <body>
        <h3>New a new car?</h3>
        <p><a href="boostrap.php">Click Her</a></p>

        <p><a href="form.php">Sign In</a></p>


        <h2>Best Cars On Sale</h2>
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(255, 7, 7, 0);
                transition: 0.3s;
                width: 40%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgb(255, 0, 0);
            }
        </style>
        <div class="card">
            <img src="images/r32.jpeg" alt="Car" style="width:100%">
            <div class="container">
                <h2>Nissan Gtr R32</h2>
                <h3>$110,500</h3>
            </div>
        </div>

        <div class="card">
            <img src="images/r34.jpeg" alt="Car" style="width:100%">
            <div class="container">
                <h2>Nissan Gtr R34</h2>
                <h3>$125,000</h3>
            </div>
        </div>

    </body>

</html>
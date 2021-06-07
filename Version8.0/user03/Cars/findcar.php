<?php  include('boostrap.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
    <a href="http://localhost:8080/WebDev2/Version8.0/user03/Cars/boostrap.php" target="_blank">Buy New Car</a>
</body>
</html>
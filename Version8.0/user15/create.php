<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

<div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
        href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">Home</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
      <a href="experience.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Experience</a>
      <a href="goals.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Goals</a> 
      <a href="eBayAPI.php"class="w3-bar-item w3-button w3-hide-small w3-hover-white">Shop</a>
      <a href="create.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Survey</a>
      <a href="read.php"   class="w3-bar-item w3-button w3-hide-small w3-hover-white">Results</a> 
      <a href="update.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Update</a>
      <a href="delete.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Delete</a>  
    </div>
  </div>


<?php



// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$car = $animal = $number = $superhero = $movie = "";
$car_err = $animal_err = $number_err = $superhero = $movie ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_car = trim($_POST["car"]);
    if(empty($input_car)){
        $car_err = "Please enter a car.";
    } elseif(!filter_var($input_car, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $car_err = "Please enter a valid car.";
    } else{
        $car = $input_car;
    }
    $input_superhero = trim($_POST["superhero"]);
    if(empty($input_superhero)){
        $superhero_err = "Please enter an superhero.";     
    } else{
        $superhero = $input_superhero;
    }
    $input_movie = trim($_POST["movie"]);
    if(empty($input_movie)){
        $movie_err = "Please enter an movie.";     
    } else{
        $movie = $input_movie;
    }
    // Validate address
    $input_animal = trim($_POST["animal"]);
    if(empty($input_animal)){
        $animal_err = "Please enter an animal.";     
    } else{
        $animal = $input_animal;
    }
    
    // Validate salary
    $input_number = trim($_POST["number"]);
    if(empty($input_number)){
        $number_err = "Please enter the number amount.";     
    } elseif(!ctype_digit($input_number)){
        $number_err = "Please enter a positive integer value.";
    } else{
        $number = $input_number;
    }
    
    // Check input errors before inserting in database
    if(empty($car_err) && empty($animal_err) && empty($number_err) && empty($superhero_err) && empty($movie_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO survey (car, animal, number, superhero, movie) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_car, $param_animal, $param_number, $param_superhero);
            
            // Set parameters
            $param_car = $car;
            $param_animal = $animal;
            $param_number = $number;
            $param_superhero = $superhero;
            $param_movie = $movie;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>please fill out this survey to help better serve the community</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Favorite Car?</label>
                            <input type="text" name="car" class="form-control <?php echo (!empty($car_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $car; ?>">
                            <span class="invalid-feedback"><?php echo $car_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Favorit Animal?</label>
                            <textarea name="animal" class="form-control <?php echo (!empty($animal_err)) ? 'is-invalid' : ''; ?>"><?php echo $animal; ?></textarea>
                            <span class="invalid-feedback"><?php echo $animal_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Favorite Movie?</label>
                            <textarea name="movie" class="form-control <?php echo (!empty($movie_err)) ? 'is-invalid' : ''; ?>"><?php echo $movie; ?></textarea>
                            <span class="invalid-feedback"><?php echo $movie_err;?></span>
                        </div>
                    
                    
                        <div class="form-group">
                            <label>Favorite Superhero?</label>
                            <textarea name="superhero" class="form-control <?php echo (!empty($superhero_err)) ? 'is-invalid' : ''; ?>"><?php echo $superhero; ?></textarea>
                            <span class="invalid-feedback"><?php echo $superhero_err;?></span>
                        </div>
                        
                        <div class="form-group">
                            <label>Favorite Number?</label>
                            <input type="text" name="number" class="form-control <?php echo (!empty($number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $number; ?>">
                            <span class="invalid-feedback"><?php echo $number_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
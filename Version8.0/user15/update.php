<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$car = $animal = $number = $movie = $superhero ="";
$car_err = $animal_err = $number_err = $movie = $superhero ="";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_car = trim($_POST["car"]);
    if(empty($input_car)){
        $car_err = "Please enter a car.";
    } elseif(!filter_var($input_car, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $car_err = "Please enter a valid car.";
    } else{
        $car = $input_car;
    }
    $input_movie = trim($_POST["movie"]);
    if(empty($input_movie)){
        $movie_err = "please enter a movie.";
    } elseif(!filter_var($input_movie, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $movie_err = "Please enter a valid car.";
    } else{
        $movie = $input_movie;
    }
    // Validate address address
    $input_animal = trim($_POST["animal"]);
    if(empty($input_animal)){
        $animal_err = "Please enter an animal.";     
    } else{
        $animal = $input_animal;
    }
    
    // Validate salary
    $input_number = trim($_POST["salary"]);
    if(empty($input_number)){
        $number_err = "Please enter the number amount.";     
    } elseif(!ctype_digit($input_number)){
        $number_err = "Please enter a positive integer value.";
    } else{
        $number = $input_number;
    }
    $input_superhero = trim($_POST["superhero"]);
    if(empty($input_superhero)){
        $superhero_err = "please enter a movie.";
    } elseif(!filter_var($input_superhero, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $superhero_err = "Please enter a valid car.";
    } else{
        $superhero = $input_superhero;
    }



    // Check input errors before inserting in database
    if(empty($car_err) && empty($animal_err) && empty($number_err) && empty($superhero_err) && empty($movie_err) ){
        // Prepare an update statement
        $sql = "UPDATE survey SET car=?, animal=?, number=?, movie=?, superhero=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_car, $param_animal, $param_number, $param_movie, $param_superhero, $param_id);
            
            // Set parameters
            $param_car = $car;
            $param_animal = $animal;
            $param_number = $number;
            $param_movie = $movie;
            $param_superhero = $superhero;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM survey WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $car = $row["car"];
                    $animal = $row["animal"];
                    $number = $row["number"];
                    $movie = $row ["movie"];
                    $superhero = $superhero ["superhero"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>car</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($car_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $car; ?>">
                            <span class="invalid-feedback"><?php echo $car_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Animal</label>
                            <textarea name="animal" class="form-control <?php echo (!empty($animal_err)) ? 'is-invalid' : ''; ?>"><?php echo $animal; ?></textarea>
                            <span class="invalid-feedback"><?php echo $animal_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Number's</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $number; ?>">
                            <span class="invalid-feedback"><?php echo $number_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Movie</label>
                            <textarea name="movie" class="form-control <?php echo (!empty($movie_err)) ? 'is-invalid' : ''; ?>"><?php echo $movie; ?></textarea>
                            <span class="invalid-feedback"><?php echo $movie_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>superhero</label>
                            <textarea name="superhero" class="form-control <?php echo (!empty($superhero_err)) ? 'is-invalid' : ''; ?>"><?php echo $superhero; ?></textarea>
                            <span class="invalid-feedback"><?php echo $superhero_err;?></span>
                        </div>


                      
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    
                    
                    
                    
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

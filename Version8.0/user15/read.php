<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM survey WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
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
                $movie = $row["movie"];
                $animal = $row["animal"];
                $number = $row["number"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: read.php");
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
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>car</label>
                        <p><b><?php echo $row["car"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Animal</label>
                        <p><b><?php echo $row["animal"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>movie</label>
                        <p><b><?php echo $row["movie"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>superhero</label>
                        <p><b><?php echo $row["superhero"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>number</label>
                        <p><b><?php echo $row["number"]; ?></b></p>
                    </div>
                   
                   
                   
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
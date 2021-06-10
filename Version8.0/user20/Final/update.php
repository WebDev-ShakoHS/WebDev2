<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$country = $days = $ticketcost = "";
$country_err = $days_err = $ticketcost_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_country = trim($_POST["country"]);
    if(empty($input_country)){
        $country_err = "Please enter a country.";
    } elseif(!filter_var($input_country, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $country_err = "Please enter a valid country.";
    } else{
        $country = $input_country;
    }
    
    // Validate address address
    $input_days = trim($_POST["days"]);
    if(empty($input_days)){
        $days_err = "Please enter the amount of days.";     
    } else{
        $days = $input_days;
    }
    
    // Validate salary
    $input_ticketcost = trim($_POST["ticketcost"]);
    if(empty($input_ticketcost)){
        $ticketcost_err = "Please enter the ticketcost.";     
    } elseif(!ctype_digit($input_ticketcost)){
        $ticketcost_err = "Please enter a positive integer value.";
    } else{
        $ticketcost = $input_ticketcost;
    }
    
    // Check input errors before inserting in database
    if(empty($country_err) && empty($days_err) && empty($ticketcost_err)){
        // Prepare an update statement
        $sql = "UPDATE place SET country=?, days=?, ticketcost=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_country, $param_days, $param_ticketcost, $param_id);
            
            // Set parameters
            $param_country = $country;
            $param_days = $days;
            $param_ticketcost = $ticketcost;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: list.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
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
        $sql = "SELECT * FROM place WHERE id = ?";
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
                    $country = $row["country"];
                    $days = $row["days"];
                    $ticketcost = $row["ticketcost"];
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
    <title>Update List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        body {
            background-image: url('https://images.squarespace-cdn.com/content/v1/5a25bbc8b7411c77598db2c0/1577850846941-8QDK2ZKLB51ZCGX2PQDH/ke17ZwdGBToddI8pDm48kNET8BKYjHMXG7tprpZM-q57gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0mxU0godxi02JM9uVemPLqw9u9iWUd3zIRhGdFnfyXQi7Pl7OIdqFY6TeoS_-MjnTQ/santorini.jpg?format=2500w')
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update List</h2>
                    </div>
                    <p>Please edit this list and submit again.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($country_err)) ? 'has-error' : ''; ?>">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control" value="<?php echo $country; ?>">
                            <span class="help-block"><?php echo $country_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($days_err)) ? 'has-error' : ''; ?>">
                            <label>Days</label>
                            <textarea name="days" class="form-control"><?php echo $days; ?></textarea>
                            <span class="help-block"><?php echo $days_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($ticketcost_err)) ? 'has-error' : ''; ?>">
                            <label>Ticket Cost</label>
                            <input type="text" name="ticketcost" class="form-control" value="<?php echo $ticketcost; ?>">
                            <span class="help-block"><?php echo $ticketcost_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="list.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
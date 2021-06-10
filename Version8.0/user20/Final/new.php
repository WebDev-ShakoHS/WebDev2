<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$country = $days = $ticketcost = "";
$country_err = $days_err = $ticketcost_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate country
    $input_country = trim($_POST["country"]);
    if(empty($input_country)){
        $country_err = "Please enter a country.";
    } elseif(!filter_var($input_country, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $country_err = "Please enter a country";
    } else{
        $country = $input_country;
    }
    
    // Validate days
    $input_days = trim($_POST["days"]);
    if(empty($input_days)){
        $days_err = "Please enter the number of days.";     
    } else{
        $days = $input_days;
    }
    
    // Validate ticket cost
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
        // Prepare an insert statement
        $sql = "INSERT INTO place (country, days, ticketcost) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_country, $param_days, $param_ticketcost);
            
            // Set parameters
            $param_country = $country;
            $param_days = $days;
            $param_ticketcost = $ticketcost;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location:list.php");
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Your List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        body {
            background-image: url('https://i.pinimg.com/originals/58/fe/f4/58fef4b8387260559c6d4c576f163eeb.jpg');
        }
        
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Your Traveling List</h2>
                    </div>
                    <p>Fill this form to add your future travels.</p>
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
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="list.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
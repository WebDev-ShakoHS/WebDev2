<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$ticker = $buyprice = $sellprice = $profitloss = "";
$ticker_err = $buyprice_err = $sellprice_err = $profitloss_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_ticker = trim($_POST["Ticker"]);
    if(empty($input_ticker)){
        $ticker_err = "Please enter a Ticker.";
    } else{
        $ticker = $input_ticker;
    }
    
    // Validate address
    $input_buyprice = trim($_POST["Buyprice"]);
    if(empty($input_buyprice)){
        $buyprice_err = "Please enter the Buy Price."; 
    } elseif(!ctype_digit($input_buyprice)){
        $buyprice_err = "Please enter a positive integer value.";    
    } else{
        $buyprice = $input_buyprice;
    }

    $input_sellprice = trim($_POST["sellprice"]);
    if(empty($input_sellprice)){
        $sellprice_err = "Please enter the Sell Price."; 
    } elseif(!ctype_digit($input_sellprice)){
        $sellprice_err = "Please enter a positive integer value.";    
    } else{
        $sellprice = $input_sellprice;
    }
    
    // Validate salary
    $input_profitloss = trim($_POST["Profitloss"]);
    if(empty($input_profitloss)){
        $profitloss_err = "Please enter the profit/loss amount.";     
    } else{
        $profitloss = $input_profitloss;
    }
    
    // Check input errors before inserting in database
    if(empty($ticker_err) && empty($buyprice_err) && empty($sellprice_err) && empty($profitloss_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO trades (Ticker, Buyprice, sellprice, Profitloss) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_ticker, $param_buyprice, $param_sellprice, $param_profitloss);
            
            // Set parameters
            $param_ticker = $ticker;
            $param_buyprice = $buyprice;
            $param_sellprice = $sellprice;
            $param_profitloss = $profitloss;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
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
    <title>Add Trade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Add Trade</h2>
                    </div>
                    <p>Please submit this form to add additional trades to The Option Guys.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($ticker_err)) ? 'has-error' : ''; ?>">
                            <label>Stock Ticker</label>
                            <input type="text" name="Ticker" class="form-control" value="<?php echo $ticker; ?>">
                            <span class="help-block"><?php echo $ticker_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($buyprice_err)) ? 'has-error' : ''; ?>">
                            <label>Buy Price</label>
                            <input type="text" name="Buyprice" class="form-control" value="<?php echo $buyprice; ?>">
                            <span class="help-block"><?php echo $buyprice_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sellprice_err)) ? 'has-error' : ''; ?>">
                            <label>Sell Price</label>
                            <input type="text" name="sellprice" class="form-control" value="<?php echo $sellprice; ?>">
                            <span class="help-block"><?php echo $sellprice_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($profitloss_err)) ? 'has-error' : ''; ?>">
                            <label>Profit/Loss Amount</label>
                            <input type="text" name="Profitloss" class="form-control" value="<?php echo $profitloss; ?>">
                            <span class="help-block"><?php echo $profitloss_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
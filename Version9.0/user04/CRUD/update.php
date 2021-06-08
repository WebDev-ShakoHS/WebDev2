<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$ticker = $buyprice = $sellprice = $profitloss = "";
$ticker_err = $buyprice_err = $sellprice_err = $profitloss_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_ticker = trim($_POST["Ticker"]);
    if(empty($input_ticker)){
        $ticker_err = "Please enter a Ticker.";
    } else{
        $ticker = $input_ticker;
    }
    
    // Validate address address
    $input_buyprice = trim($_POST["Buyprice"]);
    if(empty($input_buyprice)){
        $buyprice_err = "Please enter an address.";     
    } else{
        $buyprice = $input_buyprice;
    }
    
    $input_sellprice = trim($_POST["sellprice"]);
    if(empty($input_sellprice)){
        $sellprice_err = "Please enter the Sell Price.";     
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
            mysqli_stmt_bind_param($stmt, "ssssi", $param_ticker, $param_buyprice, $param_sellprice, $param_profitloss, $param_id);
            
            // Set parameters
            $param_ticker = $ticker;
            $param_buyprice = $buyprice;
            $param_sellprice = $sellprice;
            $param_profitloss = $profitloss;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM trades WHERE id = ?";
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
                    $ticker = $row["Ticker"];
                    $buyprice = $row["Buyprice"];
                    $sellprice = $row["sellprice"];
                    $profitloss = $row["Profitloss"];
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($ticker_err)) ? 'has-error' : ''; ?>">
                            <label>Ticker</label>
                            <input type="text" name="Ticker" class="form-control" value="<?php echo $ticker; ?>">
                            <span class="help-block"><?php echo $ticker_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($buyprice_err)) ? 'has-error' : ''; ?>">
                            <label>Buy Price</label>
                            <textarea name="Buyprice" class="form-control"><?php echo $buyprice; ?></textarea>
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
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
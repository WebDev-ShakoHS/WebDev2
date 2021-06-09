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
    
    <link rel="icon" type="image/x-icon" href="images/favicon copy.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/finalstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/finalscript.js"></script>

    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
        .text{
            font-size: 15px;
            margin-top: 50px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

</head>
<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">


            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="topnav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="aboutUsDiscord.html" class="nav-item nav-link ">About Us</a>
                    <a href="leadershipSocialMedia.html" class="nav-item nav-link">Leadership</a>
                    <a href="tradePortfolio.html" class="nav-item nav-link">Profits</a>
                 <a href="http://localhost:8080/WebDev2/Version7.0/user04/api.php" class="nav-item nav-link">Stock Prices</a>
                    <a href="http://localhost:8080/WebDev2/Version7.0/user04/create.php" class="nav-item nav-link active">Trade Journal</a>
                </div>
            </div>
        </nav>
</div>
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

    <p class="space3 text text-center">
    Please make sure that the details of your trade are accurate before submitting. Using a dollar sign ("$") is recommended. When putting in the profit/loss amount please include a "-" symbol for trades that resulted in a loss. While trading it is best to use proper risk-management and invest safely. Follow The Option Guys on Instagram and join the Discord for more free strategies, trades, and information.
    </p>    

</body>
<footer class="page-footer font-small blue-grey lighten-5 margin">

    <div style="background-color: #04c40d;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 size">Follow The Option Guys on our Instagram!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Instagram-->
                    <a class="ins-ic">
                        <button type="button" class="btn btn-ins"><i class="fa fa-instagram left"></i>
                            <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/theoptionguys?utm_medium=copy_link">Instagram</a></button>
                    </a>

                </div>
                <!-- Grid column -->


                <!-- Grid row-->

            </div>
        </div>

        <div>

            <footer class="page-footer font-small green pt-4">



                <div class="container-fluid text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-6 mt-md-0 mt-3">

                            <!-- Content -->
                            <h5 class="text-uppercase">The Option Guys</h5>
                            <p>The Option Guys is dedicated to making our community stronger and bigger through the
                                distribution of knowledge of investing and trading strategy to help you achieve
                                financial security .</p>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none pb-3">

                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase">Helpful Pages</h5>

                            <ul class="list-unstyled">
                                <li class="padding">
                                    <a href="#">About Us</a>
                                </li>
                                <li class="padding">
                                    <a href="#">Profits</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 mb-md-0 mb-3">

                            <!-- Links -->
                            <h5 class="text-uppercase">Social Media</h5>

                            <ul class="list-unstyled">
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://discord.gg/FHJAxSvpHP" onclick="myFunction()">The Option Guys Discord</a></button>
                                </li>
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://www.instagram.com/optionstender/">Optionstender</a>
                                </li>
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/prodigystocks?utm_medium=copy_link">ProdigyStocks</a>
                                </li>
                                <li>
                                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/stockshare_?utm_medium=copy_link">StockShare_</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a onmouseover="style.color='red'" onmouseout="style.color='black'" onmousedown="color(this,'red')" onmouseup="color(this,'green')" href="https://instagram.com/theoptionguys?utm_medium=copy_link">The Option Guys</a>
                </div>
                <!-- Copyright -->

            </footer>
        </div>
    </div>
</footer>
</html>
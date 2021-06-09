<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

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
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
        .text{
            font-size: 20px;
            margin-top: 50px;
            margin-left: 30px;
            margin-right: 30px;
            margin-bottom: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="menu">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">


        <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="topnav">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="aboutUsDiscord.html" class="nav-item nav-link ">About Us</a>
                <a href="leadershipSocialMedia.html" class="nav-item nav-link">Leadership</a>
                <a href="tradePortfolio.html" class="nav-item nav-link">Profits</a>
                <a href="http://localhost:8080/WebDev2/Version7.0/user04/api.php" class="nav-item nav-link">Stock Prices</a>
                <a href="http://localhost:8080/WebDev2/Version7.0/user04/index.php" class="nav-item nav-link active">Trade Journal</a>
             </div>
         </div>
    </nav>
</div>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Trade Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Trade</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM trades";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Ticker</th>";
                                        echo "<th>Buyprice</th>";
                                        echo "<th>sellprice</th>";
                                        echo "<th>Profitloss</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['model_id'] . "</td>";
                                        echo "<td>" . $row['Ticker'] . "</td>";
                                        echo "<td>" . $row['Buyprice'] . "</td>";
                                        echo "<td>" . $row['sellprice'] . "</td>";
                                        echo "<td>" . $row['Profitloss'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?model_id=". $row['model_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?model_id=". $row['model_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?model_id=". $row['model_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>

    <p class="space3 text text-center">
        These are the details of the trades you have entered so far. Click on some of the options to view details, edit, or delete any of your past trades. WARNING- Any trades that you delete are not be able to be restored. While trading it is best to use proper risk-management and invest safely. Follow The Option Guys on Instagram and join the Discord for more free strategies, trades, and information.
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
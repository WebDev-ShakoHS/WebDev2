<?php
// Process delete operation after confirmation
if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Include config file
    require_once "config.php";

    // Prepare a delete statement
    $sql = "DELETE FROM employees WHERE id = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        // Set parameters
        $param_id = trim($_POST["id"]);

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
} else {
    // Check existence of id parameter
    if (empty(trim($_GET["id"]))) {
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
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        body {
            background-color: #111314;
        }
    </style>
</head>

<body>
    <!-------------Begin Navbar--------------->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">My Epic Gamer Website 😎😎😎</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-item nav-link active">Streamer Stats</a>
                </li>
                <li class="nav-item">
                    <a href="weather.php" class="nav-item nav-link">Weather</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-item nav-link">Log In / Sign up</a>
                </li>
                <li class="nav-item">
                    <a href="musicVIBES.html" class="nav-item nav-link">Music</a>
                </li>
                <li class="nav-item">
                    <a href="games.html" class="nav-item nav-link">Games</a>
                </li>
                <li class="nav-item">
                    <a href="aboutUs.html" class="nav-item nav-link">Page 6</a>
                </li>
            </ul>
        </div>
    </nav>
    <!------------- End Navbar---------->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />
                            <p>Are you sure you want to delete this employee record?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="index.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---Footer Start-->
    <style src="CSS/footer.css"></style>
    <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
        <footer>
            <div class="row my-5 justify-content-center py-5">
                <div class="col-11">
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                            <h3 class="text-muted mb-md-0 mb-5 bold-text">My Epic Gamer Website 😎😎😎</h3>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h6 class="mb-3 mb-lg-4 bold-text "><b>Menu</b></h6>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-item nav-link">Streamer Stats</a>
                                </li>
                                <li class="nav-item">
                                    <a href="weather.php" class="nav-item nav-link">Weather</a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-item nav-link">Log In / Sign up</a>
                                </li>
                                <li class="nav-item">
                                    <a href="musicVIBES.html" class="nav-item nav-link">Music</a>
                                </li>
                                <li class="nav-item">
                                    <a href="games.html" class="nav-item nav-link">Games</a>
                                </li>
                                <li class="nav-item">
                                    <a href="aboutUs.html" class="nav-item nav-link">Page 6</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                            <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>ADDRESS</b></h6>
                            <p class="mb-1">your house</p>
                            <p>yep</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                            <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span> My Epic Gamer Website 😎😎😎 All Rights Reserved.</small>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                            <h6 class="mt-55 mt-2 text-muted bold-text"><b>Your mom</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> yourmom@mom.com</small>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                            <h6 class="text-muted bold-text"><b>Your dad</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> yourdad@dad.com</small>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!---Footer End-->
</body>

</html>
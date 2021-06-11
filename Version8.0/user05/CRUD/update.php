<?php
$state = 0;
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $style = $dates = "";
$name_err = $style_err = $dates_err = "";

// Set parameters
$state = 1;

// Processing form data when form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_name = trim($_POST["name"]);
    $state = 2;
    // Get hidden input value

    // Validate name
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        $name_err = "Please enter a valid name.";
    }
    $state = 3;

    // Validate style
    $input_style = trim($_POST["style"]);
    if (empty($input_style)) {
        $style_err = "Please enter an style.";
    } else {
        $style = $input_style;
    }
    $state = 4;

    // Validate dates
    $input_dates = trim($_POST["dates"]);
    if (empty($input_dates)) {
        $dates_err = "Please enter the date.";
    } elseif (!ctype_digit($input_dates)) {
        $dates_err = "Please enter a positive integer value.";
    } else {
        $dates = $input_dates;
    }
    $state = 5;

    // Check input errors before inserting in database
    if (empty($name_err) && empty($style_err) && empty($dates_err)) {
        $state = 6;
        // Prepare an update statement
        $sql = "UPDATE games SET style='$input_style', dates='$input_dates' WHERE name=$input_name";
        $state = $sql;

        if ($link === false)
        {
            header("location: error.php&$sql");
            exit();
        }

        if ($stmt = mysqli_query($link, $sql)) {
            $state = 7;

        } else {
            header("location: error.php&$sql");
            exit();
        }
    }
} else {
    $state = 100;
    // Check existence of name parameter before processing further
    if (isset($_GET["name"]) && !empty(trim($_GET["name"]))) {
        // Get URL parameter
        $name =  trim($_GET["name"]);

        // Prepare a select statement
        $sql = "SELECT * FROM games WHERE name = $name";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            //mysqli_stmt_bind_param($stmt, "i", $param_name);

            $state = $sql;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $name = $row["name"];
                    $style = $row["style"];
                    $dates = $row["dates"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

                // Close statement
                mysqli_stmt_close($stmt);

                // Close connection
                mysqli_close($link);
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}

end:
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Game Record - <?php echo $state ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
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
                        <h2>Update Game Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the game record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input readonly type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($style_err)) ? 'has-error' : ''; ?>">
                            <label>style</label>
                            <textarea name="style" class="form-control"><?php echo $style; ?></textarea>
                            <span class="help-block"><?php echo $style_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($dates_err)) ? 'has-error' : ''; ?>">
                            <label>dates</label>
                            <input type="text" name="dates" class="form-control" value="<?php echo $dates; ?>">
                            <span class="help-block"><?php echo $dates_err; ?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="../welcome.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
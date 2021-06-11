<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$name = $style = $dates = "";
$name_err = $style_err = $dates_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";
    } elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[0-9]+$/")))) {
        $name_err =  "Please enter a valid name.";
    } else {
        $name = $input_name;
    }

    // Validate style
    $input_style = trim($_POST["style"]);
    if (empty($input_style)) {
        $style_err = "Please enter the style.";
    } else {
        $style = $input_style;
    }

    // Validate dates
    $input_dates = trim($_POST["dates"]);
    if (empty($input_dates)) {
        $dates_err = "Please enter the date.";
    } elseif (!ctype_digit($input_dates)) {
        $dates_err = "Please enter a correct date.";
    } else {
        $dates = $input_dates;
    }

    // Check input errors before inserting in database
    if (empty($name_err) && empty($style_err) && empty($dates_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO games (name, style, dates) VALUES (?, ?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_style, $param_dates);

            // Set parameters
            $param_name = $name;
            $param_style = $style;
            $param_dates = $dates;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records created successfully. Redirect to landing page
                header("location: ../welcome.php");
                exit();
            } else {
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
    <title>Create Record</title>
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add game record to our database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($style_err)) ? 'has-error' : ''; ?>">
                            <label>Style</label>
                            <textarea name="style" class="form-control"><?php echo $style; ?></textarea>
                            <span class="help-block"><?php echo $style_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($dates_err)) ? 'has-error' : ''; ?>">
                            <label>Dates</label>
                            <input type="text" name="dates" class="form-control" value="<?php echo $dates; ?>">
                            <span class="help-block"><?php echo $dates_err; ?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="welcome.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
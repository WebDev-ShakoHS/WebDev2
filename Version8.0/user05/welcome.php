<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Login">

    <title>Welcome</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="stylesheet/Style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="images/Games.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="JS/SampleJS.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <!-- ADDED NEW CODE -->


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }

        .page-header h2 {
            margin-top: 0;
        }

        table tr td:last-child a {
            margin-right: 15px;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</head>

<body class="">

    <nav id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">Home Page</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user05/Evolution2.php">Evolution</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">1960s-1990s</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">1990s-2020s</a>
        <a href="#">Add Games</a>
        <a href="http://localhost:8080/WebDev2/Version8.0/user05/EBAYAPI.php">Search Games</a>
    </nav>

    <div id="main">
        <button class="openbtn Margin" onclick="openNav()">☰ Pages</button>
    </div>

    <!---------------------------------- Edit These Items in your Menu ------------->

    <!----------------------------------^ Edit These Items in your Menu ^ ------------->

    <div class="wrapper Color">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Game Details</h2>
                        <a href="CRUD/create.php" class="btn btn-success pull-right">Add New Game</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "CRUD/config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM games";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>name</th>";
                            echo "<th>style</th>";
                            echo "<th>dates</th>";

                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['style'] . "</td>";
                                echo "<td>" . $row['dates'] . "</td>";
                                echo "<td>";
                                echo "<a href='CRUD/read.php?name=" . $row['name'] . "' title='View Game' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                echo "<a href='CRUD/update.php?name=" . $row['name'] . "' title='Update Game' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                echo "<a href='CRUD/delete.php?name=" . $row['name'] . "' title='Delete Game' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

<footer class="Color">

    <p>
        <---- Author: Tyler Braun / Email to ----> <br>
            <a href="mailto:226716@shakopeeschools.org">226716@shakopeeschools.org</a>
    </p>

    <div class="container">
        <h2>Quick Access Tool Tips</h2>

        <button id="TOP" onclick="button1()" type="button" class="btn btn-primary">Return To Top</button>
    </div>

    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="previous" href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">Previous Page</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">1</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Evolution2.php">2</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">3</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">4</a></li>
        <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">5</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/EBAYAPI.php">6</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/EBAYAPI.php">Next Page</a></li>
    </ul>

</footer>

</html>
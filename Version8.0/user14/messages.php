<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Messages</title>


    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="JS/script.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
        .wrapper {
            width: 650px;
            margin: 0 auto;
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

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">Luke Matuza </br>Photography</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="aboutme.php" class="nav-item nav-link">About Me</a>
                    <a href="photos.html" class="nav-item nav-link">Photos</a>
                    <a href="journal.html" class="nav-item nav-link">Journal</a>
                    <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
            </div>
        </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->



    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Message Details</h2>
                        <a href="contact.php" class="btn btn-primary pull-right">Write New Message</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM messages";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Email</th>";
                            echo "<th>Message</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['message'] . "</td>";
                                echo "<td>";
                                echo "<a href='update.php?id=". $row['id'] ."' title='Edit' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' title='Delete' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo "<p class='lead'><em>No messages were found.</em></p>";
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

</html>
<!DOCTYPE html>
<html lang="en">
<!--Movie Poster Database
        Name:
        Date Completed:
    -->

<head>
    <link rel="shortcut icon" type="image/png" href="images/p5%20logo.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <title>Movie Poster Finder App</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JS needed to load poster -->
    <script type="text/javascript" src="scripts.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">


    <!-- Custom styles for this template -->
    <style type="text/css">


        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

    </style>


</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.html" class="navbar-brand">Home</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="Elon.html" class="nav-item nav-link active">About Elon</a>
                    <a href="Tesla.html" class="nav-item nav-link active" tabindex="-1">Tesla</a>
                    <a href="SpaceX.html" class="nav-item nav-link active" tabindex="-2">Space X</a>
                    <a href="PayPal.html" class="nav-item nav-link active" tabindex="-3">PayPal</a>
                    <a href="TheBoring.html" class="nav-item nav-link active" tabindex="-3">The Boring Company</a>
                    <a href="movies.php" class="nav-item nav-link active" tabindex="-2"> Movie Posters</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link active">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">

        <div class="example-div">

            <h1>Search</h1>

            <section id="fetch">
                <form name="fetch">
                    <input type="text" placeholder="Enter a movie title" id="term" value="Shrek" />
                    <input type="submit" id="search" value="Find me a poster" />
                </form>
            </section>

            <section id="poster">

            </section>
            <footer>
                <p>The MovieDB</p>
            </footer>

        </div>


    </div><!-- /.container -->


    <footer?>
            <div class="wrapper" class="footer-nav-ul-li-a">
                <nav>
                    <ul>
                        <li><a href="mailto:306933@shakopeeschools.org?Subject=Hello" class="nav-item nav-link active" tabindex="-2">Contact</a></li>
                    </ul>

                </nav>

            </div>

        </footer?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->




</body>

</html>

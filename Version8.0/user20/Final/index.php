
<html lang="en">
<!--Version 7.0 
	Name:
	Date Completed:
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Home Page">

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="JS/script.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 33.11%;
            margin-bottom: .6em;
            display: inline-block;
        }

        .card img {
            width: 100%;
        }
    </style>

</head>

<body>
    <html lang="en" class="full-height">

    <!--Main Navigation-->
    <header>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
            <a class="navbar-brand" href="#"><strong>AirExpress</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="support.html">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php">Future Travels</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="view intro-2">
            <div class="full-md-img">
                <div class="mask rgba-black-light flex-center">
                    <div class="container text-center white-text">
                        <div class="white-text text-center wow fadeInUp">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </header>
    <center><a href="weather.php" class="btn btn-default btn-rounded mb-4"> Weather Forecast"</a></center>
    <!--Main Navigation-->

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-envelope-open fa-2x"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-lock fa-3x"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Sign In</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Sign In Form</a>
</div>


    <!--Main Layout-->
    <center>
        <h3>Explore where you want to go!</h3>
    </center>
    <center>
        <h1>Continents</h1>
    </center>
    <center>
        <h5>These are just some suggested continents to go to.</h5>
        <h4>Pick whatever fascinates you!</h4>
    </center>
    <div class="card">
        <div class="container1">
            <div class="round">
                <div id="cta" onclick="openWin1()">
                    <span class="arrow primera next "></span>
                    <span class="arrow segunda next "></span>
                </div>
            </div>
        </div>
        <img src="https://www.smartertravel.com/wp-content/uploads/2018/06/suzhou-china-jiansu-shan-tong-street-cover.jpg"
            alt="Asia">
        <div class="nameplate">
            <center>
                <h4><b>Asia</b></h4>
            </center>
        </div>
    </div>
    <div class="card">
        <div class="container1">
            <div class="round">
                <div id="cta" onclick="openWin2()">
                    <span class="arrow primera next "></span>
                    <span class="arrow segunda next "></span>
                </div>
            </div>
        </div>
        <img src="https://handluggageonly.co.uk/wp-content/uploads/2015/10/Hand-Luggage-Only-3.jpg" alt="Europe">
        <div class="nameplate">
            <center>
                <h4><b>Europe</b></h4>
            </center>
        </div>
    </div>
    <div class="card">
        <div class="container1">
            <div class="round">
                <div id="cta" onclick="openWin3()">
                    <span class="arrow primera next "></span>
                    <span class="arrow segunda next "></span>
                </div>
            </div>
        </div>
        <img src="https://www.gannett-cdn.com/-mm-/f8f2f342f6a85d18b768898d9870fbfd6195c440/c=0-193-2116-1388/local/-/media/2015/01/24/USATODAY/USATODAY/635577030179736795-476881195.jpg"
            alt="America">
        <div class="nameplate">
            <center>
                <h4><b>America</b></h4>
            </center>
        </div>
    </div>
    <footer>
        <center><span class="title">For more information contact us here!</span></center>
        <center>
            <table id="footerTable">
        </center>

        <tr>
            <td>
                <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
            </td>
            <td>
                <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
            </td>
            <td>
                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
            </td>
        </tr>
        </table>
        <center><h5>Made by Christina Tu</h5></center>
    </footer>
</body>

</html>
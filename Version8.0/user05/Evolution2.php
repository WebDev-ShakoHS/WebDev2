<!DOCTYPE html>
<html>

<head>

    <title> Evolution of Games </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/jpg" href="images/Games.ico" />
    <link rel="stylesheet" href="stylesheet/Style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="JS/SampleJS.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        footer {
            text-align: center;
            padding: 3px;
            color: white;
        }
    </style>
</head>

<body>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰ Pages</button>
        
        <div class="Color " style="padding-left:0px">
            <center>
                <h1>Evolution Through Eras</h1>
            </center>
        </div>

        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">Home Page</a>
            <a href="#">Evolution</a>
            <a href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">1960s-1990s</a>
            <a href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">1990s-2020s</a>
            <a href="http://localhost:8080/WebDev2/Version8.0/user05/welcome.php">Add Games</a>
            <a href="http://localhost:8080/WebDev2/Version8.0/user05/EBAYAPI.php">Search Games</a>
        </div>
        
        <div class="container-fluid">
            <div class='row'>
                <div class="col-sm-12">
                    <div onmouseover="HOVERSHADOW()" class="card CARDHOVER" style="width:400px">
                        <img class="card-img-top" src="images/PONG.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body TEXTCARD">
                            <h4 class="card-title">The Very First Video Game Created</h4>
                            <p class="card-text">Physicist William Higinbotham created the very first game that
                                resembles
                                the
                                later
                                game
                                titled 'Pong'. the game was basic at best and only provided players with simple, often
                                repetitive
                                game
                                mechanics and ways to play the game. Although this is true, being the first game ever
                                created
                                every
                                gamer has to give it respect as bringing a whole new form of 'playable' media into the
                                world.
                            </p>
                            <a href="https://www.aps.org/publications/apsnews/200810/physicshistory.cfm#:"
                                class="btn btn-primary stretched-link Color">See more Details</a>
                        </div>
                    </div>

                    <div onmouseover="HOVERSHADOW()" class="card CARDHOVER" style="width:400px">
                        <img class="card-img-top" src="images/SM64.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body TEXTCARD">
                            <h4 class="card-title">'Super Mario 64''</h4>
                            <p class="card-text">One of the first 'modern style' 3d games, 'Super Mario 64 is regarded
                                as a
                                leap
                                foreward in gaming, and how conventional games are played. This game transformed the
                                industry
                                from
                                one
                                of rudimentary principles to that of more complex code and game design. Not only did it
                                define
                                the
                                3D
                                genre, it also laid out the processes to game creation. </p>
                            <a href="https://tcrf.net/Super_Mario_64_(Nintendo_64)"
                                class="btn btn-primary stretched-link Color">See
                                more Details</a>
                        </div>
                    </div>

                    <span onmouseover="HOVERSHADOW()" class="card CARDHOVER" style="width:400px">
                        <img class="card-img-top" src="images/Re8.jpeg" alt="Card image" style="width:100%">
                        <div class="card-body TEXTCARD">
                            <h4 class="card-title">'Resident Evil Village'</h4>
                            <p class="card-text">The newest installement in the RE8 franchinse, 'Resident Evil Village'
                                is a
                                step up
                                in quality. Relased in 2021, the game provides added DirectX Raytracing (Which helps
                                with
                                real-time
                                shadow tracing), Contrast Adaptive Sharpening (Helps with sharpening the image), and AMD
                                FidelityFX
                                CACAO (Helps with Occlusion implementation.)</p>
                            <a href="https://en.wikipedia.org/wiki/Resident_Evil_Village"
                                class="btn btn-primary stretched-link Color">See
                                more Details</a>
                        </div>
                    </span>
                </div>
            </div>
        </div>

        <center>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="Color" style="position: static; display: inline-block;">The Top 5 Selling Video
                        Games
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="TABLE" id="t01">
                        <tr>
                            <th>Title</th>
                            <th>Developer</th>
                            <th>Relased</th>
                            <th>Units Sold</th>
                        </tr>
                        <tr>
                            <td>Tetris</td>
                            <td>Alexey Pajitnov</td>
                            <td>June 6, 1984</td>
                            <td>495 million+</td>
                        </tr>
                        <tr>
                            <td>Minecraft</td>
                            <td>Mojang</td>
                            <td>November 18, 2011</td>
                            <td>200 million+</td>
                        </tr>
                        <tr>
                            <td>Grand Theft Auto V</td>
                            <td>Rockstar Studios</td>
                            <td>September 17, 2013</td>
                            <td>135 million+</td>
                        </tr>
                        <tr>
                            <td>Wii Sports</td>
                            <td>Nintendo</td>
                            <td>November 19, 2006</td>
                            <td>83 million+</td>
                        </tr>
                        <tr>
                            <td>PlayerUnknown’s Battlegrounds</td>
                            <td>PUBG Corporation</td>
                            <td>March 23, 2017</td>
                            <td>70 million+</td>
                        </tr>
                    </table>
                </div>
            </div>
        </center>
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
        <li class="page-item"><a class="previous" href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">Previous Page</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">1</a></li>
        <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">2</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">3</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">4</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/welcome.php">5</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/EBAYAPI.php">6</a></li>
        <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">Next Page</a></li>
    </ul>

</footer>

</html>
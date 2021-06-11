<?php
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'Videogames';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
      'name' => 'MaxPrice',
      'value' => '80',
      'paramName' => 'Currency',
      'paramValue' => 'USD'
    ),
    array(
      'name' => '',
      'value' => 'true',
      'paramName' => '',
      'paramValue' => ''
    ),
    array(
      'name' => 'ListingType',
      'value' => array('AuctionWithBIN', 'FixedPrice'),
      'paramName' => '',
      'paramValue' => ''
    ),
  );

// Generates an indexed URL snippet from the array of item filters
function buildURLArray($filterarray)
{
  global $urlfilter;
  global $i;
  // Iterate through each filter in the array
  foreach ($filterarray as $itemfilter) {
    // Iterate through each key in the filter
    foreach ($itemfilter as $key => $value) {
      if (is_array($value)) {
        foreach ($value as $j => $content) { // Index the key for each value
          $urlfilter .= "&itemFilter($i).$key($j)=$content";
        }
      } else {
        if ($value != "") {
          $urlfilter .= "&itemFilter($i).$key=$value";
        }
      }
    }
    $i++;
  }
  return "$urlfilter";
} // End of buildURLArray function

// Build the indexed item filter URL snippet
buildURLArray($filterarray);


// Construct the findItemsByKeywords HTTP GET call
$apicall = "$endpoint?";
$apicall .= "OPERATION-NAME=findItemsByKeywords";
$apicall .= "&SERVICE-VERSION=$version";
$apicall .= "&SECURITY-APPNAME=$appid";
$apicall .= "&GLOBAL-ID=$globalid";
$apicall .= "&keywords=$safequery";
$apicall .= "&paginationInput.entriesPerPage=50";
$apicall .= "$urlfilter";
// Load the call and capture the document returned by eBay API
$resp = simplexml_load_file($apicall);

// Check to see if the request was successful, else print an error
if ($resp->ack == "Success") {
  $results = '';
  // If the response was loaded, parse it and build links
  foreach ($resp->searchResult->item as $item) {
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
    /////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
    // For each SearchResultItem node, build a link and append it to $results
    $results .= "<tr><td><img src=\"$pic\"></td><td><a href=\"$link\">$title</a></td></tr>";
    ////////////////////////EDIT THIS LINE//////////////////////////////////////////////////////      
  }
}
// If the response does not indicate 'Success,' print an error
else {
  $results  = "<h3>Oops! The request was not successful. Make sure you are using a valid ";
  $results .= "AppID for the Production environment.</h3>";
}
?>
<!-- Build the HTML page with values from the call response -->
<html>

<head>
  <title>eBay Search Results for <?php echo $query; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/jpg" href="images/Games.ico" />
  <link rel="stylesheet" href="stylesheet/Style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="JS/SampleJS.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      font-family: arial, sans-serif;
    }
  </style>

</head>

<body>

  <title>Searching</title>

  <button class="openbtn Margin" onclick="openNav()">☰ Pages</button>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">Home Page</a>
    <a onmouseover="NAVSTOP()" href="http://localhost:8080/WebDev2/Version8.0/user05/Evolution.php">Evolution</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">1960s-1990s</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">1990s-2020s</a>
    <a href="http://localhost:8080/WebDev2/Version8.0/user05/welcome.php">Add Games</a>
    <a href="#">Search Games</a>
  </div>

  <center>
    <h1>eBay Search Results for <?php echo $query; ?></h1>
  </center>

  <table>
    <tr>
      <td>
        <?php echo $results; ?>
      </td>
    </tr>
  </table>

</body>

<footer class="Color">

  <center>
    <p class="Margin2">
      <---- Author: Tyler Braun / Email to ----> <br>
        <a href="mailto:226716@shakopeeschools.org">226716@shakopeeschools.org</a>
    </p>

    <div class="container">
      <h2>Quick Access Tool Tips</h2>
      <button id="TOP" onclick="button1()" type="button" class="btn btn-primary">Return To Top</button>
    </div>
  </center>

  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="previous" href="http://localhost:8080/WebDev2/Version8.0/user05/welcome.php">Previous Page</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Home1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Evolution2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Uno3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/Dos4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8080/WebDev2/Version8.0/user05/welcome.php">5</a></li>
    <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">6</a></li>
    <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Next Page</a></li>
  </ul>

</footer>

</html>
<?php
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'Soccer balls';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
    'name' => 'MaxPrice',
    'value' => '100',
    'paramName' => 'Currency',
    'paramValue' => 'USD'),
    array(
    'name' => '',
    'value' => 'true',
    'paramName' => '',
    'paramValue' => ''),
    array(
    'name' => 'ListingType',
    'value' => array('AuctionWithBIN','FixedPrice'),
    'paramName' => '',
    'paramValue' => ''),
  );

// Generates an indexed URL snippet from the array of item filters
function buildURLArray ($filterarray) {
  global $urlfilter;
  global $i;
  // Iterate through each filter in the array
  foreach($filterarray as $itemfilter) {
    // Iterate through each key in the filter
    foreach ($itemfilter as $key =>$value) {
      if(is_array($value)) {
        foreach($value as $j => $content) { // Index the key for each value
          $urlfilter .= "&itemFilter($i).$key($j)=$content";
        }
      }
      else {
        if($value != "") {
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
    $i = 0 ;
    $results = '';


 
 
 
 
    // If the response was loaded, parse it and build links
  foreach($resp->searchResult->item as $item) {
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
    $location = $item->location;
    $i++ ;
    /////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
  // For each SearchResultItem node, build a link and append it to $results
    
  if($i % 3 === 1){ $results .= "<div class='row'><div class'col-sm-4'$location<tr><img src=\"$pic\"></td><a href=\"$link\">$title</a></td></tr>";

    }
    if($i % 3 === 2){ $results .= "<div class='col-sm-4'><div class'col-sm-4'$location<tr><img src=\"$pic\"></td><a href=\"$link\">$title</a></td></tr>";

    }
    if($i % 3 === 3){ $results .= "<div class='col-sm-4'><div class'col-sm-4'$location<tr><img src=\"$pic\"></td><a href=\"$link\">$title</a></td></tr></div>";

    }


   $results .= "$location<tr><td><img src=\"$pic\"></td><td><a href=\"$link\">$title</a></td></tr>";
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!-- Custom -->
    <link rel="stylesheet" href="style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
    <style type="text/css">
        body {
            font-family: arial, sans-serif;
        }

    </style>
</head>
<div class="w3-top">
    <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1"
        href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
      <a href="login.php" class="w3-bar-item w3-button w3-theme-l1">Login</a>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
      <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
      <a href="experience.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Experience</a>
      <a href="goals.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Goals</a> 
      <a href="eBayAPI.php"class="w3-bar-item w3-button w3-hide-small w3-hover-white">Shop</a>

    </div>
  </div>
<body>

    <h1>Shop<?php echo $query; ?></h1>

    <div class="container-fluid"
       
        <?php echo $results;?>
    
    </div>

</body>

</html>
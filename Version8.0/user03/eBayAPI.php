<?php
error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'RobertMa-Shakopee-PRD-169ec6b8e-bb30ba02';  // Replace with your own AppID
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = 'Macbook';  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
$i = '0';  // Initialize the item filter index to 0
// Create a PHP array of the item filters you want to use in your request
$filterarray =
  array(
    array(
    'name' => 'MaxPrice',
    'value' => '1200',
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
  $results = '';
  // If the response was loaded, parse it and build links
  foreach($resp->searchResult->item as $item) {
    $pic   = $item->galleryURL;
    $link  = $item->viewItemURL;
    $title = $item->title;
/////////////////////////EDIT THIS LINE/////////////////////////////////////////////////////
    // For each SearchResultItem node, build a link and append it to $results
    $results .= "<div class='col-sm-3 columnsizepic'><img src=\"$pic\" width=200px; height=200px; align='right'></div><div class='col-sm-7 columnsizetext'><a href=\"$link\"><center>$title</center></a></div>";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>eBay Search Results for <?php echo $query; ?></title>
    <style type="text/css">
        body {
            font-family: arial, sans-serif;
            color: grey;
            background-color: white;
        }

        .align-center {
            text-align='center';
            align-content: center;
        }

        .paragraphMargin {
            margin-left: 250px;
        }

        .columnsizetext {
            width: 800px;
            height: auto;
            border: 2px solid black;
        }

        .columnsizepic {
            width: 200px;
            height: auto;
        }

        
    </style>

</head>

<body>
    <a href="https://www.ebay.com/" ping="/url?sa=t&amp;source=web&amp;rct=j&amp;url=https://www.ebay.com/&amp;ved=2ahUKEwinooOAjpDoAhXNZs0KHU3pBu8QFjAAegQIJRAC"><img src="images/eBay.jpg"></a>
    <center>
        <h1>eBay Search Results for <?php echo $query; ?></h1>
    </center>

    <center>
        <div class='row paragraphMargin'>
            <?php echo $results;?>
            <div class='col-sm-1'></div>
        </div>
    </center>
    <center><img src="images/favicon.ico"></center>
</body>

</html>

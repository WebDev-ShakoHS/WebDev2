<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://yahoo-finance15.p.rapidapi.com/api/yahoo/qu/quote/AAPL,MSFT,FB,NFLX,AMZN,GOOGL",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: yahoo-finance15.p.rapidapi.com",
		"x-rapidapi-key: e3cec6a7dbmsh6f1a6acdd1315dfp17d288jsn73a4cbdbedd1"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$data = json_decode($response,true);

echo $data[0]['symbol'];
echo $data[0]['ask'];
echo $data[1]['symbol'];
echo $data[1]['ask'];
echo $data[2]['symbol'];
echo $data[2]['ask'];
echo $data[3]['symbol'];
echo $data[3]['ask'];
echo $data[4]['symbol'];
echo $data[4]['ask'];
echo $data[5]['symbol'];
echo $data[5]['ask'];
echo $response;

?>

<!doctype html>
<html>
<head>
<title>Apple and Microsoft quotes</title>

<style>



.price {
    line-height: 25px;
}
</style>    


</head>
<body>

    <div class="report-container">
        <h2><?php echo $data->name; ?>Quotes</h2>
        <div class="price">
            <div><Span>Apple: </span><?php echo $data[0]['ask'] ; ?></div>
            <div><Span>Microsoft: </span> <?php echo $data[1]['ask'] ; ?></div>
            <div><Span>Facebook: </span> <?php echo $data[2]['ask'] ; ?></div>
            <div><Span>Netflix: </span><?php echo $data[3]['ask'] ; ?></div>
            <div><Span>Amazon: </span><?php echo $data[4]['ask'] ; ?></div>
            <div><Span>Google: </span><?php echo $data[5]['ask'] ; ?></div>
        </div>
    </div>


</body>
</html>




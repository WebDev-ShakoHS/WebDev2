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




?>

<!doctype html>
<html>
<head>
<title>Quotes</title>

<style>



.price {
    line-height: 25px;
}

.bigger{
    font-size: 22px;
    margin-bottom: 12px;
    margin-top: 12px;
}
</style>    


</head>
<body>

    <div class="report-container">
        <h1><?php echo $data->name; ?>Stock Prices</h1>
        <div class="price bigger">
            <div class="bigger"><Span>Apple: </span><?php echo $data[0]['ask'] ; ?></div>
            <div class="bigger"><Span>Microsoft: </span> <?php echo $data[1]['ask'] ; ?></div>
            <div class="bigger"><Span>Facebook: </span> <?php echo $data[2]['ask'] ; ?></div>
            <div class="bigger"><Span>Netflix: </span><?php echo $data[3]['ask'] ; ?></div>
            <div class="bigger"><Span>Amazon: </span><?php echo $data[4]['ask'] ; ?></div>
            <div class="bigger"><Span>Google: </span><?php echo $data[5]['ask'] ; ?></div>
        </div>
    </div>


</body>
</html>




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

?>


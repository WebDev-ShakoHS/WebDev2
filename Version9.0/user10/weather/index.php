<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://genius.p.rapidapi.com/artists/16775/songs",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: genius.p.rapidapi.com",
		"x-rapidapi-key: d4d83f06bfmsh3440c2e8a8fc7e0p1f4a64jsn79c07a9a4071"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$data = var_dump(json_decode($response, true));

if ($err) {
	echo $response->song[0]->full_title;
} else {
	echo "hi";

}
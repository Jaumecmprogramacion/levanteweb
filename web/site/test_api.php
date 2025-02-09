<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://transfermarket.p.rapidapi.com/matches/list-by-club?id=3368&domain=de",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: transfermarket.p.rapidapi.com",
		"x-rapidapi-key: ffe049a75bmsh4423d1479f12c87p19373bjsn42314fcc1d3c"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
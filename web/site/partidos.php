<?php

// Realizar la llamada cURL a la API
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

// Verificamos si hubo algún error
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // Decodificar la respuesta JSON
    $data = json_decode($response, true);
    
    // Verificamos si la respuesta contiene los partidos
    if (isset($data['playClubMatches']) && is_array($data['playClubMatches'])) {
        // Obtener la fecha actual
        $currentDate = time(); // Fecha y hora actuales

        // Iteramos sobre los partidos y mostramos solo los futuros
        foreach ($data['playClubMatches'] as $match) {
            // Extraemos la información del partido
            $homeTeam = $match['homeClubName'];
            $awayTeam = $match['awayClubName'];
            $matchDate = $match['fullMatchDate'];
            $matchTimestamp = strtotime($match['matchDate']); // Convertimos la fecha en timestamp
          
        

            // Comparamos si la fecha del partido es futura
            if ($matchTimestamp > $currentDate) {
                // Mostramos la información en el HTML
                echo '<article class="post-inline">';
                echo '<time class="post-inline-time" datetime="' . $matchDate . '">' . $matchDate . '</time>';
                echo '<p class="post-inline-title">' . $homeTeam . ' vs ' . $awayTeam . '</p>';
                
                echo '</article>';
            }
        }
    } else {
        echo "No se encontraron partidos.";
    }
}
?>

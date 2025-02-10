<?php

$apiToken = 'xjXw3EJi8lWUgwawTkyUGHZR1ULRQ6xhfWH9Osyi4KpJovBadlefLs2fLoJF'; // Tu API Key

$curl = curl_init();

// Configuración cURL
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.sportmonks.com/v3/football/leagues/23676?api_token=' . $apiToken, // Agrega el token aquí
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

// Verificar si ocurrió un error con cURL
if(curl_errno($curl)) {
    echo 'cURL Error: ' . curl_error($curl);
} else {
    // Verificar el código de estado HTTP
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        // Decodificar JSON
        $data = json_decode($response, true);
        
        // Mostrar los datos
        if (isset($data['data'])) {
            $league = $data['data'];
            echo "<h2>" . $league['name'] . " (" . $league['short_code'] . ")</h2>";
            echo "<p>Último partido: " . $league['last_played_at'] . "</p>";
            echo "<img src='" . $league['image_path'] . "' alt='" . $league['name'] . "' style='width:100px;'><br>";
        } else {
            echo "No se encontró la liga con ID 271.";
        }
    } else {
        echo "Error HTTP: " . $httpCode . " - " . $response;
    }
}

curl_close($curl);
?>

// Verificar si ocurrió un error con cURL
if(curl_errno($curl)) {
    echo 'cURL Error: ' . curl_error($curl);
} else {
    // Verificar el código de estado HTTP
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($httpCode == 200) {
        // Decodificar JSON
        $data = json_decode($response, true);
        
        // Mostrar los datos
        if (isset($data['data'])) {
            $league = $data['data'];
            echo "<h2>" . $league['name'] . " (" . $league['short_code'] . ")</h2>";
            echo "<p>Último partido: " . $league['last_played_at'] . "</p>";
            echo "<img src='" . $league['image_path'] . "' alt='" . $league['name'] . "' style='width:100px;'><br>";
        } else {
            echo "No se encontró la liga con ID 271.";
        }
    } else {
        echo "Error HTTP: " . $httpCode . " - " . $response;
    }
}

curl_close($curl);
?>


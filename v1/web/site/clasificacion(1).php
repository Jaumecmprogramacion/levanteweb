<?php
// Definir la URL de la API
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://transfermarket.p.rapidapi.com/competitions/get-table?id=es2&seasonID=2024&domain=de",
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

// Ejecutar la solicitud CURL
$response = curl_exec($curl);
$err = curl_error($curl);

// Cerrar la conexión CURL
curl_close($curl);

// Comprobar si hubo un error
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // Decodificar la respuesta JSON
    $data = json_decode($response, true);
    
    // Extraer la tabla de clasificación
    $table = $data['table'];

    // Comenzar a crear la tabla HTML
    echo '<table border="1">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Club</th>
                    <th>Points</th>
                    <th>Goals</th>
                    <th>Goals Conceded</th>
                    <th>Goal Difference</th>
                    <th>Matches</th>
                   >
                   
                </tr>
            </thead>
            <tbody>';
    
    // Recorrer los datos de la tabla
    foreach ($table as $row) {
        echo '<tr>
                <td>' . $row['rank'] . '</td>
                <td>
                    <img src="' . $row['clubImage'] . '" alt="' . $row['clubName'] . '" style="width: 30px; height: 30px;"> 
                    ' . $row['clubName'] . '
                </td>
                <td>' . $row['points'] . '</td>
                <td>' . $row['goals'] . '</td>
                <td>' . $row['goalsConceded'] . '</td>
                <td>' . $row['goalDifference'] . '</td>
                <td>' . $row['matches'] . '</td>
                
                
            </tr>';
    }

    // Cerrar la tabla
    echo '</tbody></table>';
}
?>

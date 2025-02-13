<?php
// Ruta al archivo JSON donde se guardarán los datos
$jsonFile = 'dataclasi.json';

// Comprobar si el archivo JSON existe y si fue actualizado en las últimas 24 horas (86400 segundos)
if (file_exists($jsonFile) && time() - filemtime($jsonFile) < 86400) {
    // Si el archivo JSON ya está actualizado, no hacer nada
    echo "Los datos ya están actualizados.";
} else {
    // Hacer la solicitud a la API si el archivo no existe o no ha sido actualizado en las últimas 24 horas
    $url = "https://magicloops.dev/api/loop/0ac35dc8-2601-4971-9374-e3937f429468/run";
    $apiData = json_encode(["input" => "I love Magic Loops!"]);

    // Inicializar cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Recibir la respuesta
    curl_setopt($ch, CURLOPT_POST, true); // Método POST
    curl_setopt($ch, CURLOPT_POSTFIELDS, $apiData); // Datos a enviar
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    // Ejecutar la solicitud y obtener la respuesta
    $response = curl_exec($ch);
    curl_close($ch);

    // Convertir la respuesta JSON a un array de PHP
    $data = json_decode($response, true);

    // Verificar si la respuesta es válida
    if ($data === null) {
        die("Error: No se pudo obtener o parsear los datos de la API.");
    }

    // Guardar los datos en el archivo JSON para usarlos en el futuro
    file_put_contents($jsonFile, json_encode($data));

    echo "Los datos han sido actualizados y guardados en el archivo JSON.";
}
?>

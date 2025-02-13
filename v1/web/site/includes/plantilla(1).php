<?php
// Realizar la solicitud cURL para obtener los datos
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://transfermarket.p.rapidapi.com/clubs/get-squad?id=3368&saison_id=2024&domain=es",
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

// Decodificar la respuesta JSON
$responseData = json_decode($response, true);

if ($err) {
    echo "Error de cURL #:" . $err;
} else {
    // Verificar si la respuesta contiene los jugadores
    if ($responseData && isset($responseData['squad']) && count($responseData['squad']) > 0) {

        // Función para asignar un valor de ranking a la posición
        function obtenerRankingPosicion($position) {
            switch ($position) {
                case 'Portero':
                    return 1;
                case 'Lateral derecho':
                case 'Lateral izquierdo':
                    return 2;
                case 'Defensa central':
                    return 3;
                case 'Centro del campo':
                case 'Centro defensivo':
                    return 4;
                case 'Extremo izquierdo':
                case 'Extremo derecho':
                    return 5;
                case 'Delantero centro':
                    return 6;
                default:
                    return 7; // Para posiciones no reconocidas
            }
        }

        // Recoger jugadores y ordenar por posición
        $jugadores = $responseData['squad'];

        // Crear un array para almacenar las posiciones y sus valores
        $posiciones = [];
        foreach ($jugadores as $jugador) {
            $pos = '';
            if (isset($jugador['positions']) && is_array($jugador['positions'])) {
                foreach ($jugador['positions'] as $posInfo) {
                    if (isset($posInfo['name'])) {
                        $pos = $posInfo['name'];  // Aquí dejamos la posición tal cual está
                        break; // Solo tomamos la primera posición
                    }
                }
            }
            // Agregamos la posición, el ranking y el jugador a un array
            $posiciones[] = [
                'posicion' => $pos,
                'ranking' => obtenerRankingPosicion($pos),
                'jugador' => $jugador
            ];
        }

        // Ordenamos el array de jugadores por el ranking de posición
        usort($posiciones, function($a, $b) {
            return $a['ranking'] - $b['ranking'];
        });

        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalles de los Jugadores</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
            <style>
                body {
                    font-family: 'Roboto', sans-serif;
                    background-color: #f7f7f7;
                    margin: 0;
                    padding: 20px;
                }

                h1 {
                    font-size: 30px;
                    color: #333;
                    margin-bottom: 40px;
                    text-align: center;
                }

                .player-card {
                    max-width: 1100px;
                    margin: 30px auto;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
                    padding: 30px;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    gap: 20px;
                    transition: all 0.3s ease;
                }

                .player-card img {
                    width: 150px; /* Tamaño cuadrado para la imagen */
                    height: 150px;
                    border-radius: 10px; /* Bordes redondeados */
                    object-fit: cover; /* Asegura que la imagen se recorte de manera adecuada */
                    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
                }

                .player-card h1 {
                    font-size: 24px;
                    color: #333;
                    margin-bottom: 10px;
                }

                .player-card p {
                    font-size: 16px;
                    color: #555;
                    margin: 8px 0;
                }

                .player-card .stats {
                    display: flex;
                    justify-content: space-evenly;
                    margin-top: 20px;
                    width: 100%;
                }

                .player-card .stat {
                    font-size: 16px;
                    color: #333;
                    flex: 1;
                    text-align: center;
                    margin: 10px;
                    padding: 15px;
                    background-color: #f1f1f1;
                    border-radius: 8px;
                }

                .player-card .stat span {
                    font-weight: bold;
                    color: #4CAF50;
                }

                .player-card .column {
                    flex-basis: 60%;
                }

                .player-card .more-info {
                    display: none; /* Ocultar los detalles adicionales */
                    margin-top: 20px;
                }

                .player-card .toggle-btn {
                    background-color: #4CAF50;
                    color: #fff;
                    padding: 10px 15px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 20px;
                }

                .player-card .toggle-btn:hover {
                    background-color: #45a049;
                }

                .player-card .hide-btn {
                    background-color: #f44336;
                    color: #fff;
                    padding: 10px 15px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 20px;
                }

                .player-card .hide-btn:hover {
                    background-color: #e53935;
                }

                @media (max-width: 768px) {
                    .player-card {
                        flex-direction: column;
                        align-items: center;
                    }

                    .player-card .stats {
                        flex-direction: column;
                    }
                }
            </style>
        </head>
        <body>

            <h1>Detalles de los Jugadores</h1>

            <?php
            // Mostrar los jugadores ordenados por posición
            foreach ($posiciones as $item) {
                $jugador = $item['jugador'];
                $name = $jugador['name'];
                $age = $jugador['age'];
                $height = $jugador['height'];
                $foot = $jugador['foot']; // Dejamos la pierna tal como está
                $nationality = isset($jugador['nationalities']) && is_array($jugador['nationalities']) ? implode(', ', array_map(function($n) { return $n['name']; }, $jugador['nationalities'])) : 'Desconocida';
                $positions = $item['posicion']; // Obtenemos la posición tal como está
                $image = isset($jugador['image']) ? $jugador['image'] : 'default-image.jpg'; // Usamos imagen por defecto si no existe
                $shirtNumber = $jugador['shirtNumber'];
                $dateOfBirth = date("d/m/Y", $jugador['dateOfBirth']);
                $contractUntil = date("d/m/Y", $jugador['contractUntil']);
                $marketValue = isset($jugador['marketValue']['value']) ? $jugador['marketValue']['value'] . ' ' . $jugador['marketValue']['currency'] : 'No disponible';
                ?>

                <div class="player-card">
                    <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>">
                    <div class="column">
                        <h1><?php echo $name; ?></h1>
                        <p>Posición: <?php echo $positions; ?></p>
                        <button class="toggle-btn" onclick="toggleDetails('<?php echo $jugador['id']; ?>')">Ver más</button>
                        <button class="hide-btn" onclick="hideDetails('<?php echo $jugador['id']; ?>')">Ocultar</button>
                        <div id="details-<?php echo $jugador['id']; ?>" class="more-info">
                            <p>Edad: <?php echo $age; ?> años</p>
                            <p>Fecha de Nacimiento: <?php echo $dateOfBirth; ?></p>
                            <p>Nacionalidad: <?php echo $nationality; ?></p>
                            <p>Altura: <?php echo $height; ?> cm</p>
                            <p>Pierna: <?php echo $foot; ?></p>
                            <p>Número de camiseta: <?php echo $shirtNumber; ?></p>
                            <p>Contrato hasta: <?php echo $contractUntil; ?></p>
                            <p>Valor de mercado: <?php echo $marketValue; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>

            <script>
                function toggleDetails(id) {
                    var details = document.getElementById('details-' + id);
                    if (details.style.display === "none" || details.style.display === "") {
                        details.style.display = "block";
                    } else {
                        details.style.display = "none";
                    }
                }

                function hideDetails(id) {
                    var details = document.getElementById('details-' + id);
                    details.style.display = "none";
                }
            </script>

        </body>
        </html>

        <?php
    } else {
        echo "<p class='no-data'>No se pudo obtener la información de los jugadores o no hay datos disponibles.</p>";
    }
}
?>

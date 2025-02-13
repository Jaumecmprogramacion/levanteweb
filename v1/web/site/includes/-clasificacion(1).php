
<h4 class="post-future-title">
  <img src="images/HYPERMOTION.png" alt="Icono" width="80" height="80"> Clasificación
</h4>

<!-- Contenedor de la tabla que muestra solo la posición del Levante -->
<div class="post-future-main">
    <?php
    // URL del API de clasificación
    $url = "https://transfermarket.p.rapidapi.com/competitions/get-table?id=es2&seasonID=2024&domain=de";
    
    // Inicializar cURL
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
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

    // Ejecutar la petición cURL y obtener respuesta
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    // Verificar si hubo un error
    if ($err) {
        echo "<p>Hubo un error al cargar los datos: " . $err . "</p>";
    } else {
        $data = json_decode($response, true); // Convertir el JSON a un array PHP

        // Verificamos si la respuesta tiene la tabla de clasificación
        if (isset($data['table'])) {
            // Buscar el Levante en la tabla
            foreach ($data['table'] as $team) {
                if (strtolower($team['clubName']) === 'ud levante') { // Asegurarse de que el nombre coincida
                    echo '<table class="table table-bordered table-striped">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Posición</th>';
                    echo '<th>Equipo</th>';
                    echo '<th>Puntos</th>';
                    echo '<th>A favor</th>';
            echo '<th>En contra</th>';
                    echo '<th>Dif. Goles</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    // Mostrar solo la fila de Levante
                    echo '<tr>';
                    echo '<td>' . $team['rank'] . '</td>';
                    echo '<td>';
                    echo '<img src="' . $team['clubImage'] . '" alt="' . $team['clubName'] . '" width="30" height="30"> ';
                    echo $team['clubName'];
                    echo '</td>';
                    echo '<td>' . $team['points'] . '</td>';
                    echo '<td>' . $team['goals'] . '</td>';
                    echo '<td>' . $team['goalsConceded'] . '</td>';
                    echo '<td>' . $team['goalDifference'] . '</td>';
                    echo '</tr>';

                    echo '</tbody>';
                    echo '</table>';
                    break; // Detener el bucle después de encontrar el Levante
                }
            }
        } else {
            echo '<p>No se pudo cargar la clasificación en este momento.</p>';
        }
    }
    ?>

<!-- posicion levante fin -->
  <!-- Clasificación -->
  
    
    
 

<!-- Botón para mostrar la tabla completa -->
<button id="toggleButton" class="btn btn-primary">Ver clasificación completa</button>

<!-- Contenedor de la tabla que está inicialmente oculta -->
<div id="clasificacionTable" class="post-future-main" style="display: none;">
    <?php
    // URL del API de clasificación
    $url = "https://transfermarket.p.rapidapi.com/competitions/get-table?id=es2&seasonID=2024&domain=de";
    
    // Inicializar cURL
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
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

    // Ejecutar la petición cURL y obtener respuesta
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    // Verificar si hubo un error
    if ($err) {
        echo "<p>Hubo un error al cargar los datos: " . $err . "</p>";
    } else {
        $data = json_decode($response, true); // Convertir el JSON a un array PHP

        // Verificamos si la respuesta tiene la tabla de clasificación
        if (isset($data['table'])) {
            echo '<table class="table table-bordered table-striped">';
            echo '<thead>';
            echo '<tr>';
            echo '<th></th>';
            echo '<th>Equipo</th>';
            echo '<th>Puntos</th>';
            echo '<th>A favor</th>';
            echo '<th>En contra</th>';
            echo '<th>Dif. Goles</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            // Mostrar toda la clasificación
            foreach ($data['table'] as $team) {
                echo '<tr>';
                echo '<td>' . $team['rank'] . '</td>';
                echo '<td>';
                echo '<img src="' . $team['clubImage'] . '" alt="' . $team['clubName'] . '" width="30" height="30"> ';
                echo $team['clubName'];
                echo '</td>';
                echo '<td>' . $team['points'] . '</td>';
                echo '<td>' . $team['goals'] . '</td>';
                echo '<td>' . $team['goalsConceded'] . '</td>';
                echo '<td>' . $team['goalDifference'] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No se pudo cargar la clasificación en este momento.</p>';
        }
    }
    ?>
</div>
<link rel="stylesheet" href="css/style.css">
    <h4 class="post-future-title">
        
    </h4>
    <div class="post-future-main">
        <?php
        // Ruta a los archivos JSON
        $jsonFile = 'datos/dataclasi.json';
        $iconosFile = 'datos/imgiconos.json';

        // Cargar los datos de la clasificación
        if (file_exists($jsonFile)) {
            $data = json_decode(file_get_contents($jsonFile), true);
        } else {
            echo "<p>El archivo JSON de clasificación no se encuentra en la ruta especificada.</p>";
            exit;
        }

        // Cargar los iconos de los equipos
        if (file_exists($iconosFile)) {
            $iconosData = json_decode(file_get_contents($iconosFile), true);
            if (!isset($iconosData['team'])) {
                echo "<p>No se encontró la clave 'team' en el archivo JSON de iconos.</p>";
                exit;
            }
        } else {
            echo "<p>El archivo JSON de iconos no se encuentra en la ruta especificada.</p>";
            exit;
        }

        if (!isset($data['standings'])) {
            echo "<p>No se encontró la clave 'standings' en el JSON de clasificación.</p>";
            exit;
        }

        $standings = $data['standings'];

        echo "<h4 class='post-future-title'><img src='images/LaLiga_Hypermotion_2023_Horizontal_Logo.svg.png' alt='Icono' height='100'> </h4>";
        echo "<button id='toggleButton' class='class=button button-gray-outline'>Ver clasificación completa</button>";

        // Tabla del Levante UD
        echo "<div id='clasificacionLevante'>";
        echo "<table class='table table-bordered table-striped' style='border: 1px solid black; border-collapse: collapse; text-align: center;'>";
        echo "<thead><tr>";
        echo "<th></th><th>Equipo</th><th>Par</th><th>Puntos</th><th>G</th><th>E</th><th>P</th>";
        echo "</tr></thead><tbody>";

        $levanteFound = false;
        foreach ($standings as $team) {
            if (strtolower($team['team']) === 'levante') {
                $icono = 'images/default_icon.png';
                foreach ($iconosData['team'] as $iconoData) {
                    if (strtolower($iconoData['equipo']) === strtolower($team['team'])) {
                        $icono = $iconoData['imagen'];
                        break;
                    }
                }

                echo "<tr style='background-color: blue; color: white;'>";
                echo "<td>{$team['position']}</td>";
                echo "<td><img src='$icono' alt='{$team['team']}' style='width: 30px; height: 30px; margin-right: 5px;'> {$team['team']}</td>";
                echo "<td>{$team['played']}</td>";
                echo "<td>{$team['points']}</td>";
                echo "<td>{$team['won']}</td>";
                echo "<td>{$team['drawn']}</td>";
                echo "<td>{$team['lost']}</td>";
                echo "</tr>";

                $levanteFound = true;
                break;
            }
        }

        if (!$levanteFound) {
            echo "<tr><td colspan='8'>Levante UD no encontrado en la clasificación.</td></tr>";
        }

        echo "</tbody></table></div>";

        // Tabla de la clasificación completa
        echo "<div id='fullClasificacion' style='display: none;'>";
        echo "<table class='table table-bordered table-striped' style='border: 1px solid black; border-collapse: collapse; text-align: center;'>";
        echo "<thead><tr>";
        echo "<th></th><th>Equipo</th><th>P</th><th>Puntos</th><th>G</th><th>E</th><th>P</th>";
        echo "</tr></thead><tbody>";

        foreach ($standings as $team) {
            $icono = 'images/default_icon.png';
            foreach ($iconosData['team'] as $iconoData) {
                if (strtolower($iconoData['equipo']) === strtolower($team['team'])) {
                    $icono = $iconoData['imagen'];
                    break;
                }
            }

            $rowColor = '';
            if ($team['position'] <= 2) {
                $rowColor = 'background-color: blue; color: white;';
            } elseif ($team['position'] <= 6) {
                $rowColor = 'background-color: green; color: white;';
            } elseif ($team['position'] > 19) {
                $rowColor = 'background-color: red; color: white;';
            }

            echo "<tr style='{$rowColor};'>";
            echo "<td>{$team['position']}</td>";
            echo "<td><img src='$icono' alt='{$team['team']}' style='width: 30px; height: 30px; margin-right: 5px;'> {$team['team']}</td>";
            echo "<td>{$team['played']}</td>";
            echo "<td>{$team['points']}</td>";
            echo "<td>{$team['won']}</td>";
            echo "<td>{$team['drawn']}</td>";
            echo "<td>{$team['lost']}</td>";
            
            echo "</tr>";
        }

        echo "</tbody></table></div>";
        ?>
    </div>
</article>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var fullTable = document.getElementById("fullClasificacion");
    var levanteTable = document.getElementById("clasificacionLevante");
    var button = document.getElementById("toggleButton");

    if (!fullTable || !levanteTable || !button) {
        console.error("No se encontraron los elementos necesarios en el DOM.");
        return;
    }

    button.addEventListener("click", function() {
        if (fullTable.style.display === "none" || fullTable.style.display === "") {
            fullTable.style.display = "block";
            levanteTable.style.display = "none";
            button.innerText = "Ocultar clasificación completa";
        } else {
            fullTable.style.display = "none";
            levanteTable.style.display = "block";
            button.innerText = "Ver clasificación completa";
        }
    });

    fullTable.style.display = "none";
});
</script>

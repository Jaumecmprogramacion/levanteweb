<?php
// Ruta al archivo JSON
$file = 'datos/datosplantilla.json';

// Definir el orden de las posiciones
$position_order = [
    'Portero' => 1,
    'Defensa central' => 2,
    'Lateral derecho' => 3,
    'Lateral izquierdo' => 4,
    'Pivote' => 5,
    'Mediocentro' => 6,
    'Extremo izquierdo' => 7,
    'Extremo derecho' => 8,
    'Delantero centro' => 9
];

// Función para ordenar jugadores por la posición
function compare_positions($a, $b) {
    global $position_order;

    $pos_a = $a['positions']['first']['name'] ?? '';
    $pos_b = $b['positions']['first']['name'] ?? '';

    $priority_a = $position_order[$pos_a] ?? 10; // Si no tiene una posición definida, le asignamos baja prioridad
    $priority_b = $position_order[$pos_b] ?? 10;

    return $priority_a - $priority_b;
}

// Verificar si el archivo existe
if (file_exists($file)) {
    // Leer el archivo JSON
    $json_data = file_get_contents($file);

    // Decodificar el JSON a un array asociativo de PHP
    $data = json_decode($json_data, true);

    // Verificar si el JSON fue decodificado correctamente
    if ($data !== null && isset($data['squad'])) {
        
        // Ordenar los jugadores por su posición
        usort($data['squad'], 'compare_positions');

        // Mostrar tabla con los jugadores ordenados
        
        echo '<style>';
        echo 'table { width: 100%; border-collapse: collapse; margin: 20px 0; font-family: Arial, sans-serif; }';
        echo 'th, td { padding: 12px; text-align: left; border: 1px solid #ddd; }';
        echo 'th { background-color: #f2f2f2; color: #333; }';
        echo 'td img { width: 80px; height: 80px; border-radius: 50%; }';
        echo 'tr:nth-child(even) { background-color: #f9f9f9; }';
        echo 'tr:hover { background-color: #f1f1f1; }';
        echo 'h2 { text-align: center; font-size: 24px; color: #333; }';
        echo '</style>';

        // Iniciar la tabla
        echo '<h2>Entrenador: Julian Calero</h2>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th></th>';
        echo '<th>Nombre</th>';
        echo '<th>Edad</th>';
        echo '<th>Altura</th>';
        echo '<th>Piedra Dominante</th>';
        echo '<th>Camiseta N°</th>';
        echo '<th>Posición</th>';
        echo '<th>Nacionalidad</th>';
        echo '<th>Valor de Mercado</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Recorrer todos los jugadores y mostrar sus datos
        foreach ($data['squad'] as $player) {
            echo '<tr>';
            // Mostrar imagen del jugador en la primera columna
            echo '<td><img src="' . $player['image'] . '" alt="' . $player['name'] . '"></td>';
            echo '<td>' . htmlspecialchars($player['name']) . '</td>';
            echo '<td>' . $player['age'] . '</td>';
            echo '<td>' . $player['height'] . ' m</td>';
            echo '<td>' . $player['foot'] . '</td>';
            echo '<td>' . $player['shirtNumber'] . '</td>';
            echo '<td>' . $player['positions']['first']['name'] . '</td>';
            
            // Mostrar las nacionalidades
            $nationalities = '';
            foreach ($player['nationalities'] as $nationality) {
                $nationalities .= $nationality['name'] . ' ';
            }
            echo '<td>' . $nationalities . '</td>';

            // Mostrar el valor de mercado
            echo '<td>' . $player['marketValue']['value'] . ' ' . $player['marketValue']['currency'] . '</td>';

            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No se pudo decodificar el JSON correctamente.';
    }
} else {
    echo 'El archivo datosplantilla.json no existe.';
}
?>

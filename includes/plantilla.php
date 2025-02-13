<?php
// Cargar el JSON con las rutas de los escudos desde la carpeta 'datos'
$teamsJson = file_get_contents('datos/imgicnos.json'); // Ruta ajustada a la carpeta 'datos'
$teamsData = json_decode($teamsJson, true);

// Convertir el JSON a un array con el formato adecuado
$teamLogos = [];
foreach ($teamsData['team'] as $team) {
    $teamLogos[$team['equipo']] = $team['imagen']; // Asignamos el nombre del equipo como clave y la ruta de la imagen como valor
}

// Definir los partidos manualmente
$matches = [
    [
        'homeClubName' => 'Levante',
        'awayClubName' => 'Sporting',
        'matchDate' => '2025-02-16 14:00:00'
    ],
    [
        'homeClubName' => 'Levante',
        'awayClubName' => 'Mirandés',
        'matchDate' => '2025-02-23 18:30:00'
    ],
    [
        'homeClubName' => 'Eldense',
        'awayClubName' => 'Levante',
        'matchDate' => '2025-03-02 00:00:00'
    ],
    [
        'homeClubName' => 'Levante',
        'awayClubName' => 'Cartagena',
        'matchDate' => '2025-03-09 00:00:00'
    ],
    // Otros partidos...
];

$currentDate = time(); // Obtener la fecha y hora actuales

echo '<div class="matches-list">'; // Contenedor de todos los partidos (pasados y futuros)

foreach ($matches as $match) {
    $homeTeam = $match['homeClubName'];
    $awayTeam = $match['awayClubName'];
    $matchDate = $match['matchDate'];
    $matchTimestamp = strtotime($matchDate); // Convertir la fecha del partido en timestamp

    // Formatear la fecha para mostrar el día de la semana, fecha y hora
    $formattedDate = date('l, d/m/Y', $matchTimestamp); // Día de la semana, día/mes/año
    $formattedTime = date('H:i', $matchTimestamp); // Hora en formato 24h (ej. 21:00)

    // Convertir el día de la semana a español (opcional)
    $dayOfWeekSpanish = [
        'Sunday' => 'Domingo',
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado'
    ];

    // Reemplazar el día de la semana en inglés por el equivalente en español
    $formattedDate = str_replace(array_keys($dayOfWeekSpanish), array_values($dayOfWeekSpanish), $formattedDate);

    // Obtener la URL del escudo del equipo (si existe)
    $homeTeamLogo = isset($teamLogos[$homeTeam]) ? $teamLogos[$homeTeam] : 'images/logos/default.png'; // Ruta por defecto si no se encuentra el escudo
    $awayTeamLogo = isset($teamLogos[$awayTeam]) ? $teamLogos[$awayTeam] : 'images/logos/default.png'; // Ruta por defecto si no se encuentra el escudo

    // Mostrar el partido con día de la semana, fecha y hora
    echo '<div class="match-item">';
    echo '<div class="match-details">';
    echo '<div class="team-info">';
    echo '<img src="' . $homeTeamLogo . '" alt="' . $homeTeam . '" class="team-logo">'; // Escudo equipo local
    echo '<p class="match-teams">' . $homeTeam . ' <span class="vs">vs</span> ' . $awayTeam . '</p>';
    echo '<img src="' . $awayTeamLogo . '" alt="' . $awayTeam . '" class="team-logo">'; // Escudo equipo visitante
    echo '</div>';
    echo '<time class="match-date-time" datetime="' . $matchDate . '">' . $formattedDate . ' a las ' . $formattedTime . '</time>';
    echo '</div>';
    echo '</div>';
}

echo '</div>'; // Cerrar el contenedor de todos los partidos
?>

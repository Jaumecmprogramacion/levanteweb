<?php
// Definir los partidos manualmente
$matches = [
    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'Sporting de Gijón',
        'matchDate' => '2025-02-16 14:00:00'
    ],
    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'CD Mirandés',
        'matchDate' => '2025-02-23 18:30:00'
    ],
    [
        'homeClubName' => 'CD Eldense',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2025-03-02 '
    ],

    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'FC Cartagena',
        'matchDate' => '2025-03-09 '
    ],

    [
        'homeClubName' => 'SD Huesca',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2025-03-16 '
    ],

    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'CD Castellón',
        'matchDate' => '2025-03-23 '
    ],

    [
        'homeClubName' => 'UD Almería',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2025-03-30 '
    ],

    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'R. Racing Clubn',
        'matchDate' => '2025-04-06 '
    ],
    [
        'homeClubName' => 'Córdoba CF',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2025-04-13 '
    ],

    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'Real Zaragoza',
        'matchDate' => '2025-04-20 '
    ],

    [
        'homeClubName' => 'Real Oviedo',
        'awayClubName' => 'CD Tenerife',
        'matchDate' => '2025-05-05 '
    ],

    [
        'homeClubName' => 'Elche CF',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2025-05-11 '
    ],
    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'Albacete BP',
        'matchDate' => '2025-05-18 '
    ],

    [
        'homeClubName' => 'Burgos CF',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2025-05-25 '
    ],

    [
        'homeClubName' => 'Levante UD',
        'awayClubName' => 'SD Eibar',
        'matchDate' => '2025-06-101 '
    ],
    // Partido pasado (para probar el filtro)
    [
        'homeClubName' => 'Barça',
        'awayClubName' => 'Levante UD',
        'matchDate' => '2024-12-25 18:00:00' // Partido pasado
    ]
];

$currentDate = time(); // Obtener la fecha y hora actuales

foreach ($matches as $match) {
    $homeTeam = $match['homeClubName'];
    $awayTeam = $match['awayClubName'];
    $matchDate = $match['matchDate'];
    $matchTimestamp = strtotime($matchDate); // Convertir la fecha del partido en timestamp

    // Verificar si el partido es futuro
    if ($matchTimestamp > $currentDate) {
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

        // Mostrar el partido con día de la semana, fecha y hora
        echo '<article class="post-inline">';
        echo '<time class="post-inline-time" datetime="' . $matchDate . '">' . $formattedDate . ' a las ' . $formattedTime . '</time>';
        echo '<p class="post-inline-title">' . $homeTeam . ' vs ' . $awayTeam . '</p>';
        echo '</article>';
    }
}
?>

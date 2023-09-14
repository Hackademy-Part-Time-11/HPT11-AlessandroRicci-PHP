<?php

$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach ($temperature as $citta => $gradi) {
    if ($gradi <15 ) {
        echo "A {$citta} fa freddo con {$gradi}°C \n";
    } elseif ($gradi >= 15 && $gradi <25) {
        echo "A {$citta} fa caldo con {$gradi}°C \n";
    } else {
        echo "A {$citta} fa molto caldo con {$gradi}°C \n";
    }
}
<?php

$arrayMulty = [["nome" => 'Alessandro', 'cognome' => 'Ricci', 'genere' => 'M'],
                ["nome" => 'Sofia', 'cognome' => 'Giannini', 'genere' => 'F']
];

foreach ($arrayMulty as $identificativo => $persona) {
    if ($persona['genere']== 'M') {
        $genere = 'Sig.';
    } else {
        $genere = 'Sig.ra';
    }
    echo "buongiorno {$genere} {$persona['nome']} {$persona['cognome']}  \n";
}


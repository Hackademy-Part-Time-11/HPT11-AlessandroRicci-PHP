<?php

$words1 = [ 'una', 67,'vita', 'colle', 'mi', 'rosso', [/*6*/  'oscura', 'era', 89, [/*3*/ 'mezzo',  [/*1*/ 'cammin', 'Nel', [/*2*/ 'selva', 'la', [/*2*/ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], /*7*/'diritta' ];
$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];

//? Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita


$result = $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' ' . "del" . ' ' .$words1[6][3][1][0]. ' '. "di" . ' ' . $words2["elemento2"] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[6][3][1][2][2][1] . ' ' . $words1[6][3][1][2][0] . ' ' . $words1[6][0] . "," . $words2['elemento3'][2] . ' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . "era" . ' ' . $words2["elemento3"][1];
echo $result;

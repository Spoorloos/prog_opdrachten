<?php

// Ik weet niks van auto's lol
$autos = [ 'Rode Auto', 'Gele Auto', 'Paarse Auto', 'Groene Auto', 'Blauwe Auto' ];

// print_r($autos);
// echo '<br>' . $autos[2];
// echo '<br>' . $autos[4];

// print_r($autos);
// echo '<br>';
// var_dump($autos);
// // Var dump laat ook het datatype van de elements zien

// echo count($autos); // 5 :)
array_push($autos, 'Zwarte Auto');
// print_r($autos);
sort($autos);
// print_r($autos);
echo implode(' | ', $autos);
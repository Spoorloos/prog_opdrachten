<?php

include_once('functions.php');

currentDateTime();

$sum = add(1,1) + sub(3,1) + div(10,5) + mult(9,10);
echo '<br>' . $sum . '<br>';

$kosten_berlijn = berekenRitKosten(663, 15, 1.9);
$kosten_stockholm = berekenRitKosten(1438, 20, 1.46);
$kosten_kiev = berekenRitKosten(1991, 18.47, 2.23);

echo 'Kosten berlijn: ' . number_format($kosten_berlijn, 2) . '<br>';
echo 'Kosten stockholm: ' . number_format($kosten_stockholm, 2) . '<br>';
echo 'Kosten kiev: ' . number_format($kosten_kiev, 2);
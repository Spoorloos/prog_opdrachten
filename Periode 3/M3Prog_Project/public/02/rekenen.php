<?php

$getal = 3.14159;
$ceiled = ceil($getal);
$floored = floor($getal);

echo "Ceiled: $ceiled<br>";
echo "Floored: $floored<br>";

$rand1 = rand(0, 20);
$rand2 = rand(0, 20);
$rand3 = rand(1, 10);

$sum = ($rand1 + $rand2) / $rand3;
echo "Sum: $sum";
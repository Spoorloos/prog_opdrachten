<?php

include_once('functions.php');

$prijs = bereken_vliegkosten(3722, 2.05, 20, false);
echo '€ ' . number_format($prijs, 2) . '<br>';

$prijs = bereken_vliegkosten(9276, 3.11, 10, false);
echo '€ ' . number_format($prijs, 2) . '<br>';

$prijs = bereken_vliegkosten(803, 2.83, 0, true);
echo '€ ' . number_format($prijs, 2);
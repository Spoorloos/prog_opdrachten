<?php

$afstand = 1082.30;
$benzine_prijs = 1.89;
$kosten_trein = 60;
$tank_inhoud = 50;

$benzine_verbruik = $afstand / 15;
$aantal_keer_tanken = ceil($benzine_verbruik / $tank_inhoud);
$kosten_auto = $benzine_verbruik / $benzine_prijs;

if ($kosten_auto > $kosten_trein) {
    echo 'Ik ga met de trein<br><br>';
} else {
    echo 'Ik ga met de auto<br><br>';
}

echo "Afstand: $afstand km<br>";
echo "Totale prijs: $kosten_auto euro<br>";
echo "Benzine verbruik: $benzine_verbruik liter<br>";
echo "Aantal keer tanken: $aantal_keer_tanken";
<?php
$verbruikArray = [
    'Koffiezetapparaat' => 1,
    'Wasmachine' => 2,
    'Strijkijzer' => 3,
    'TV' => 4,
    'LED verlichting' => 5
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stroomverbruik:</h1>
    <h2>Per apparaat:</h2>
    <ul>
        <?php
            foreach ($verbruikArray as $apparaat => $verbruik) {
                echo "<li>$apparaat: $verbruik</li>";
            }
        ?>
    </ul> 
    <h2>Totaal:</h2>
    <p>
        <?php
            $totaal = 0;

            foreach ($verbruikArray as $_ => $verbruik) {
                $totaal += $verbruik;
            }

            echo $totaal . ' kWh';
        ?>
    </p>
</body>
</html>
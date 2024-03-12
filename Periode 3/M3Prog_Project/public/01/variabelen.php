<?php
    $mijnNaam = 'Mick';
    $mijnWoonplaats = 'Avenhorn';
    $mijnLeeftijd = 16;
    $huidigeTemperatuur = 6.5;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Variabelen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>
        Mijn naam: <?= $mijnNaam; ?><br>
        Mijn woonplaats: <?= $mijnWoonplaats; ?><br>
        Mijn leeftijd: <?= $mijnLeeftijd; ?><br>
        Huidige temperatuur: <?= $huidigeTemperatuur; ?>
    </p>
</body>
</html>
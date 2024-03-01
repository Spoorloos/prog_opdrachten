<?php
    $tempPredictions = [
        "Monday" => 11,
        "Tuesday" => 10,
        "Wednesday" => 10,
        "Thursday" => 10,
        "Friday" => 9,
        "Saturday" => 9,
        "Sunday" => 9,
    ];

    // print_r($tempPredictions);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Dag</th>
            <th>Graden</th>
        </tr>
        <?php
            foreach ($tempPredictions as $day => $temp) {
                echo "<tr><td>$day</td><td>$temp</td></tr>";
            }
        ?>
    </table>

    <?php $vandaag = 'Friday' ?>
    <p>Vandaag (<?= $vandaag ?>) is het <?= $tempPredictions[$vandaag] ?> graden</p>
</body>
</html>
<?php
    include_once('../../source/database.php');

    $connection = database_connect();
    $result = $connection->query("SELECT * FROM meterstanden");

    // print_r($result->fetch_all());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meterstanden</h1>
    <table>
        <tr>
            <th>Datum</th>
            <th>Stand</th>
            <th>Soort</th>
        </tr>
        <?php foreach ($result as $rij): ?>
            <tr>
                <td><?= $rij['datum'] ?></td>
                <td><?= $rij['stand'] ?> KwH</td>
                <td><?= $rij['soort'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
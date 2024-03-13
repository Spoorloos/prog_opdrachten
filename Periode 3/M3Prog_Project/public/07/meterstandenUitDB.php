<?php

include_once('../../source/database.php');

$connection = database_connect();
$result = $connection->query('SELECT * FROM meterstanden');
$rows = $result->fetch_all();

$json_obj = [ 'labels' => [], 'values' => [] ];
foreach ($rows as $_ => $row) {
    array_push($json_obj['labels'], $row[3]);
    array_push($json_obj['values'], $row[1]);
}

header('Content-Type: application/json');
echo json_encode($json_obj);
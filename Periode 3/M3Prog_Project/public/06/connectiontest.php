<?php

include_once('../../source/database.php');

$connection = database_connect();
$result = $connection->query("SELECT 1");

print_r($result->fetch_all());
<?php

$json_text = '{ "count": 12775, "name": "Mick", "age": 63}';
$data = json_decode($json_text, true);

echo $data['age'];
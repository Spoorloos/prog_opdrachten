<?php

header('Content-Type: application/json');

$data = [
    1,2,3,4,
    'leraar',
    '2024-01-01',
    ['dit','is','een','array','in','een','array']
];

echo json_encode($data);
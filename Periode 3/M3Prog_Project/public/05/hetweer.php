<?php

$dag = $_GET['dag'];

$voorspelling = [
    'ma' => 4,
    'di' => 6,
    'wo' => 5,
    'do' => 2,
    'vr' => 7,
    'za' => 6,
    'zo' => 4
];

$voorspelling_icons = [ // sweet home nederland
    'ma' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/rain.png',
    'di' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/rain.png',
    'wo' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/cloud.png',
    'do' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/thunder.png',
    'vr' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/thunder.png',
    'za' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/rain.png',
    'zo' => 'https://raw.githubusercontent.com/progsen/M3Prog_backend/main/les-5/icons/cloud.png'
];

echo "De voorspelling voor $dag is $voorspelling[$dag]° C.<br>";
echo "<img alt='kut weer' src='$voorspelling_icons[$dag]'>";
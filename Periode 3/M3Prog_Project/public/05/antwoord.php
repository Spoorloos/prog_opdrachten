<?php

// print_r($_GET);

if (isset($_GET['leeftijd']) && isset($_GET['opleiding'])) {
    echo 'Leeftijd: ' . $_GET['leeftijd'] . '<br>';
    echo 'Opleiding: ' . $_GET['opleiding'];
} else {
    echo 'Womp womp :(';
}
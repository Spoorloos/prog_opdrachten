<?php

if (isset($_GET['celsius'])) {
    $celsius = floatval($_GET['celsius']);
    $fahrenheit = 1.8 * $celsius + 32;

    echo "$celsius graden Celsius = $fahrenheit graden Fahrenheit.<br>";
} else {
    echo 'Je moet wel een waarde mee geven :(';
}
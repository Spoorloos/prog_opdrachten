<?php

$fahrenheit = 74;
$celcius = ($fahrenheit - 32) / 1.8;
echo "$fahrenheit graden Fahrenheit = $celcius graden Celcius. <br>";

$celcius = 23;
$fahrenheit = 1.8 * $celcius + 32;
echo "$celcius graden Celcius = $fahrenheit graden Fahrenheit. <br>";

$celcius = 20;
$kelvin = $celcius + 273.15;
echo "$celcius graden Celcius = $kelvin graden Kelvin. <br>";

$fahrenheit = 75;
$kelvin = ($fahrenheit - 32) * 5/9 + 273.15;
echo "$fahrenheit graden Fahrenheit = $kelvin graden Kelvin.";
<?php

/**
 * Get the current time
 *
 * @return string The current date
 */
function currentDateTime()
{
    echo date('d-m-Y H:i:s');
}

/**
 * Get the sum of two numbers
 *
 * @param mixed $getal1 The first number
 * @param mixed $getal2 The second number
 * @return int The two numbers summed up
 */
function add($getal1, $getal2)
{
    return $getal1 + $getal2;
}

/**
 * Subtract two numbers
 *
 * @param mixed $getal1 The first number
 * @param mixed $getal2 The second number
 * @return int The two numbers subtracted
 */
function sub($getal1, $getal2)
{
    return $getal1 - $getal2;
}

/**
 * Divide two numbers
 *
 * @param mixed $getal1 The first number
 * @param mixed $getal2 The second number
 * @return int The two numbers divided
 */
function div($getal1, $getal2)
{
    return $getal1 / $getal2;
}

/**
 * Multiply two numbers
 *
 * @param mixed $getal1 The first number
 * @param mixed $getal2 The second number
 * @return int The two numbers multiplied
 */
function mult($getal1, $getal2)
{
    return $getal1 * $getal2;
}

/**
 * Calculate car ride prices
 *
 * @param int $afstand_km The distance to drive
 * @param int $km_per_liter How much fuel the car consumes
 * @param int $liter_prijs The price of fuel
 * @return int The price of the car ride
 */
function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{
    $aantal_liters = $afstand_km / $km_per_liter;
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
}

/**
 * Calculate plane ticket prices
 *
 * @param int $afstand The distance to fly (in km)
 * @param int $kerosine_prijs The price for kerosine (in eur)
 * @param int $bagage_gewicht The weight of your luggage (in kg)
 * @param bool $business_class Whether you're flying business class
 * @return int The price of the plane ticket
 */
function bereken_vliegkosten($afstand, $kerosine_prijs, $bagage_gewicht, $business_class)
{
    $vlieg_prijs = $kerosine_prijs * $afstand / 30;
    $vlieg_prijs += $bagage_gewicht * 5;
    $vlieg_prijs *= $business_class ? 1.5 : 1;
    return $vlieg_prijs;
}
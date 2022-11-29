<?php

require_once('autoload.php');

/**
 * @throws Floats
 * @throws Objects
 * @throws Strings
 * @throws Integers
 * @throws Arrays
 * @throws Booleans
 */
function calculate($value)
{
    if (is_int($value)) {
        throw new Integers();
    }
    if (is_bool($value)) {
        throw new Booleans();
    }
    if (is_string($value)) {
        throw new Strings();
    }
    if (is_float($value)) {
        throw new Floats();
    }
    if (is_array($value)) {
        throw new Arrays();
    }
    if (is_object($value)) {
        throw new Objects();
    }
    return $value;
}

$people = [];
$auto = new AutoToyota(2020, 'Camry', 'Red');

try {
    calculate($auto);
} catch (Integers|Strings|Objects|Arrays|Floats|Booleans $e) {
    echo $e->getMessage();
}
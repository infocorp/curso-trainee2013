<?php

$a = 10;

// Operador lógico E (AND)
if ($a > 5 && $a < 11) {
    echo 'verdadeiro';
}

if ($a > 10 && $a < 5) {
    echo 'falso';
}

// Operador lógico OU (OR)
if ($a > 5 || $a < 5) {
    echo '<br>';
    echo 'ou verdadeiro';
}

$var = true;
var_dump(!$var); // (bool)false


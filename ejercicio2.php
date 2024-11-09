<!-- Problema de Suma de Números Pares:
Crea un script que sume todos los números pares en un array de números enteros. -->

<?php

function sum($numbers):int {
    // $sum = array_sum($numbers); <--
    $sum = 0;
    for($i = 0; $i <= count($numbers) - 1 ; $i++){
        $sum += $numbers[$i];
    }
    return $sum;
}   

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = sum($numbers);

echo "Suma: " . (string)$result;


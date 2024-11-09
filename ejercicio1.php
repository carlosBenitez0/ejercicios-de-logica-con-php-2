<!-- Problema de Lista Invertida:
Escribe un programa que tome un array de números y devuelva una nueva 
lista que contenga los mismos elementos en orden inverso. -->

<?php
    function reverseNumbers($numbers){
        $reversedNumbers = array_reverse($numbers);
        return $reversedNumbers;
    }

    $numbers = [1, 2, 3, 4, 5];
    $reversedNumbers = reverseNumbers($numbers);

    echo '<pre>Numeros: ';
    foreach($numbers as $number){
        echo (string)$number;
    }
    echo "<br>Numeros invertidos:";
    foreach($reversedNumbers as $number){   
        echo (string)$number;
    }
    echo '</pre>';
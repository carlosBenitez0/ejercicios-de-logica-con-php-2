<!-- Problema de Frecuencia de Caracteres:
Implementa una función que tome una cadena de texto y devuelva un array asociativo
que muestre la frecuencia de cada carácter en la cadena. -->

<?php 

function frequency($text): array{
    $text = str_split($text);
    $frequencies = array_count_values($text);
    return $frequencies;
}

$result = frequency("holaaaa mmmundddo");

echo '<pre>';
foreach($result as $key => $value) {
    if($key == " "){
        continue;
    }else if($value == 1){
        echo (string)'La letra ' . $key . ' aparece ' . $value . ' vez <br/>';
    }
    else{
        echo (string)'La letra ' . $key . ' aparece ' . $value . ' veces <br/>';
    }
    
}
echo '</pre>';
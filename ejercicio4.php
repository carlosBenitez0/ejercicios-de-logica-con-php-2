<!-- Problema de Bucle Anidado:
Escribe un programa que utilice bucles anidados para imprimir un 
patrón de asteriscos en forma de pirámide. -->

<?php
    function piramide(){
        $rows = 5;

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $rows - $i - 1; $j++) {
                echo "&nbsp;";
            }
            for ($k = 0; $k < (1 * $i + 1); $k++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    piramide();
?>
<?php
    $hipotenusa = 0;
    $cateto_opuesto = 3;
    $cateto_adyacente = 4;

    $hipotenusa = sqrt(pow($cateto_opuesto,2) + pow($cateto_adyacente,2));

    echo "<h1 align='center'>Calculo de la hipotenusa de un triangulo rectangulo</h1>";
    echo "<h3>Cateto Opuesto del triangulo: $cateto_opuesto</h3>";
    echo "<h3>Cateto Adyacente del triangulo: $cateto_adyacente</h3>";
    echo "<h3>Hipotenusa del triangulo: $hipotenusa</h3>";

?>
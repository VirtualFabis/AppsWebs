<?php

print("<h2>Tipos de variables en PHP</h2>");

echo "<hr>";

$numero =100;

echo "<h3>Esto es una variable  numero : "  , var_dump($numero ), "</h3>";


$cadena = "Wenos dias";

echo "<h3>Esto es una variable  cadena : "  , var_dump($cadena ), "</h3>";


$flotante = 9.66;

echo "<h3>Esto es una variable  flotante : "  , var_dump($flotante ), "</h3>";

$boleana = true;

echo "<h3> Esto es una variable boleana:", var_dump($boleana), "</h3>";

$color  = array("rojo","azul","negro");

echo "<h3> El tercer aareglo es : $color[2]", "</h3>";



?>
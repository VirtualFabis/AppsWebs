<?php

print("<h1>Mi primer codigo en PHP</h1> ");

echo " <p>Mi segundo php <p>"," <h3 >uwu</h3>";

$numero =20;

echo "Esto es una variable  numero : $numero";

echo "<br> <br>";

$palabra = "UvU";

echo " Esto es una variable texto: $palabra";

echo "<br> <br>";

$boleana = true;

echo " Esto es una variable boleana: $boleana";

echo "<br> <br>";

$color  = array("rojo","azul","bat");

echo " Esto es una variable arreglo: $color[2]";

echo "<br> <br>";

$verduras  = array("ver1"=>"tomate","ver2"=>"cebolla");

echo " Esto es una variable arreglo con propiedades: $verduras[ver2]";

echo "<br> <br>";

$frutas = (object)["fruta"=> "pera", "fruta2"=>"manzana"];

echo " Esto es una variable objeto: $frutas->fruta2";


?>
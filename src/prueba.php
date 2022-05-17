<?php
namespace ITEC\DAW\puntos;

require 'clases/punto.php';
require 'clases/poligono.php';
require 'clases/cuadrado.php';
require 'clases/rectangulo.php';

$punto1 = punto::createPunto(0,0);
$punto2 = punto::createPunto(0,4);
$punto3 = punto::createPunto(2,0);

$prueba = rectangulo::createRectangulo($punto1, $punto2, $punto3);


echo $prueba->getDistancia()+" "+$prueba->getDistancia2()+"\n";

$prueba->calcArea();

echo $prueba->getArea();

?>
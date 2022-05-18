<?php
namespace ITEC\DAW\puntos;

require 'clases/punto.php';
require 'clases/poligono.php';
require 'clases/cuadrado.php';
require 'clases/circulo.php';
require 'clases/rectangulo.php';

$punto1 = punto::createPunto(0,0);
$punto2 = punto::createPunto(2,1);

$prueba = rectangulo::createRectangulo($punto1, $punto2);


echo $prueba->getDistancia();

$prueba->calcArea();

echo $prueba->getArea();

?>
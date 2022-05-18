<?php

use ITEC\DAW\puntos\rectangulo;
use ITEC\DAW\puntos\punto;
use PHPUnit\Framework\TestCase;

final class rectanguloTest extends TestCase{
    public function DP_test_rectangulo(){
        return [
            "Rectangulo 1" => [
                6, 36, //distancia, area
                punto::createPunto(1,2),
                punto::createPunto(-3,7)
            ],
            "Rectangulo 2" => [
                8, 70, //distancia, area
                punto::createPunto(3,4),
                punto::createPunto(7,-3)
            ]
        ];
    }
    /**
    * @dataProvider DP_test_rectangulo
    */
    public function test_createRectangulo($longEsper, $areaEsper, $punto1, $punto2){
        $rectanguloPrueba = rectangulo::createRectangulo($punto1, $punto2);
        $rectanguloPrueba->calcArea();
        $this->assertEquals($longEsper, $rectanguloPrueba->getDistancia());
        $this->assertEquals($areaEsper, $rectanguloPrueba->getArea());

    }
}
?>
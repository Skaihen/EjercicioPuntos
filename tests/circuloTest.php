<?php

use ITEC\DAW\puntos\circulo;
use ITEC\DAW\puntos\punto;
use PHPUnit\Framework\TestCase;

final class circuloTest extends TestCase{
    public function DP_test_circulo(){
        return [
            "Circulo 1" => [
                6, 108, //distancia, area
                punto::createPunto(1,2),
                punto::createPunto(-3,7)
            ],
            "Circulo 2" => [
                8, 192, //distancia, area
                punto::createPunto(3,4),
                punto::createPunto(7,-3)
            ]
        ];
    }
    /**
    * @dataProvider DP_test_circulo
    */
    public function test_createCirculo($longEsper, $areaEsper, $punto1, $punto2){
        $circuloPrueba = circulo::createCirculo($punto1, $punto2);
        $circuloPrueba->calcArea();
        $this->assertEquals($longEsper, $circuloPrueba->getDistancia());
        $this->assertEquals($areaEsper, $circuloPrueba->getArea());

    }
}
?>
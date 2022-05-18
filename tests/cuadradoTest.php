<?php

use ITEC\DAW\puntos\cuadrado;
use ITEC\DAW\puntos\punto;
use PHPUnit\Framework\TestCase;

final class cuadradoTest extends TestCase{
    public function DP_test_cuadrado(){
        return [
            "Cuadrado 1" => [
                6, 36, //distancia, area
                punto::createPunto(1,2),
                punto::createPunto(-3,7)
            ],
            "Cuadrado 2" => [
                8, 64, //distancia, area
                punto::createPunto(3,4),
                punto::createPunto(7,-3)
            ]
        ];
    }
    /**
    * @dataProvider DP_test_cuadrado
    */
    public function test_createCuadrado($longEsper, $areaEsper, $punto1, $punto2){
        $cuadradoPrueba = cuadrado::createCuadrado($punto1, $punto2);
        $cuadradoPrueba->calcArea();
        $this->assertEquals($longEsper, $cuadradoPrueba->getDistancia());
        $this->assertEquals($areaEsper, $cuadradoPrueba->getArea());

    }
}
?>
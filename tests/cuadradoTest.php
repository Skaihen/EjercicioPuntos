<?php

use ITEC\DAW\puntos\punto;
use PHPUnit\Framework\TestCase;

final class cuadradoTest extends TestCase{
    public function DP_test_cuadrado(){
        return [
            "Cuadrado 1" => [
                ["X"=>1,"Y"=>2],
                punto::createPunto(1,2),
                punto::createPunto(-3,7)
            ],
            "Cuadrado 2" => [
                ["X"=>-3,"Y"=>7],
                punto::createPunto(6,1),
                punto::createPunto(2,-3)
            ]
        ];
    }
    /**
    * @dataProvider DP_test_cuadrado
    */
    public function test_createCuadrado($esperado, $posX, $posY){
        $puntoPrueba = new punto($posX, $posY);
        $this->assertEquals($esperado, $puntoPrueba->getPos());
        return $puntoPrueba;
    }

    /**
    * @dataProvider DP_test_puntos
    */
    public function test_setPosPunto($esperado, $posX, $posY){
        $puntoPrueba = new punto($posX, $posY);
        $punto2 = new punto(3,9);
        $punto2->setPosPunto($puntoPrueba);
        $this->assertEquals($esperado, $punto2->getPos());
    }
    
    /**
    * @dataProvider DP_test_puntos
    */
    public function test_setPosAbs($esperado, $posX, $posY){
        $puntoPrueba = new punto(3,9);
        $puntoPrueba->setPosAbs($posX, $posY);
        $this->assertEquals($esperado, $puntoPrueba->getPos());
    }

    /**
    * @dataProvider DP_test_puntos
    */
    public function test_setPosRel($esperado, $posX, $posY){
        $puntoPrueba = new punto(0,0);
        $puntoPrueba->setPosRel($posX, $posY);
        $this->assertEquals($esperado, $puntoPrueba->getPos());
    }
}
?>
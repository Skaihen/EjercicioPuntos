<?php
namespace ITEC\DAW\puntos;
use ITEC\DAW\puntos\poligono;

class cuadrado extends poligono{

    public function __construct(punto $punto1, punto $punto2){
        parent::__construct($punto1, $punto2);
    }

    public static function createCuadrado(punto $punto1, punto $punto2){
        return new cuadrado($punto1, $punto2);
    }

    public function calcArea(){
        $this->setArea(pow($this->getDistancia(), 2));
    }
}
?>
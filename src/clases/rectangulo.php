<?php
namespace ITEC\DAW\puntos;
use ITEC\DAW\puntos\poligono;

class rectangulo extends poligono{

    private int $ladoA;
    private int $ladoB;

    public function __construct(punto $punto1, punto $punto2){
        parent::__construct($punto1, $punto2);
        $this->ladoA = $this->getLadoA($punto1, $punto2);
        $this->ladoB = $this->getLadoB($punto1, $punto2);
    }

    public static function createRectangulo(punto $punto1, punto $punto2){
        return new rectangulo($punto1, $punto2);
    }

    public function calcArea(){
        $this->setArea(($this->ladoA * $this->ladoB));
    }

    private function getLadoA(punto $punto1, punto $punto2){
        return (abs($punto1->getPos()["X"]) + abs($punto2->getPos()["X"]));
    }
    private function getLadoB(punto $punto1, punto $punto2){
        return (abs($punto1->getPos()["Y"]) + abs($punto2->getPos()["Y"]));
    }
}
?>
<?php
namespace ITEC\DAW\puntos;

class circulo extends poligono{

    public function __construct(punto $punto1, punto $punto2){
        parent::__construct($punto1, $punto2);
    }

    public static function createCirculo(punto $punto1, punto $punto2){
        return new circulo($punto1, $punto2);
    }

    public function calcArea(){
        $this->setArea((round(pi())*pow($this->getDistancia(), 2)));
    }
}
?>
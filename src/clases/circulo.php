<?php
namespace ITEC\DAW\puntos;
use ITEC\DAW\puntos\poligono;

class circulo extends poligono{

    public function __construct(punto $punto1, punto $punto2){
        $this->distancia = $this->calcDistancia($punto1, $punto2);
    }

    public static function createCirculo(punto $punto1, punto $punto2){
        return new circulo($punto1, $punto2);
    }

    public function calcArea(){
        $this->setArea((pi()*pow($this->radio, 2)));
    }
}
?>
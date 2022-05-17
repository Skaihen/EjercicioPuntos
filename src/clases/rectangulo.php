<?php
namespace ITEC\DAW\puntos;
use ITEC\DAW\puntos\poligono;

class rectangulo extends poligono{

    private int $distancia2;

    public function __construct(punto $punto1, punto $punto2, punto $punto3){
        $this->isRectangulo($this->orderLados($punto1, $punto2, $punto3)) ? $this->distancia = $this->orderLados($punto1, $punto2, $punto3)[1] : $this->distancia = null;
        $this->isRectangulo($this->orderLados($punto1, $punto2, $punto3)) ? $this->distancia2 = $this->orderLados($punto1, $punto2, $punto3)[2] : $this->distancia = null;
    }

    public static function createRectangulo(punto $punto1, punto $punto2, punto $punto3){
        return new rectangulo($punto1, $punto2, $punto3);
    }

    public function getDistancia(){
        return $this->distancia;
    }

    public function getDistancia2(){
        return $this->distancia2;
    }

    public function calcArea(){
        $this->setArea($this->getDistancia()*$this->distancia2);
    }

    public function orderLados(punto $punto1, punto $punto2, punto $punto3): array{
        $ladoa = $this->calcDistancia($punto1, $punto2);
        $ladob = $this->calcDistancia($punto2, $punto3);
        $ladoc = $this->calcDistancia($punto3, $punto1);
        $lados = array($ladoa, $ladob, $ladoc);
        rsort($lados);
        return $lados;
    }

    public function isRectangulo(array $lados): bool{
        return (pow($lados[0],2) == (pow($lados[1],2)+pow($lados[2],2)));
    }
}
?>
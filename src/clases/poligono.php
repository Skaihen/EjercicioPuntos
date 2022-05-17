<?php
namespace ITEC\DAW\puntos;
use ITEC\DAW\puntos\punto;

class poligono{
    private int $area;
    private int $distancia;

    public function calcArea(){
        $this->area = null;
    }

    public function setDistancia($distancia){
        $this->distancia = $distancia;
    }
    
    public function setArea($area){
        $this->area = $area;
    }

    public function getDistancia(){
        return $this->distancia;
    }

    public function getArea(){
        return $this->area;
    }

    public function calcDistancia(punto $punto1, punto $punto2){
        return sqrt((pow(($punto2->getPos()["X"] - $punto1->getPos()["X"]),2) + pow(($punto2->getPos()["Y"] - $punto1->getPos()["Y"]),2)));
    }
}
?>
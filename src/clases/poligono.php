<?php
namespace ITEC\DAW\puntos;
use ITEC\DAW\puntos\punto;

class poligono{
    private int $area;
    private int $distancia;

    public function __construct(punto $punto1, punto $punto2){
        $this->distancia = $this->calcDistancia($punto1, $punto2);
    }

    public function calcArea(){
        $this->area = null;
        return $this->area;
    }

    public function setDistancia($distancia){
        $this->distancia = $distancia;
    }

    public function getDistancia(){
        return $this->distancia;
    }

    public function setArea(int $area){
        return $this->area = $area;
    }

    public function getArea(){
        return $this->area;
    }

    public function calcDistancia(punto $punto1, punto $punto2){
        return round(sqrt((pow(($punto2->getPos()["X"] - $punto1->getPos()["X"]),2) + pow(($punto2->getPos()["Y"] - $punto1->getPos()["Y"]),2))));
    }
}
?>
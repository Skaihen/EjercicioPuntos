<?php
namespace ITEC\DAW\puntos;

class poligono{
    private array $values;

    public function __construct(array $values){
        $this->values = $values;
    }

    public static function createPoligono(array $values){
        return new poligono($values);
    }

    public function calcArea(){
    }
}
?>
<?php
namespace ITEC\DAW\puntos;

class punto{
    private int $posX;
    private int $posY;

    public function __construct(int $posX, int $posY){
        $this->posX = $posX;
        $this->posY = $posY;
    }

    public static function createPunto(int $posX, int $posY){
        return new punto($posX, $posY);
    }

    public function setPosAbs(int $posX, int $posY){
        $this->posX = $posX;
        $this->posY = $posY;
    }

    public function setPosRel(int $posX, int $posY){
        $this->posX += $posX;
        $this->posY += $posY;
    }

    public function getPos(): array{
        return ["X"=>$this->posX, "Y"=>$this->posY];
    }

    public function setPosPunto(punto $punto){
        $this->posX = $punto->getPos()["X"];
        $this->posY = $punto->getPos()["Y"];
    }
}
?>
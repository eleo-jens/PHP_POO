<?php

class Coordonnees
{
    protected float $x;
    protected float $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function setX(float $x): void
    {
        $this->x = $x;
    }
    public function getX(): string
    {
        return $this->x;
    }
    public function setY(float $y): void
    {
        $this->y = $y;
    }
    public function getY(): string
    {
        return $this->y;
    }
}

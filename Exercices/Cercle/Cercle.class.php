<?php

include_once("./Coordonnees.class.php");

class Cercle extends Coordonnees {
    private float $rayon;

    public function __construct(float $x, float $y, float $rayon){
        parent::__construct($x, $y);
        $this->rayon = $rayon;
    }

    public function setRayon(float $rayon): void {
        $this->rayon = $rayon;
    }
    public function getRayon(): string {
        return $this->rayon;
    }
    public function aire(): float {
        return $this->rayon * $this->rayon * pi();
    }
    public function circonference(): float {
        return 2 * $this->rayon * pi();
    }
    public function showCercle(): void {
        echo "<br>";
        echo "Rayon: " .$this->getRayon();
        echo "<br>";
        echo "Centre: (" .$this->getX(). "," .$this->getY(). ")";
        echo "<br>";
        echo "Aire : " . $this->aire();
        echo "<br>";
        echo "Circonférence: " .$this->circonference();
    }
}
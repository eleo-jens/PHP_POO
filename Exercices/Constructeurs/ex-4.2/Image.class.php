<?php 

class Image {

    public function __construct(private string $src, private string $alt){

    }

    public function getSrc(): string {
        return $this->src;
    }

    public function setSrc(string $src): void {
        $this->src = $src;
    }

    public function getAlt(): string {
        return $this->alt;
    }

    public function setAlt(string $alt):void {
        $this->alt = $alt;
    } 

    public function afficher(){
        echo "<img src='" .$this->getSrc()."' alt='".$this->getAlt()."'>";
    }
}
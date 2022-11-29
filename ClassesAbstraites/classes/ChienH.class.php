<?php

class ChienH extends AnimalH{

    public function __construct(string $nom, int $poids)
    {
        parent::__construct($nom, $poids);
    }

    public function aboyer(): void  {
        echo "<br>wouaff";
    }
    public function manger(): void  {
        echo "<br>je mange des os";
    }

}
<?php

class Mage extends Perso
{
    public function __construct(){
        $this->PV = 100;
        $this->MP = 5;
        $this->defense = 0;
        $this->attack = rand(5, 10);
        $this->image = "hat.png";
    }
    
}
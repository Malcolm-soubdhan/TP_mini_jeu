<?php

class Warrior extends Perso
{
    public function __construct(){
        $this->PV = 100;
        $this->MP = 0;
        $this->defense = rand(10, 19);
        $this->attack = rand(20, 40);
        $this->image = "helmet.png";

    }
}
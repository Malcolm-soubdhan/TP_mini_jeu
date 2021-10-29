<?php

class Perso
{   
    protected $bdd;
    protected $nom;
    protected $PV;
    protected $MP;
    protected $defense;
    protected $attack; 
    protected $image;
    protected $etat;
    
    
    public function __construct(){
        try {
            $this->bdd = $bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function getValue(){ // récupère les valeurs pour la créa du personnage
        $PV = $this->PV;
        $MP = $this->MP;
        $defense = $this->defense;
        $attack = $this->attack;
        $image = $this->image;
        return $value = compact('PV', 'MP', 'defense', 'attack', 'image');
    }

    public function setPersonnage($ID) // récupéré les valeurs du personnage dans la BDD
    {
        $sql = "SELECT PV, MP, defense, attack FROM personnage WHERE ID=$ID";
        $request = $this->bdd->query($sql);
        $fetch = $request->fetch(PDO::FETCH_ASSOC);

        $this->PV = $fetch['PV'];
        $this->MP = $fetch['MP'];
        $this->defense = $fetch['defense'];
        $this->attack = $fetch['attack']; 

    }
}



?>
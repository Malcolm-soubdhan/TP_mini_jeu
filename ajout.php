<?php 

$nom = $_POST['nom']; 
$classes = $_POST['classes']; 

if( $classes == 'mage'){
    $mage = new Mage(); 
    $value = $mage->getValue();
    extract($value);
} else {
    $warrior = new Warrior(); 
    $value = $warrior->getValue();
    extract($value);
}


$request=$bdd->prepare('INSERT INTO personnage (id, nom, classe, PV, mp, attack, defense, `image`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?)');
$request->execute(array( $nom, $classes, $PV, $MP, $attack, $defense, $image));

header('Location:index.php');
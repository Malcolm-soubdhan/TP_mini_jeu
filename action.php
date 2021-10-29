<?php
$playerID = isset($_GET['p']);

if (isset($_GET['hit'])) {
    $attackedChr = $_GET['hit'];
    $player = new Perso();
    $player->setPersonnage($playerID);
    var_dump($player);
    // die();

    $opponent = new Perso();
    $opponent->setPersonnage($attackedChr);
    var_dump($opponent);
    die();

} else{
    $attackedChr = $_GET['sleep'];

}
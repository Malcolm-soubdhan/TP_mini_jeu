<?php 

// Travail réalisé par Enzo Langet et Malcolm Soubdhan

try {
    $bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
spl_autoload_register(function ($class_name) {
    include 'class/'.$class_name . '.php';
});


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Le jeux vidéo qu'il est bien</title>
    </head>
    <body>
        <div class="bandeau">
            <h1>Mini-jeu de combat</h1>  <img src="img/sword_color.png" alt="sword icon" id="sword_color">
        </div>
        <div class="content">
            <?php include 'gestion.php' ?>
        </div>
    </body>
</html>

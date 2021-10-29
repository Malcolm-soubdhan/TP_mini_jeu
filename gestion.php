<?php 
if(isset($_GET['creation']))                            { require 'view/creation.php'   ;}
elseif(isset($_GET['fight']))                           { require 'view/fight.php'      ;}
elseif(isset($_GET['ajout']))                           { require 'ajout.php'           ;}
elseif(isset($_GET['delet']))                           { require 'delet.php'           ;}
elseif(isset($_GET['hit']) || isset($_GET['sleep']))    { require 'action.php'           ;}
else                                                    { require 'view/home.php'       ;}

 ?>
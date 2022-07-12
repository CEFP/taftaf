<?php
session_start();
include("base.php");
if (isset($_POST['textemodifier'], $_POST['datemodifier'])) {
  $textemodifier=htmlspecialchars(trim($_POST['textemodifier']));
  $datemodifier=htmlspecialchars(trim($_POST['datemodifier']));
  
  $misajour=$BaseDeDonnees->prepare("UPDATE `taches` SET `description`=$textemodifier,`dateHeureLimite`=$datemodifier WHERE idTaches=?");
  $misajour->execute(array($idtache));
 $misajour->closeCursor(); 
}


?>
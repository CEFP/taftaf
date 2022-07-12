<?php
//Connexion à la base de données
include("base.php");

if (isset($_POST['description'],$_POST['dateHeureLimite'])) {
  $description=htmlspecialchars( $_POST['description']);
  $dateHeureLimite=htmlspecialchars($_POST['dateHeureLimite']);
  $requettes=$BaseDeDonnees->prepare("INSERT INTO `taches`( `description`, `dateHeureLimite`,`Utilisateur_idUtilisateur`) VALUES (?,?,?)");
  $requettes->execute(array($description,$dateHeureLimite,$_SESSION["connexion2"]));
  
 $valeurid= $BaseDeDonnees-> lastInsertId();
  $ptt=$BaseDeDonnees->prepare("INSERT INTO `assignations`( `Utilisateur_idUtilisateur`, `Taches_idTaches`, `Utilisateur_idUtilisateur1`) VALUES (?,?,?)");
  $ptt->execute(array($_SESSION["connexion2"],$valeurid,$_SESSION["connexion2"]));
  
  $requettes->closeCursor();

header('Location: ./viewtask.php?id='.$valeurid);

}

?>
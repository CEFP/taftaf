<?php
include ('config.php');
if (isset($_POST['description'], $_POST['dateHeureLimite'])){
    $description=$_POST['description'];
    $dateHeureLimite=$_POST['dateHeureLimite'];
    $req=$mydb->prepare("INSERT INTO `taches`( `description`, `dateHeureLimite`, `Utilisateur_idUtilisateur`) VALUES (?,?,?)");
    $req->execute(array($description, $dateHeureLimite, $_SESSION['Connexion']));
    $var=$mydb->lastInsertId();
    $ptt=$mydb->prepare("INSERT INTO `assignations`( `Utilisateur_idUtilisateur`, `Taches_idTaches`, `Utilisateur_idUtilisateur1`) VALUES (?,?,?)");
    $ptt->execute(array($_SESSION['Connexion'], $var, $_SESSION['Connexion']));
    $req->closeCursor();
    header('Location: ./viewtask.php?id='.$var);
}
//*Utilisateur_idUtilisateur correspond a celui a qui on a assigné la tache.
//*Utilisateur_idUtilisateur1 correspond a celui qui assigne la tache.
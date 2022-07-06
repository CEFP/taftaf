<?php
session_start();

$mydb= new PDO('mysql:host=localhost;dbname=taftaf','root', '');

if ( isset($_SESSION['Connexion']) ) {
    $req = $mydb->prepare("SELECT * FROM `utilisateur` WHERE `idUtilisateur`=? LIMIT 1");
    $req->execute(array($_SESSION['Connexion']));
    $userDonnees = $req->fetch();
    $req->closeCursor();
}

if ( !(isset($userDonnees) AND $userDonnees) ) {
    header('Location: ./signin.php');
}
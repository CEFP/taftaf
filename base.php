<?php
session_start();
try
{
$BaseDeDonnees = new PDO ('mysql:host=0.0.0.0:3306;dbname=taftaf', 'root', 'root');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
 
 if (isset($_SESSION['connexion2'])) {
   $voir=$BaseDeDonnees->prepare("SELECT * FROM `utilisateur` WHERE `idUtilisateur`=? LIMIT 1 ");
   $voir->execute(array($_SESSION['connexion2']));
   $UserConnecter=$voir->fetch();
   $_SESSION["connexion2"]=$UserConnecter["idUtilisateur"];
   $voir->closeCursor();
 }
 if (!(isset($UserConnecter) AND $UserConnecter)) {
   header('Location: ./signin.php');
 }

?>
<?php
//Connexion à la base de données
session_start();
$BaseDeDonnees = new PDO ("mysql:host=0.0.0.0:3306 dbname=taftaf", "root", "root");

if (isset($_POST["email"], $_POST["motdepasse"])) {

  if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",
    $_POST['email'])) {
    $email = htmlspecialchars($_POST["email"]);
  }
  $motdepasse = htmlspecialchars($_POST["motdepasse"]);
  
  $rech = $BaseDeDonnees->prepare("SELECT count(*) AS nbre FROM 'utilisateur' WHERE email=?");
  $rech->execute(array($email));
  $data = $rech->fetch();
  $rows = $rech["count(*)"];
  
  switch ($rows) {
    case 0:
      $erreur = "votre adresse email ou mot de passe est incorrect";
      break;
    case 1:
      if (password_verify($motdepasse, $data["motdepasse"])) {
        $_SESSION["CompteConnecter"] = $data["idUtilisateur"];
        header("location:stats.php");
      } else {
        $erreur = "L\'adresse email ou le mot de passe incorrect";
      }
      break;
    default:
      $erreur = "Une erreur c\'est produit lors de la connexion";
      break;
  }
  $rech->closeCursor();
}
?>
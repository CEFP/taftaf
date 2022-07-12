<?php
//Connexion à la base de données
session_start();
try
{
$BaseDeDonnees = new PDO ('mysql:host=0.0.0.0:3306;dbname=taftaf', 'root', 'root');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

if (isset($_POST["email"], $_POST["motdepasse"])) {
  //Vérification du format de l'email
  if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",
    $_POST['email'])) {
    $email = htmlspecialchars($_POST["email"]);
  }
  $email = htmlspecialchars($_POST["email"]);
  $motdepasse = htmlspecialchars(($_POST["motdepasse"]));

  //Vérification de l'existence des données entrés par l'utilisateur dans la base de données
  $search = $BaseDeDonnees->prepare('SELECT *, COUNT(*) AS nbre FROM `utilisateur` WHERE `email`=?');
  $search->execute(array($email));
  $data = $search->fetch();
  switch ($data['nbre']) {
    case 0:
      $error = 'Votre addresse email est incorrecte';
      break;
    case 1:
      if (password_verify($motdepasse, $data['motdepasse'])) {
        $_SESSION['Connexion'] = $data['nom'];
        $_SESSION['connexion1'] = $data['prenom'];
        $_SESSION['connexion2'] = $data['idUtilisateur'];
        header('Location: ./stats.php');

      } else {
        $error = 'l\'addresse email ou le mot de passe est incorrecte';
      }
      break;
    default:
      $errorr = 'Une erreur s\'est produite lors de la connexion';

      break;
  }
  echo $data['nbre'];
  $search->closeCursor();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAF-TAF | Connexion</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="shortcut icon" href="images/taftaf3.png" type="image/x-icon">
</head>
<body>
  <div class="container-fluid row justify-content-center align-items-center vh-100">
    <!-- <div class="col-md-4"></div> -->
    <div class="col-md-4">
      <div class="text-center">
        <img src="image/taftaf3.png" alt="Logo de Taf-Taf" width="200px">
        <h3>
          TAF-TAF
        </h3>
        <form action="" method="POST">
          <?php
          if (isset($error)) {
            echo '<div class="alert alert-danger">' . $error . '</div>';
          }
          ?>
          <input type="email" name="email" class="form-control mb-3" placeholder="Email">
          <input type="password" name="motdepasse" class="form-control mb-3" placeholder="Mot de passe">
          <button type="submit" class="btn btn-primary btn-lg mb-4">
            Connexion
          </button>
        </form>
        <p>
          Vous n'êtes pas encore inscrit? <a href="./signup.php">Inscrivez-vous</a>
        </p>
      </div>
    </div>
    <!-- <div class="col-md-4"></div> -->
  </div>
</body>
</html>
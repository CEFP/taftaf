<?php
try
{
$BaseDeDonnees = new PDO ('mysql:host=0.0.0.0:3306;dbname=taftaf', 'root', 'root');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
 

if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['motdepasse'], $_POST['telephone'])) {
  $nom =htmlspecialchars(trim($_POST['nom']));
  $prenom =htmlspecialchars(trim( $_POST['prenom']));
  
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",
    $_POST['email'])) {
    $email =$_POST["email"];
  }
  $motdepasse = PASSWORD_HASH($_POST['motdepasse'], PASSWORD_DEFAULT);
  $telephone = $_POST['telephone'];
  $selection = $BaseDeDonnees->prepare("SELECT * FROM `utilisateur` WHERE email=? LIMIT 1");
  $selection->execute(array($email));
  if ($data = $selection->fetch()) {
    $usersdetecte = TRUE;
  }
  $selection->closeCursor();
}

if (!isset($usersdetecte)) {
  $req = $BaseDeDonnees->prepare("INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `telephone`, `motdepasse`) VALUES (?,?,?,?,?)");
  $req->execute(array($nom, $prenom, $email, $telephone, $motdepasse));
  $req->closeCursor();
  echo '<div class="alert alert-success">
    Sucessful registration
    </div> <a href="./stats.php">Votre tableau de bord</a>';
} else {
  echo '<div class="alert alert-danger btn-lg mb-4">
            cet utilisateur existe deja. insérez un autre email
            </div><a href="./signup.php">Réessayez</a>';
    }

?>


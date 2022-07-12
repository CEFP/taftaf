<?php
if (!isset($usersdetecte)) {
  $req = $BaseDeDonnees->prepare("INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `telephone`, `motdepasse`) VALUES (?,?,?,?,?)");
  $req->execute(array($nom, $prenom, $email, $telephone, $motdepasse));
  $req->closeCursor();
  echo '<button type="submit" class="alert alert-sucess btn-lg mb-4">
    Sucessful registration
</button>';
} else {
  echo '<button type="submit" class="alert alert-danger btn-lg mb-4">
   cet utilisateur existe deja. insérez un autre email
</button>';
}
?>


<?php
$mydb= new PDO('mysql:host=localhost;dbname=taftaf','root', '');
echo '<link rel="stylesheet" href="./css/bootstrap.css">';
if (isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['motdepasse'],$_POST['telephone'] )) {
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $motdepasse =PASSWORD_HASH($_POST['motdepasse'],PASSWORD_DEFAULT);
    $telephone =$_POST['telephone']; 
$selection = $mydb->prepare("SELECT * FROM `utilisateur` WHERE email=? LIMIT 1");
$selection->execute(array($email));
if ($data = $selection->fetch() ){
    $usersdetecte = TRUE;
}
$selection->closeCursor();
}
if( !isset($usersdetecte) )  { 
    $req = $mydb->prepare("INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `telephone`, `motdepasse`) VALUES (?,?,?,?,?)");
    $req->execute(array($nom, $prenom, $email,$telephone, $motdepasse )); 
    $req->closeCursor();
    echo '<div class="alert alert-success">
    Sucessful registration
    </div> <a href="./stats.php">Votre tableau de bord</a>';
     }
else{

        echo '<div class="alert alert-danger btn-lg mb-4">
            cet utilisateur existe deja. insérez un autre email
            </div><a href="./signup.php">Réessayez</a>';
    }
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAF-TAF | Inscription</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="shortcut icon" href="./logo/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container-fluid row justify-content-center align-items-center vh-100">
        <!-- <div class="col-md-4"></div> -->
        <div class="col-md-4">
            <div class="text-center">
                <img src="./images/taftaf3.png" alt="Logo de Taf-Taf" width="200px">
                <h3>
                    TAF-TAF
                </h3>
                <form action="" method="POST">
                    <input type="email" name="email" class="form-control mb-3" placeholder="Email">
                    <input type="password" name="motdepasse" class="form-control mb-3" placeholder="Mot de passe">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nom" class="form-control mb-3" placeholder="Nom">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="prenom" class="form-control mb-3" placeholder="Prénoms">
                        </div>
                    </div>
                    <input type="tel" name="telephone" class="form-control mb-3" placeholder="Numero de téléphone">
                    <button type="submit" class="btn btn-primary btn-lg mb-4">
                        Inscription
                    </button>
                </form>
                <p>
                    Êtes-vous déjà inscrit? <a href="./signin.html">Connectez-vous</a>
                </p>
            </div>
        </div>
        <!-- <div class="col-md-4"></div> -->

    </div>
</body>
</html>

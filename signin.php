<?php
session_start();
$mydb= new PDO('mysql:host=localhost;dbname=taftaf','root', '');
if(isset($_POST['email'], $_POST['motdepasse'])){
    $email=$_POST['email'];
    $password=$_POST['motdepasse'];
    $req= $mydb->prepare('SELECT *, COUNT(*) AS nombre_compte FROM `utilisateur` WHERE `email`=?');
    $req->execute(array($email));
    $data = $req->fetch();
    switch ($data['nombre_compte']) {
        case 0:
            $error = 'Votre addresse email est incorrecte';
            break;
            case 1:
                if (password_verify($password, $data['motdepasse'])){

                     $_SESSION['Connexion0'] = $data['nom'];
                     $_SESSION['connexion1'] = $data['prenom'];
                    $_SESSION['Connexion'] = $data['idUtilisateur'];
                    header('Location: ./stats.php');

                }
                else{
                    $error = 'l\'addresse email ou le mot de passe est incorrecte';
                }
                

            break;
            default:
            $error = 'Une erreur s\'est produite lors de la connexion';

            break;
    }
    echo $data['nombre_compte'];
    $req->closeCursor();

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
                <img src="images/taftaf3.png" alt="Logo de Taf-Taf" width="200px">
                <h3>
                    TAF-TAF
                </h3>
                <form action="" method="POST">
                <?php
                if (isset($error)){
                    echo '<div class="alert alert-warning">' . $error .  '</div>';
                }
                ?>
                    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                    <input type="password" name="motdepasse" class="form-control mb-3" placeholder="Mot de passe" required>
                    <button type="submit" class="btn btn-primary btn-lg mb-4">
                        Connexion
                    </button>
                </form>
                <p>
                    Vous n'êtes pas encore inscrit? <a href="./signup.html">Inscrivez-vous</a>
                </p>
            </div>
        </div>
        <!-- <div class="col-md-4"></div> -->
    </div>
</body>
</html>

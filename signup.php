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
                <img src="./image/logo.png" alt="Logo de Taf-Taf" width="200px">
                <h3>
                    TAF-TAF
                </h3>
                <form action="inscription.php" method="POST">
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
                    Êtes-vous déjà inscrit? <a href="./signin.php">Connectez-vous</a>
                </p>
            </div>
        </div>
        <!-- <div class="col-md-4"></div> -->

    </div>
</body>
</html>

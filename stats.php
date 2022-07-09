
<?php
session_start();
if ($_SESSION['Connexion']  !=="") {
$info=$_SESSION['Connexion'];

}
if ($_SESSION['connexion1'] !=="") {
$info1=$_SESSION['connexion1'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
<?php include("header.php"); ?>
    <main>
        <div class="container-fluid">
            <div class="row vh-100 align-items-center">
                <div class="col-md-3">

                </div>
                <div class="col-md-6 text-center">
                    <h1>Bonjour <?php echo"$info $info1"; ?> </h1>
                    <p> Recapitulatif de la semaine en cours</p>
                    <div class="row mb-5 mt-5">
                        <div class="col-md-3">
                            <h3 class="mb-3 display-4">
                                12
                            </h3>
                            <span>taches en attente</span>

                        </div>
                        <div class="col-md-3">
                            <h3 class="mb-3 display-4">
                                12
                            </h3>
                            <span>taches en cours</span>

                        </div>
                        <div class="col-md-3">
                            <h3 class="mb-3 display-4">
                                12
                            </h3>
                            <span>Taches terminées</span>
                        </div>
                        <div class="col-md-3">
                            <h3 class="mb-3 display-4">
                                12
                            </h3>
                            <span>taches annulées</span>

                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="btn btn-primary btn-lg m-2">
                            Voir toutes les taches
                        </button>
                        <button class="btn btn-primary btn-lg m-2">
                            Voir mes taches
                        </button>
                    </div>

                </div>
                <div class="col-md-3">

                </div>

                </div>

            </div>

        </div>
    </main>
    <?php include("footer.php"); ?>
</body>
</html>
